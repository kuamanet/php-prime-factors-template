![logo](src/public/k-logo.png)

## Php Prime Factors
Using tdd, create a class that calculates the prime factors of a number.
Ex.
```php
PrimeFactors::of(1); // this should return an empty array
```

## Final result
Running `./vendor/phpunit` from the root should execute a set of tests that
assert the code is fully working.

Running
```bash
cd src/public
php -S localhost:8000
```

Should let the user navigate to [localhost:8000](http://localhost:8000/)
and see a UI that asks for a number and shows its prime factors.

## Not to do
* Use jQuery for the UI
