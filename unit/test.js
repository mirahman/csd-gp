const assert = require('assert');
const operation = require('./calc');

it('should add 2 and 2 to 4', function () {
    assert.equal(operation.add(2, 2), 4);
});

it('should add one positive and one negative no', function () {
    assert.equal(operation.add(2, -1), 1);
});

it('should add two negative no', function () {
    assert.equal(operation.add(-2, -2), -4);
});

it('should divide two integers', function () {
    assert.equal(operation.divide(4, 2), 2);
});

it('should multiply two integers', function () {
    assert.equal(operation.multiply(4, 2), 8);
});

it('should multiply two neg integers', function () {
    assert.equal(operation.multiply(-4, -2), 8);
});

it('should subtract two positive integers', function () {
    assert.equal(operation.subtract(4, 2), 2);
});

it('should subtract two positive integers', function () {
    assert.equal(operation.exp(2, 3), 8);
});