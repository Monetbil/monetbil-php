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
<?php else: ?>
    <a class="btnmnb" href="<?php echo $payment_url; ?>" id="monetbil-payment-widget">Pay By Mobile Money</a>
<?php endif; ?>

<!-- To open widget, add JS files -->
<?php echo Monetbil::js(); ?>

<!-- To auto open widget, add JS files -->
<?php
//echo Monetbil::js(true); ?>