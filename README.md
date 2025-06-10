# OpenCart Automation PoC

A fork of OpenCart (https://github.com/opencart/opencart) with automated testing using Cypress and TestCafe.

This project is based on OpenCart, a popular open-source PHP shopping cart system, with added automated testing capabilities.

## Project Structure

```
.
├── cypress/                 # Cypress test suite
│   ├── e2e/               # End-to-end tests
│   │   ├── add-to-cart.cy.js
│   │   ├── register.cy.js
│   │   └── api/
│   │       └── register-api.cy.js
│   └── cypress.config.js  # Cypress configuration
├── testcafe/              # TestCafe test suite
│   └── register.test.js
├── config.php            # Application configuration
└── .gitignore           # Git ignore file
```

## Prerequisites

- PHP 7.4 or higher
- MySQL/MariaDB
- MAMP (for local development)
- Node.js (for running tests)

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/ramyhelow/OpenCart-Automation-PoC
   cd OpenCart-Automation-PoC
   ```

2. Set up database:
   - Create a new database
   - Import the SQL schema
   - Update database credentials in `config.php`

3. Install dependencies:
   ```bash
   # For Cypress
   npm install cypress
   
   # For TestCafe
   npm install testcafe
   ```

4. Start MAMP:
   - Start Apache and MySQL services
   - Ensure the correct port configurations

## Running Tests

### Cypress Tests
```bash
# Run all Cypress tests
npx cypress run

# Run specific test
npx cypress run --spec "cypress/e2e/register.cy.js"
```

### TestCafe Tests
```bash
# Run all TestCafe tests
npx testcafe chrome testcafe/

# Run specific test
npx testcafe chrome testcafe/register.test.js
```

## Testing Coverage

The project includes automated tests for:
- User registration
- Shopping cart functionality
- API endpoints
- UI interactions

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request
