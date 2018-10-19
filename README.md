# Fatturazione Elettronica

[![Build Status](https://travis-ci.org/railken/fatturazione-elettronica.svg?branch=master)](https://travis-ci.org/railken/fatturazione-elettronica)

A library that provides a fluent way to comunicate with the Italian Public Administration (Pubblica Aministrazione) for the integration with electronic invoices.

# Requirements

PHP 7.1 and later.

## Installation

You can install it via [Composer](https://getcomposer.org/) by typing the following command:

```bash
composer require railken/fatturazione-elettronica
```
## Usage

```php
use Railken\FatturazioneElettronica\Client;

$client = new Client();
```

## Testing

Configure the .env file before launching `./vendor/bin/phpunit`
