# PHP Skill Test

This project demonstrates PHP magic methods and OOP principles with a `Skill` class that handles dynamic method calls and property access.

## Features

- **Dynamic Methods:**
  - Calls to methods starting with `has_` return `'exist'`.
  - Other methods return `'not exist'`.
- **Dynamic Properties:**
  - Accessing a property ending with `_CT` returns the md5 hash of the property name.
  - Other properties return their value.
- Implements methods: `__call`, `__get`, `__set`, `__toString`, `__invoke`.

## Project Structure

- `src/Skill.php`
- `tests/SkillTest.php`
- `vendor/` – # Composer dependencies
- `.phpunit.result.cache`
- `composer.json`,
- `composer.lock`,
- `result.xml`,
- `test_report.txt`

## How to Run Tests

1. Install dependencies with Composer:

   ```bash
   composer install
   ```

2. Run PHPUnit:
   ```bash
   phpunit --bootstrap vendor/autoload.php tests/SkillTest.php
   ```

**Warm Regards!**
