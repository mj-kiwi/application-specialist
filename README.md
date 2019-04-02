## What's this project?
It's the answer to the code test for Application Specialist

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


Time: 27 ms, Memory: 4.00 MB

OK (4 tests, 4 assertions)
```

