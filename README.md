# Symfony DDD Kkeleton
DDD Symfony projects boilerplate 

## Installation
1. Clone the repository
2. Run `composer install`

## Usage
1. Run `symfony server:start`
2. Open `http://localhost:8000` in your browser
3. You should see the Symfony welcome page
4. You can start developing your application

## Development
- ./src/Domain: Contains the domain logic. Namespace: `Domain\`
- ./src/Application: Contains the application logic. Namespace: `App\`
- ./src/Infrastructure: Contains the infrastructure logic. Namespace: `Infrastructure\`

## Testing
- Run `composer test` to run the tests
- Run `composer test-coverage` to run the tests with coverage

### Tests structure
- ./tests/Unit: Tests units using `PhpUnit\TestCase` abstract class.
- ./tests/Application: Tests the application layer, using `WebTestCase` abstract class.
- ./tests/Infrastructure: Integration tests, using `KernelTestCase` abstract class.

## Features
- Symfony 7.2.3
- PHP 8.4
- PHPUnit 11.5

### Incoming features
- API
- Doctrine

### Included Symfony bundles
- Symfony Flex
- Symfony Test Pack

