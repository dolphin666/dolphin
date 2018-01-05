/**
 * Created by web-01 on 2017/11/10.
 */
//const Console = require('console').Console;
const fs = require('fs');

let out = fs.createWriteStream('out.log');
let err = fs.createWriteStream('err.log');

let logger = new console.Console(out,err);

logger.log('logger log new...');
logger.error('logger error new...');

console.log('asdf');