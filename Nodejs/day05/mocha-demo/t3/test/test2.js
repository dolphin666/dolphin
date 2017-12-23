var expect=require('chai').expect;
//console.log(add(10,2));
describe('class B',function () {
    it('true',function () {
        expect(1).to.be.ok;
    })
    it('false',function () {
        expect(0).to.be.not.ok;
    })
    it('false',function () {
        expect({}).to.be.ok;
    })
})