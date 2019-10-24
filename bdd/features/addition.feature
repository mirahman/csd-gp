Feature: addition

    we are going to check if two numbers can be added

    Scenario: add two integer
        Given i have two number 1 and 4
        When i add them
        Then i have the result as 5

    Scenario: add two integer
        Given i have two number 5 and -5
        When i add them
        Then i have the result as 0

    Scenario: add two integer
        Given i have two number -5 and -5
        When i add them
        Then i have the result as -10

    Scenario Outline: add two integer
        Given i have two number <a> and <b>
        When i add them
        Then i have the result as <result>

    Examples:
        |a|b|result|
        |1|4|5|
        |5|-5|0|
        |800|110|910|
