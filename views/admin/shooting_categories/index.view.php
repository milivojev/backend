<?php get_admin_header() ?>
<div class="text-right">
    <a href="/admin/shooting_categories/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Category</a>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th>Category</th>
        <th>User email</th>
        <th>Action</th>
    </tr>

    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category->title ?></td>
            <td><?= $category->user_email?></td>

            <td style="text-align: center"><a href="/admin/shooting_categories/edit?id=<?= $category->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/shooting_categories/delete?id=<?= $category->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_admin_footer() ?>
