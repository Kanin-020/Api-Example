const express = require('express');
const router = express.Router();
const passport = require('../utils/authenticator');

router.use(passport.initialize());

router.get('/auth', passport.authenticate('oauth2'));

router.get('/auth/callback', passport.authenticate('oauth2', { successRedirect: '/success', failureRedirect: '/error' }));

router.get('/success', (req, res) => {
    res.json({ response: 'Autenticación exitosa' });
});

router.get('/error', (req, res) => {
    res.status(500).json({ error: 'Error en la autenticación' });
});

module.exports = router;
