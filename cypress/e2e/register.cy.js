describe('User Registration', () => {
  const testUser = {
    firstName: `Test${Date.now()}`,
    lastName: 'User',
    email: `test${Date.now()}@example.com`,
    password: 'Password123!',
    agree: true
  }

  beforeEach(() => {
    cy.visit('/')
  })

  it('should allow a new user to register', () => {
    // Click the register link
    cy.get('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > a > span').click()
    cy.get('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > ul > li:nth-child(1) > a').click()
    cy.screenshot('registration-page')

    // Fill out the registration form
    cy.get('#input-firstname').type(testUser.firstName)
    cy.get('#input-lastname').type(testUser.lastName)
    cy.get('#input-email').type(testUser.email)
    cy.get('#input-password').type(testUser.password)
    cy.screenshot('filled-form')

    // Accept terms and conditions
    cy.get('x-switch[name="agree"]').find('input[type="checkbox"]').check()
    cy.screenshot('terms-accepted')

    // Submit the registration form
    cy.get('form#form-register button[type="submit"]').click()
    cy.screenshot('after-submit')

    // Verify successful registration
    cy.get('h1').should('contain', 'Your Account Has Been Created!', { timeout: 10000 })
    cy.screenshot('success-page')
  })
})
