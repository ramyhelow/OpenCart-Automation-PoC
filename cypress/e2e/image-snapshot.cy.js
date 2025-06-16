describe('Image Snapshot Tests', () => {
  beforeEach(() => {
    cy.visit('/index.php?route=account/login&language=en-gb')
  })

  it('should match login page screenshot', () => {
    // Take a screenshot of the entire page
    cy.matchImageSnapshot()
  })

  it('should match login form screenshot', () => {
    // Take a screenshot of a specific element
    cy.get('form#form-login').matchImageSnapshot()
  })

  it('should match login page with different viewport', () => {
    // Change viewport and take screenshot
    cy.viewport(1920, 1080)
    cy.matchImageSnapshot()
  })

  it('should match login page with custom config', () => {
    // Take screenshot with custom configuration
    cy.matchImageSnapshot({
      customDiffConfig: { threshold: 0.05 },
      failureThreshold: 0.05,
      failureThresholdType: 'percent'
    })
  })

  it('should match login page with excluded elements', () => {
    // Take screenshot excluding specific elements
    cy.matchImageSnapshot({
      exclude: ['input[type="password"]', '.alert']
    })
  })
})
