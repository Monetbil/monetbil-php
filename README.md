# Monetbil PHP Library

This repository contains the open source PHP SDK that allows you to access the Monetbil Platform from your PHP app.

### Download the SDK

https://github.com/Monetbil/monetbil-php/archive/master.zip

## Configuration

```php
<?php

// To get your service key and secret, go to -> https://www.monetbil.com/services
Monetbil::setServiceKey('YOUR_SERVICE_KEY');
Monetbil::setServiceSecret('YOUR_SERVICE_SERCRET');

// To use responsive widget, set version to v2
Monetbil::setWidgetVersion('v2');

```