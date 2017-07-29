<?php get_admin_header() ?>

<div class="text-right">
    <a href="users/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New User</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Roles</th>
        <th>Name</th>
        <th>Logo</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Gmail</th>
        <th>Youtube</th>
        <th>Update | Delete</th>
    </tr>

    <?php foreach ($users as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->email?></td>
            <td><?= $user->password ?></td>
            <td><?= $user->role_id?> </td>
            <td><?= $user->name?></td>
            <td><?= $user->logo?></td>
            <td><?= $user->facebook?></td>
            <td><?= $user->instagram?></td>
            <td><?= $user->gmail?></td>
            <td><?= $user->youtube?></td>
            <td style="text-align: center"><a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_admin_footer() ?>
