const { Given, When, Then, Before, And, But } = require('cucumber');
const Calculator = require('../../calculator');
let assert = require('assert');

let calculator;
Given('i have two number {int} and {int}', function (a, b) {
    // Given('i have two number {int} and {float}', function (int, float) {
    // Given('i have two number {float} and {int}', function (float, int) {
    // Given('i have two number {float} and {float}', function (float, float2) {
    // Write code here that turns the phrase above into concrete actions
    //return 'pending';
    calculator = new Calculator(a, b);
});

When('i add them', function () {
    // Write code here that turns the phrase above into concrete actions
    //return 'pending';
    calculator.add();
});

Then('i have the result as {int}', function (sum) {
    // Then('i have the result as {float}', function (float) {
    // Write code here that turns the phrase above into concrete actions
    //return 'pending';
    assert.equal(calculator.getResult(), sum);
});