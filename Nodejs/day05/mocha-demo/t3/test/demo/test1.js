var add=require('../../../t1/add');
var sub=require('../../../t1/sub')
var expect=require('chai').expect;
//console.log(add(10,2));
describe('A add（） function Test',function () {
    it('10+2+10=22',function () {
        expect(add(10,2)).to.be.equal(22)
    });
    it('3+2+1=6',function () {
        expect(add(3,2)).to.be.equal(8)
    })
})
describe('A sub（） function Test',function () {
    it('8-5=3',function () {
        expect(sub(8,5)).to.be.equal(3)
    });
})