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
        <?php foreach ($entries as $user) { ?>
        <tr>
            <td><a href="/admin/admin-user/edit/<?php echo $user->getId(); ?>" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i></a></td>
            <td><?php echo $user->getLogin(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><?php if ($user->getActive()) { ?><i class="glyphicon glyphicon-ok"></i><?php } ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>