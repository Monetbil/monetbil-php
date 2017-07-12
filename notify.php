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
$transaction_id = Monetbil::getPost('transaction_id');
$service_secret = Monetbil::getServiceSecret();

if (!$transaction_id or ! Monetbil::checkSign($service_secret, $params)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Error: Invalid signature');
}

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
