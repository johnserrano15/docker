'use strict'

const express = require('express');
const app = express();

const PORT = 3000;

app.get('', (req, res) => {
  res.status(200).send('Hello world desde docker')
})

app.listen(PORT, () => {
  console.log(`Server on port http://localhost:${PORT}`);
})