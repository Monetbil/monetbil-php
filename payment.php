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

        // Get Service
        $service = Monetbil::getService();

        $service_name = '';
        $company_name = '';
        $logo = 'https://pbs.twimg.com/profile_images/594520561004507136/AcpQRaSA.png';
        if (array_key_exists('service_key', $service)
                and array_key_exists('service_secret', $service)
                and array_key_exists('service_name', $service)
                and array_key_exists('Merchants', $service)
        ) {
            $logo = $service['logo'];
            $service_name = $service['service_name'];
            $company_name = $service['Merchants']['company_name'];
        }

        // Get arguments
        $monetbil_args = Monetbil::getQueryParams();
        ?>
        <div class="wrapper">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <span class="img-wrapper"><img src="<?php echo $logo; ?>" alt="" style="width:64px"></span>
                    <h3 class="panel-title"><?php echo $company_name; ?></h3>
                    <small><?php echo $service_name; ?></small>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="h2"><?php echo Monetbil::formatInt($monetbil_args['amount']); ?></div>
                            <span>FCFA</span>
                            <?php if (Monetbil::MONETBIL_WIDGET_VERSION_V2 == Monetbil::getWidgetVersion()): ?>
                                <?php echo Monetbil::form($monetbil_args, '-auto'); ?>
                            <?php else: ?>
                                <?php echo Monetbil::link($monetbil_args, '-auto'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>