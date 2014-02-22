<p><a href="/admin/admin-user/add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add</a></p>

<table class="table table-bordered table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Login</th>
            <th>Email</th>
            <th>Active</th>
        </tr>
    </thead>
    <tbody>
        {% for user in entries %}
        <tr>
            <td><a href="/admin/admin-user/edit/{{ user.getId() }}" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i></a></td>
            <td>{{ user.getLogin() }}</td>
            <td>{{ user.getEmail() }}</td>
            <td>{% if user.getActive() %}<i class="glyphicon glyphicon-ok"></i>{% endif %}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>