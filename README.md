# Monetbil PHP Library

This repository contains the open source PHP SDK that allows you to access the Monetbil Platform from your PHP app.

### Requirements

PHP 5.2 and later.

### Download the SDK

https://github.com/Monetbil/monetbil-php/archive/master.zip

## Payment integration

When the user decides to make a purchase, you will initialize Monetbil PHP SDK and whenever the payment is completed, your application will be notified using your implementation of the `notify.php` file.

### Configuration

The configuration is located in `config.php` file.

```php
<?php

// To get your service key and secret, go to -> https://www.monetbil.com/services
Monetbil::setServiceKey('YOUR_SERVICE_KEY');
Monetbil::setServiceSecret('YOUR_SERVICE_SERCRET');

// To use responsive widget, set version to v2
Monetbil::setWidgetVersion('v2');

```

### Manual Installation

To use the SDK, include the `monetbil.php` file.

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

```

### Dependencies

The SDK require the following extensions in order to work properly:

* `curl`
* `json`

### Payment Widget Usage

#### Example 1

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref('d4be3535f9cb5a7aff1f84fa94e6f040');
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@emailcom');

// Start a payment
// You must be redirected to the payment page
Monetbil::startPayment();

```

#### Example 2

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 500,
    'phone' => '',
    'country' => '',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => 'd4be3535f9cb5a7aff1f84fa94e6f040',
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@emailcom'
);

// Start a payment
// You must be redirected to the payment page
Monetbil::startPayment($monetbil_args);

```
