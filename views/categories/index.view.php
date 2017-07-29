<?php get_header() ?>
<div class="text-right">
    <a href="/categories/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th>Title</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category->title ?></td>
            <td style="text-align: center"><a href="/categories/edit?id=<?= $category->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/categories/delete?id=<?= $category->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_footer() ?>
