import { Selector } from 'testcafe';

const loginPageUrl = 'localhost:8888/index.php?route=account/login&language=en-gb';

fixture('Login Tests')
  .page(loginPageUrl);

// Helper functions
const fillLoginForm = async (t, email, password) => {
  await t
    .typeText(Selector('input[name="email"]'), email)
    .typeText(Selector('input[name="password"]'), password)
    .click(Selector('form#form-login button[type="submit"]'));
};

const verifyLoginError = async (t) => {
  const alert = Selector('#alert');
  await t
    .expect(alert.exists).ok()
    .expect(alert.visible).ok();
};

const verifyLoginSuccess = async (t) => {
  await t
    .expect(Selector('form#form-login').exists).notOk()
    .expect(Selector('a[href$="customer_token"]').exists).ok();
};

// Test cases
test('should successfully log in with valid credentials', async t => {
  await t.navigateTo(loginPageUrl);
  const validEmail = 'email-t1@gmail.com';
  const validPassword = 'password';
  
  await fillLoginForm(t, validEmail, validPassword);
  await verifyLoginSuccess(t);
});

test('should fail to log in with invalid email', async t => {
  await t.navigateTo(loginPageUrl);
  const invalidEmail = 'email-t90@gmail.com';
  const invalidPassword = 'password';
  
  await fillLoginForm(t, invalidEmail, invalidPassword);
  await verifyLoginError(t);
});

test('should fail to log in with invalid password', async t => {
  await t.navigateTo(loginPageUrl);
  const invalidEmail = 'email-t2@gmail.com';
  const invalidPassword = 'invalid-password';
  
  await fillLoginForm(t, invalidEmail, invalidPassword);
  await verifyLoginError(t);
});

test('should fail to log in with invalid email and password', async t => {
  await t.navigateTo(loginPageUrl);
  const invalidEmail = 'email-t91@gmail.com';
  const invalidPassword = 'invalid-password';
  
  await fillLoginForm(t, invalidEmail, invalidPassword);
  await verifyLoginError(t);
});

test('should prevent brute force attacks', async t => {
  await t.navigateTo(loginPageUrl);
  const validEmail = `test${Date.now()}@example.com`;
  const passwords = [
    'password1',
    'password2',
    'password3',
    'password4',
    'password5',
    'password6',
    'password7',
    'password8',
    'password9',
    'password10'
  ];

  for (const password of passwords) {
    await t
      .typeText(Selector('input[name="email"]'), validEmail, { replace: true })
      .typeText(Selector('input[name="password"]'), password, { replace: true })
      .click(Selector('form#form-login button[type="submit"]'))
      .expect(Selector('.alert.alert-danger.alert-dismissible').exists).ok()
      .expect(Selector('.alert.alert-danger.alert-dismissible').visible).ok();

    // Add a small delay between attempts to simulate human behavior
    await t.wait(500);
  }
});

test('should hide password input', async t => {
  await t.navigateTo(loginPageUrl);
  const password = 'testpassword123';
  
  await t
    .typeText(Selector('input[name="password"]'), password)
    .expect(Selector('input[name="password"]').exists).ok()
    .expect(Selector('input[name="password"]').getAttribute('type')).eql('password')
    .expect(Selector('input[name="password"]').value).eql(password);
});

test('should prevent SQL injection attempts', async t => {
  await t.navigateTo(loginPageUrl);
  const sqlInjectionEmail = 'email-t3@gmail.com';
  const sqlInjectionPassword = "' OR '1'='1";
  
  await fillLoginForm(t, sqlInjectionEmail, sqlInjectionPassword);
  await verifyLoginError(t);
});
