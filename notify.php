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

require_once 'monetbil.php';

$params = Monetbil::getPost();
$service_secret = Monetbil::getServiceSecret();

if (!Monetbil::checkSign($service_secret, $params)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Error: Invalid signature');
}

$service = Monetbil::getPost('service');
$transaction_id = Monetbil::getPost('transaction_id');
$transaction_uuid = Monetbil::getPost('transaction_uuid');
$phone = Monetbil::getPost('msisdn');
$amount = Monetbil::getPost('amount');
$fee = Monetbil::getPost('fee');
$status = Monetbil::getPost('status');
$message = Monetbil::getPost('message');
$country_name = Monetbil::getPost('country_name');
$country_iso = Monetbil::getPost('country_iso');
$country_code = Monetbil::getPost('country_code');
$mccmnc = Monetbil::getPost('mccmnc');
$operator = Monetbil::getPost('mobile_operator_name');
$currency = Monetbil::getPost('currency');
$user = Monetbil::getPost('user');
$item_ref = Monetbil::getPost('item_ref');
$payment_ref = Monetbil::getPost('payment_ref');
$first_name = Monetbil::getPost('first_name');
$last_name = Monetbil::getPost('last_name');
$email = Monetbil::getPost('email');

list($payment_status) = Monetbil::checkPayment($transaction_id);

if (Monetbil::STATUS_SUCCESS == $payment_status) {
    // Successful payment!
    // Mark the order as paid in your system
} elseif (Monetbil::STATUS_CANCELLED == $payment_status) {
    // Transaction cancelled
} else {
    // Payment failed!
}

// Received
exit('received');
