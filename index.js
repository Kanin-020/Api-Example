const express = require('express');
const cors = require('cors');

const modelAuth = require('./src/routes/auth');
const modelUser = require('./src/routes/user');

const app = express();

const PORT = 3000;

app.use(cors({ origin: '127.0.0.1' }));
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

app.use("/", modelAuth);
app.use("/", modelUser);

app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
