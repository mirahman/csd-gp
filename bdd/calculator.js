class Calculator {

    constructor(a, b) {
        this.a = a;
        this.b = b;
    }

    add() {
        this.result = this.a + this.b
    }

    getResult() {
        return this.result
    }
}

module.exports = Calculator;