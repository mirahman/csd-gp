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