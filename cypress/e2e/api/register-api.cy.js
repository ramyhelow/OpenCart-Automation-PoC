describe('API Registration', () => {
  const baseUrl = 'http://localhost:8888/index.php?route=api/customer/add';
  
  const testUser = {
    firstName: `Test${Date.now()}`,
    lastName: 'User',
    email: `test${Date.now()}@example.com`,
    password: 'Password123!',
    agree: true
  };

  beforeEach(() => {
    cy.intercept('POST', baseUrl).as('registerApi');
  });

  it('should register a new user via API', () => {
    // Prepare the request body
    const requestBody = {
      firstname: testUser.firstName,
      lastname: testUser.lastName,
      email: testUser.email,
      password: testUser.password,
      agree: testUser.agree
    };

    // Make the API request
    cy.request({
      method: 'POST',
      url: baseUrl,
      body: requestBody,
      headers: {
        'Content-Type': 'application/json'
      }
    }).then((response) => {
      // Verify the response
      expect(response.status).to.eq(200);
      expect(response.body).to.have.property('success');
      expect(response.body.success).to.be.true;
      expect(response.body).to.have.property('customer_id');
      expect(response.body.customer_id).to.be.a('string');
    });

    // Verify the API request was made
    cy.wait('@registerApi').its('request.body').should('deep.eq', requestBody);
  });

  it('should fail with invalid email', () => {
    const invalidEmailBody = {
      firstname: 'John',
      lastname: 'Doe',
      email: 'invalid-email',
      password: 'Password123!',
      agree: true
    };

    cy.request({
      method: 'POST',
      url: baseUrl,
      body: invalidEmailBody,
      headers: {
        'Content-Type': 'application/json'
      },
      failOnStatusCode: false
    }).then((response) => {
      expect(response.status).to.eq(400);
      expect(response.body).to.have.property('error');
      expect(response.body.error).to.include('E-Mail Address does not appear to be valid!');
    });
  });

  it('should fail with missing required fields', () => {
    const missingFieldsBody = {
      email: 'missing@example.com'
    };

    cy.request({
      method: 'POST',
      url: baseUrl,
      body: missingFieldsBody,
      headers: {
        'Content-Type': 'application/json'
      },
      failOnStatusCode: false
    }).then((response) => {
      expect(response.status).to.eq(400);
      expect(response.body).to.have.property('error');
      expect(response.body.error).to.include('Warning: You must agree to the Privacy Policy!');
    });
  });
});
