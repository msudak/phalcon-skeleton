<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->helper->title()->append('Admin panel'); ?><?php echo $this->helper->title()->get(); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="/vendor/js/jquery-1.11.0.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/vendor/js/html5shiv.js"></script>
            <script src="/vendor/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
    </body>
</html>