<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $this->helper->translate('Login'); ?></title>

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <?php echo $this->assets->outputCss('admin-login-css'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/vendor/js/html5shiv.js"></script>
            <script src="/vendor/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form class="form-signin" role="form" action="/admin/index/login" method="post">
                <h2 class="form-signin-heading"><?php echo $this->helper->translate('Admin panel'); ?></h2>
                <?php echo $this->flash->output(); ?>
                <input type="text" name="login" class="form-control" placeholder="<?php echo $this->helper->translate('Login'); ?>" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="<?php echo $this->helper->translate('Password'); ?>" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->helper->translate('Sign in'); ?></button>
            </form>
        </div> <!-- /container -->
    </body>
</html>
