const { defineConfig } = require('cypress')
const { addMatchImageSnapshotPlugin } = require('cypress-image-snapshot/plugin')

module.exports = defineConfig({
  e2e: {
    setupNodeEvents(on, config) {
      return addMatchImageSnapshotPlugin(on, config)
    },
    baseUrl: 'http://localhost:8888',
    browser: 'chrome',
    viewportWidth: 1280,
    viewportHeight: 720,
    env: {
      browser: 'chrome',
      headed: true
    },
    reporter: 'mochawesome',
    reporterOptions: {
      reportDir: 'cypress/reports',
      overwrite: false,
      html: true,
      json: true,
      charts: true,
      reportPageTitle: 'Cypress Test Report',
      embeddedScreenshots: true,
      inlineAssets: true,
      saveAllAttempts: true
    },
    env: {
      browser: 'chrome',
      headed: true
    }
  },
})
