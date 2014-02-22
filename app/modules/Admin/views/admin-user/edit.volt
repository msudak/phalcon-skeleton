<p><a href="/admin/admin-user" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> {{ translate('Back') }}</a></p>

<form method="post" action="">
    {{ form.renderDecorated('login') }}
    {{ form.renderDecorated('email') }}
    {{ form.renderDecorated('password') }}
    {{ form.renderDecorated('active') }}
    {{ form.renderDecorated('submit') }}
</form>