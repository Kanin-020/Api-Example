const passport = require('passport');
const OAuth2Strategy = require('passport-oauth2').Strategy;

const PORT = 3000;

passport.use(
    new OAuth2Strategy(
        {
            // authorizationURL: '',
            // tokenURL: 'https://authorization-server.com/authorize?',
            // clientID: 'tu_client_id',
            // clientSecret: 'tu_client_secret',
            // callbackURL: 'http://localhost:' + PORT + '/auth/callback',

            authorizationURL: 'https://authorization-server.com/authorize',
            tokenURL: 'https://authorization-server.com/authorize?',
            clientID: 'KtNty4wIXsgJ9aj-wQOl2JHz',
            clientSecret: 'tu_client_secret',
            callbackURL: 'https://www.oauth.com/playground/authorization-code.html',
            scope: 'photo+offline_access',
        },
        (accessToken, refreshToken, profile, done) => {
            // Lógica para verificar y guardar el usuario en tu base de datos
            return done(null, profile);
        }
    )
);

module.exports = passport;
