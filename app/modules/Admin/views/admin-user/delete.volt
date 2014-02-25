<p><a href="/admin/admin-user/edit/{{ model.getId() }}" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> {{ translate('Back') }}</a></p>

<div class="well">
    <p>{{ translate('Are you sure want delete <b>%login%</b>?', ['login': model.getLogin()]) }}</b></p>
    <form action="" method="post">
        <input type="submit" class="btn btn-danger" value="{{ translate('Confirm delete') }}">
    </form>
</div>