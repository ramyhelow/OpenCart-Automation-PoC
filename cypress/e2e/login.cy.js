// Helper functions
const loginPageUrl = '/index.php?route=account/login&language=en-gb'

const fillLoginForm = (email, password) => {
  cy.get('input[name="email"]').type(email)
  cy.get('input[name="password"]').type(password)
  cy.get('form#form-login button[type="submit"]').click()
}

const verifyLoginError = () => {
  cy.get('#alert', { timeout: 10000 }).should('exist')
}

const verifyLoginSuccess = () => {
  cy.url({ timeout: 10000 }).should('include', 'customer_token')
  cy.get('#form-login', { timeout: 10000 }).should('not.exist')
}

// Test cases
describe('Login Test - Valid email and password', () => {
  const validEmail = 'email-t1@gmail.com'
  const validPassword = 'password'

  it('should successfully log in with valid credentials', () => {
    cy.visit(loginPageUrl)
    fillLoginForm(validEmail, validPassword)
    verifyLoginSuccess()
  })
})

describe('Login Test - Invalid email', () => {
  const invalidEmail = 'email-t90@gmail.com'
  const invalidPassword = 'password'

  it('should fail to log in with invalid credentials', () => {
    cy.visit(loginPageUrl)
    fillLoginForm(invalidEmail, invalidPassword)
    verifyLoginError()
  })
})

describe('Login Test - Invalid password', () => {
  const invalidEmail = 'email-t2@gmail.com'
  const invalidPassword = 'invalid-password'

  it('should fail to log in with invalid credentials', () => {
    cy.visit(loginPageUrl)
    fillLoginForm(invalidEmail, invalidPassword)
    verifyLoginError()
  })
})

describe('Login Test - Invalid email and password', () => {
  const invalidEmail = 'email-t91@gmail.com'
  const invalidPassword = 'invalid-password'

  it('should fail to log in with invalid credentials', () => {
    cy.visit(loginPageUrl)
    fillLoginForm(invalidEmail, invalidPassword)
    verifyLoginError()
  })
})

describe('Login Test - Brute Force Attack', () => {
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
  ]

  it('should prevent brute force attacks', () => {
    cy.visit(loginPageUrl)

    // Attempt multiple passwords in quick succession
    passwords.forEach((password, index) => {
      cy.get('input[name="email"]').clear().type(validEmail)
      cy.get('input[name="password"]').clear().type(password)
      cy.get('form#form-login button[type="submit"]').click()

      // Verify error message appears
      cy.get('.alert.alert-danger.alert-dismissible', { timeout: 10000 }).should('exist')

      // Add a small delay between attempts to simulate human behavior
      if (index < passwords.length - 1) {
        cy.wait(500) // 500ms delay
      }
    })
  })
})

// Test password security
describe('Login Test - Password Security', () => {
  it('should hide password input', () => {
    cy.visit(loginPageUrl)

    // Type a password
    const password = 'testpassword123'
    cy.get('input[name="password"]').clear().type(password)
    
    // Verify the input type is password
    cy.get('input[name="password"]').should('have.attr', 'type', 'password')
    
    // Verify the input value is not visible (should be masked)
    cy.get('input[name="password"]').should('have.value', password)
    .and('have.attr', 'type', 'password')
    
    // Verify the input displays masked characters (dots or asterisks)
    cy.get('input[name="password"]').invoke('attr', 'type')
      .should('equal', 'password')
  })
})

describe('Login Test - Password SQL Injection', () => {
  const sqlInjectionEmail = "email-t3@gmail.com"
  const sqlInjectionPassword = "' OR '1'='1"

  it('should prevent SQL injection attempts', () => {
    cy.visit(loginPageUrl)
    fillLoginForm(sqlInjectionEmail, sqlInjectionPassword)
    verifyLoginError()
  })
})
