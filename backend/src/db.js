// src/db.js
const mysql = require('mysql2');

const connection = mysql.createConnection({
  host: 'your-mysql-host',
  user: 'your-mysql-username',
  password: 'your-mysql-password',
  database: 'smart_health_hub',
});

module.exports = connection;
