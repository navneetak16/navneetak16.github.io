const express = require('express');
const md5 = require('md5');
const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.json()); // For parsing application/json

app.post('/your-endpoint', (req, res) => {
    const { game, user_key, serial } = req.body;

    if (!game || !user_key || !serial) {
        return res.status(400).json({ status: false, message: "Missing parameters" });
    }

    // Construct the token
    const secret = 'Vm8Lk7Uj2JmsjCPVPVjrLa7zgfx3uz9y';
    const token = md5(`${game}-${user_key}-${serial}-${secret}`);

    const responseJson = {
        status: true,
        data: {
            modname: "LIVIS",
            mod_status: "",
            credit: "JAY SHREE RAM",
            token: token,
            exdate: "2024-06-24 18:44:19",
            EXP: "2034-06-24 18:44:19",
            ESP: "on",
            ITEMS: "on",
            AIM: "on",
            BULLETTRACK: "on",
            FLOATING: "on",
            MEMORY: "on",
            SETTING: "on",
            ANTICRACK: "on",
            rng: 1919213266
        }
    };

    res.json(responseJson);
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
