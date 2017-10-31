<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Monetbil Payment</title>
        <meta name="description" content="A Payment Gateway for Mobile Money Payments - Monetbil">
        <meta name="author" content="Monetbil">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css?t=<?php echo time(); ?>">

        <!--[if lt IE 9]>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        require_once 'monetbil.php';

        $params = Monetbil::getQueryParams();
        $service_secret = Monetbil::getServiceSecret();

        if (!Monetbil::checkSign($service_secret, $params)) {
            exit('Invalid sign! Please, change service secret in config.php file.');
        }

        $transaction_id = Monetbil::getQuery('transaction_id');
        $status = Monetbil::getQuery('status');
        $phone = Monetbil::getQuery('phone');
        $user = Monetbil::getQuery('user');
        $item_ref = Monetbil::getQuery('item_ref');
        $payment_ref = Monetbil::getQuery('payment_ref');
        $first_name = Monetbil::getQuery('first_name');
        $last_name = Monetbil::getQuery('last_name');
        $email = Monetbil::getQuery('email');

        list($payment_status) = Monetbil::checkPayment($transaction_id);
        ?>
        <div class="wrapper">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                    <img style="width: 160px" src="assets/img/monetbil-white.png?t=<?php echo time(); ?>" alt="Monetbil">
                </div>
                <div class="panel-body">
                    <?php if (Monetbil::STATUS_SUCCESS == $payment_status): ?>
                        <div class="checkmark">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                            <path class="path" fill="none" stroke="#086fd1" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4c-2.3-2.7-6.2-2.7-8.6-0.1 c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"/>
                            <circle class="path" fill="none" stroke="#086fd1" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>
                            <polyline class="path" fill="none" stroke="#086fd1" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8 74.1,108.4 48.2,86.4 "/>
                            <circle class="spin" fill="none" stroke="#086fd1" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>
                            </svg>
                            <p>Successful payment!</p>
                        </div>
                    <?php elseif (Monetbil::STATUS_CANCELLED == $payment_status): ?>
                        <p>Transaction cancelled!</p>
                        <a href="http://www.example.com/" class="btn btn-block btn-primary btn-sm m-t-20">Home page</a>
                    <?php else: ?>
                        <p>Payment failed!</p>
                        <a href="http://www.example.com/" class="btn btn-block btn-primary btn-sm m-t-20">Home page</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>