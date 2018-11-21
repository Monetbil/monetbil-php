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

// To use responsive widget, set version to v2.1
Monetbil::setWidgetVersion('v2.1');

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
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment();

```

#### Or example 2

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 500,
    'phone' => '',
    'locale' => 'en', // Display language fr or en
    'country' => '',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => md5(uniqid()),
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@email.com',
    'logo' => 'https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png'
);

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment($monetbil_args);

```

### You can get the payment url.

*Example 3:*

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// This example show payment url
echo Monetbil::url();

```

*Or example 4:*

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 500,
    'phone' => '',
    'locale' => 'en', // Display language fr or en
    'country' => '',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => md5(uniqid()),
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@email.com',
    'logo' => 'https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png'
);
);

// This example show payment url
echo Monetbil::url($monetbil_args);

```

*Example 3 and 4 response::*

```html
https://www.monetbil.com/pay/v2.1/UXaJoEvDiVBrQX9p9FGoFanlmp6t3H

```

### You can integrate the payment widget on your own page.

*Example 5:*

```php
<?php

require_once '/path/to/monetbil-php/monetbil.php';

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// This example show payment button
$payment_url = Monetbil::url();
?>
<style type="text/css">
    .btnmnb {
        background: #3498db;
        background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
        background-image: -moz-linear-gradient(top, #3498db, #2980b9);
        background-image: -ms-linear-gradient(top, #3498db, #2980b9);
        background-image: -o-linear-gradient(top, #3498db, #2980b9);
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        font-family: Arial;
        color: #ffffff;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        cursor: pointer;
    }

    .btnmnb:hover {
        background: #3cb0fd;
        background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
        background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
        text-decoration: none;
    }
</style>

<?php if (Monetbil::MONETBIL_WIDGET_VERSION_V2 == Monetbil::getWidgetVersion()): ?>
    <form action="<?php echo $payment_url; ?>" method="post" data-monetbil="form">
        <button type="submit" class="btnmnb" id="monetbil-payment-widget">Pay By Mobile Money</button>
    </form>
<?php else : ?>
    <a class="btnmnb" href="<?php echo $payment_url; ?>" id="monetbil-payment-widget">Pay By Mobile Money</a>
<?php endif; ?>

<!-- To open widget, add JS files -->
<?php echo Monetbil::js(); ?>

<!-- To auto open widget, add JS files -->
<?php echo Monetbil::js(true); ?>

```

If you have any questions or need help, do not hesitate to contact us at [support@monetbil.com](https://www.monetbil.com/contact/support/?referral=github)

## License

Please refer to this repo's [LICENSE](LICENSE).
