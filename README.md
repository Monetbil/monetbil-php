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
Monetbil::setEmail('jean.kamdem@email.com');

// Start a payment
// You will be redirected to the payment page
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
    'email' => 'jean.kamdem@email.com'
);

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment($monetbil_args);

```

You can integrate the payment on your own page.

##### For version 2

*Example 3:*

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
Monetbil::setEmail('jean.kamdem@email.com');

// This example show payment form
echo Monetbil::form();

```

*Example 4:*

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
    'email' => 'jean.kamdem@email.com'
);

// This example show payment form
echo Monetbil::form($monetbil_args);

```

*Example Response:*

```html
<form action="https://www.monetbil.com/widget/v2/j9XjZzkFqjeL5fk34e1RNq98thRRwvYf" method="post" data-monetbil="form">
	<input type="hidden" name="amount" value="500">
	<input type="hidden" name="phone" value="">
	<input type="hidden" name="country" value="">
	<input type="hidden" name="currency" value="XAF">
	<input type="hidden" name="item_ref" value="2536">
	<input type="hidden" name="payment_ref" value="d4be3535f9cb5a7aff1f84fa94e6f040">
	<input type="hidden" name="user" value="12">
	<input type="hidden" name="first_name" value="KAMDEM">
	<input type="hidden" name="last_name" value="Jean">
	<input type="hidden" name="email" value="jean.kamdem@email.com">
	<input type="hidden" name="return_url" value="http://boorgeon.com/monetbil-php/monetbil/return.php">
	<input type="hidden" name="notify_url" value="http://boorgeon.com/monetbil-php/monetbil/notify.php">
	<button class="btn btn-block btn-primary m-t-20" type="submit" id="monetbil-payment-widget">Pay by Mobile Money</button>
</form>
<script type="text/javascript" src="assets/js/monetbil.min.js?t=1499851134"></script>

```

