<?php

/*
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License or any later version.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once '../monetbil.php';

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 15,
    'phone' => '654088375',
    'locale' => 'en', // Display language fr or en
    'country' => 'CM',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => 'd4be3535f9cb5a7aff1f84fa94e6f040',
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@email.com',
    'logo' => 'https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png'
);

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment($monetbil_args);

