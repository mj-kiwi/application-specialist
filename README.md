## What's this project?
It's the answer to the code test for Application Specialist

## Question
INPUT: APPLICATION SPECIALIST \
OUTPUT: tiacpniaipa

figure out the relationship between the INPUT and OUTPUT \
implement a function to put the INPUT as parameter and get the output as the same as the OUTPUT

## Answer

My implement of the code is on [Answer](src/Answer.php)

## Test Cases

Please check the code on [AnswerTest](tests/AnswerTest.php)

## How to run it

1. install the latest php and composer
2. download or clone the project to the local
3. go to the root folder of the project
4. run `composer install`
5. run `composer test`

you should see something as follow

```bash
> ./vendor/bin/phpunit
PHPUnit 7.5.8 by Sebastian Bergmann and contributors.


MjLiang\ApplicationSpecialist\Tests\AnswerTest
  ✓ string process [0.003s]
  ✓ string process [0.000s]
  ✓ string process [0.000s]
  ✓ string process [0.000s]
  ✓ wrong input type [0.002s]
  ✓ wrong input type [0.000s]
  ✓ wrong input type [0.000s]
  ✓ wrong input type [0.000s]
  ✓ wrong input type [0.000s]


Time: 29 ms, Memory: 4.00 MB

OK (9 tests, 9 assertions)

```

