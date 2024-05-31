// src/db.js
const sql = require('mssql');

const config = {
  server: 'DESKTOP-KIDTBP9',
  database: 'smart_health_hub',
  options: {
    trustedConnection: true 
  }
};

async function getConnection() {
  try {
    await sql.connect(config);
    console.log('Connected to SQL Server');
  } catch (error) {
    console.error('Error connecting to SQL Server:', error.message);
  }
}

module.exports = getConnection;