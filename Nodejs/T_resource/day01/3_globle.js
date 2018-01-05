/**
 * Created by web-01 on 2017/11/10.
 */

//console.log(__dirname);
//console.log(__filename);

/*
console.log('log...');
console.info('info...');

console.error('error...');
console.warn('warn...');

console.trace('trace...')
*/

let data = {id:3, count: 0, list:[]};

//console.dir(data);

//console.assert(data.count > 0, 'count is zero...');
//console.assert(data.list.length > 0, 'no data in list...');

console.time('total time: ');
for(let i = 0; i < 1000; i++) {
    console.log(i);
}
console.timeEnd('total time: ');