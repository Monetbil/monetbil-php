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
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref('d4be3535f9cb5a7aff1f84fa94e6f040');
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment();
