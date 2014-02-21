<!DOCTYPE html>
<html>
    <head>
        <title>{{ helper.title().append('Phalcon Skeleton') }}{{ helper.title().get() }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{ helper.meta().get('description') }}
        {{ helper.meta().get('keywords') }}
    </head>
    <body>
        {{ content() }}
    </body>
</html>