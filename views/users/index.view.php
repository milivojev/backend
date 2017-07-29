<?php get_header() ?>

<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><?= ($user->avatar) ? "<img src=\"" . $user->avatar . ">" : "" ?></td>

            <td style="text-align: center"><a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_footer() ?>
