/**
 * Created by web-01 on 2018/1/5.
 */
const Console=require('console').Console;
const fs=require('fs');
let out=fs.createWriteStream('out.log');
let err=fs.createWriteStream('err.log');
let logger=new console.Console(out,err);
logger.log('logger log123...');
logger.error('logger error 456');
