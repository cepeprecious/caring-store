const app = require('express')();
const http = require('http').createServer(app);
const io = require('socket.io')(http);


app.get('/', (req, res) => {
  res.send('Connected to server!!');
});

io.on('connection', (socket) => {
  console.log('a user connected');
});


http.listen(3000, () => {
    console.log('Server Online on port 3000..');
});