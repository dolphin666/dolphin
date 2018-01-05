/**
 * Created by web-01 on 2018/1/5.
 */

// console.log(__dirname);
// console.log(__filename);
/*let data={id:3,count:36};
console.log(`COUNT IS`,data.count);
console.info(`COUNT IS:${data.count}`);
console.warn(`COUNT IS:${data.count}`);
console.error(`COUNT IS:${data.count}`);
console.trace(`Some Msg`);*/
let data = {id:3, count:0, list:[]}
//console.dir(data);
//console.assert(data.count>0,`account is zero...`);
console.assert(data.list.length==0,`no data in list..`);
console.time('total time:');
for(let i=0;i<1000;i++){
	//console.log(i);
}
console.timeEnd('total time:')
