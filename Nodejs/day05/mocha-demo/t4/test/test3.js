var expect=require('chai').expect;
//console.log(add(10,2));
describe('Class C',()=>{
   it('type of string',()=>{
       expect('test...').to.be.a('string')
   })
    it('type of string',()=>{
        expect({}).to.be.an('object')
    })
})
describe('Class D',()=>{
    it('include',()=>{
        expect([1,2,3]).to.include(1);
    })
    it('contain',()=>{
        expect('Hello World').to.include('Hell');
    })
    it('include key',()=>{
        expect({k1:'v1',k2:'v2'}).to.include.keys('k1');
    })
})
describe('Class E',()=>{
    it('empty',()=>{
        expect('').to.be.empty;
    })
    it('empty',()=>{
        expect([]).to.be.empty;
    })
    it('empty',()=>{
        expect({}).to.be.empty;
    })
})
describe('Class F',()=>{
    it('match',()=>{
        expect('Hello,world').to.match(/^hello/i)
    })
})