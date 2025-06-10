import { Selector } from 'testcafe';

fixture `User Registration`
    .page `http://localhost:8888/`;

const testUser = {
    firstName: `Test${Date.now()}`,
    lastName: 'User',
    email: `test${Date.now()}@example.com`,
    password: 'Password123!',
    agree: true
};

const registerMenu = Selector('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > a > span');
const registerLink = Selector('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > ul > li:nth-child(1) > a');
const firstNameInput = Selector('#input-firstname');
const lastNameInput = Selector('#input-lastname');
const emailInput = Selector('#input-email');
const passwordInput = Selector('#input-password');
const agreeCheckbox = Selector('label.form-check-label[for="input-agree"]');
const submitButton = Selector('form#form-register button[type="submit"]');
const successPageHeader = Selector('h1');



test('should allow a new user to register', async t => {

    // Click the register link
    await t
        .click(registerMenu)
        .click(registerLink)
        .takeScreenshot('registration-page');

    await t.eval(() => {
        document.body.style.zoom = "50%";
    });

    // Fill out the registration form
    await t
        .typeText(firstNameInput, testUser.firstName)
        .typeText(lastNameInput, testUser.lastName)
        .typeText(emailInput, testUser.email)
        .typeText(passwordInput, testUser.password)
        .takeScreenshot('filled-form');

    // Accept terms and conditions
    await t
        .click(agreeCheckbox)
        .takeScreenshot('terms-accepted');

    // Submit the registration form
    await t
        .click(submitButton)
        .takeScreenshot('after-submit');

    // Verify successful registration
    await t
        .expect(successPageHeader.textContent).contains('Your Account Has Been Created!')
        .takeScreenshot('success-page');
});
