<p>
    <a href="/admin/admin-user" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> {{ translate('Back') }}</a>
    {% if model is defined %}
        <a href="/admin/admin-user/delete/{{ model.getId() }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> {{ translate('Delete') }}</a>
    {% endif %}
</p>

<form method="post" action="">
    {{ form.renderDecorated('login') }}
    {{ form.renderDecorated('email') }}
    {{ form.renderDecorated('password') }}
    {{ form.renderDecorated('active') }}
    {{ form.renderDecorated('submit') }}
</form>