const express = require('express');
const app = express();
const port = 3001;

app.use(express.json());
app.get('/api/blockchain', (req, res) => {
    res.json({
        introduction: 'Blockchain is a decentralized ledger.',
        future: 'The future of blockchain looks promising.',
    });
});
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
// http://localhost:3001/api/blockchain