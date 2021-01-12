# Doctrine ORM Project For Learning

## Prerequisites

* PHP 7.1+ (latest stable version)
* Composer Package Manager

## Project Setup

``` bash
composer require doctrine/orm:^2.6.2 symfony/yaml:2.*
```

Add to composer.json

```json
"autoload": {
  "psr-4": {
    "App\\Entity\\": "src/Entity"
  }
}
```

Then:

``` bash
composer install
```

## Project Folder Structure

```bash
root
  |--config
  |
  |--src
  |   |--Entity
  |   |--Controller
  |
  |--vendor
  |
  |--web
      |--index.php
```
