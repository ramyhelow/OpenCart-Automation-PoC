describe('Add to Cart Functionality', () => {
  beforeEach(() => {
    cy.visit('/')
    // Log in first to ensure we're authenticated
    cy.get('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > a > span').click()
    cy.get('#top > div > div > div.col.text-end > ul > li:nth-child(2) > div > ul > li:nth-child(2) > a').click()
    
    // Enter login credentials
    cy.get('#input-email').type('test@example.com')
    cy.get('#input-password').type('Password123!')
    cy.get('button[type="submit"]').click()
  })

  it('should add an item to the cart', () => {
    // Navigate to a product
    cy.get('.product-layout').first().click()
    cy.screenshot('product-page')

    // Add to cart
    cy.get('#button-cart').click()
    cy.screenshot('item-added')

    // Verify success message
    cy.get('.alert.alert-success').should('be.visible')
    cy.screenshot('success-message')

    // Verify cart count
    cy.get('.cart > span').should('contain', '1')
    cy.screenshot('cart-updated')
  })

  it('should verify cart contents', () => {
    // Navigate to cart
    cy.get('.cart > span').click()
    cy.screenshot('cart-dropdown')

    // Verify cart contents
    cy.get('.table-responsive').should('be.visible')
    cy.get('.table-responsive tbody tr').should('have.length', 1)
    cy.screenshot('cart-contents')
  })
})
