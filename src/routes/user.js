const express = require('express');
const router = express.Router();
const connection = require('../utils/databaseConnection');

router.get('/registros', (req, res) => {
    connection.query('SELECT * FROM registros', (err, results) => {
        if (err) {
            return res.status(500).send('Error en la consulta de registros');
        }
        res.json({ registros: results });
    });
});

router.post('/registros', (req, res) => {

    const { usuario, contraseña } = req.body;

    connection.query('INSERT INTO registros (usuario, contraseña) VALUES (?, ?)', [usuario, contraseña], (err, result) => {
        if (err) {
            return res.status(500).send('Error en la creación de registro');
        }
        res.json({ message: 'Registro creado exitosamente', id: result.insertId });
    });
});

module.exports = router;
