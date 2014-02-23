<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>{{ helper.title().append('Phalcon Skeleton') }}{{ helper.title().get() }}</title>

        {{ helper.meta().get('description') }}
        {{ helper.meta().get('keywords') }}

        <script src="/vendor/js/jquery-1.11.0.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/vendor/js/html5shiv.js"></script>
            <script src="/vendor/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        {{ content() }}
        {{ partial('main/footer') }}
    </body>
</html>