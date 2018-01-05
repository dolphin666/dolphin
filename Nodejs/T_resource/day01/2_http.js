/**
 * Created by web-01 on 2017/11/10.
 */

const http = require('http');

let server = http.createServer((req, res) => {
    res.write('Hello, Node.js!');
    res.end('test...');
});

server.listen('80');