<!DOCTYPE html>
<html>
    <head>
        <title>{{ helper.title().append('Admin panel') }}{{ helper.title().get() }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <script src="/vendor/js/jquery-1.11.0.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/vendor/js/html5shiv.js"></script>
            <script src="/vendor/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        {{ partial('admin/nav') }}
        <div class="container-fluid">
            {% if title is defined %}
                <h1>{{ title }}</h1>
            {% endif %}
            {{ flash.output() }}
            {{ content() }}
        </div>
    </body>
</html>