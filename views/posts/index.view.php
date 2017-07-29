<?php get_header() ?>
<div class="text-right">
    <a href="/posts/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?= $post->title ?></td>
        <td><?= $post->author ?></td>
        <td><?= $post->category ?></td>
        <td><?= date( "d. m. Y", strtotime($post->created_at)) ?></td>
        <td style="text-align: center"><a href="/posts/edit?id=<?= $post->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/posts/delete?id=<?= $post->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
    </tr>
    <?php endforeach; ?>

</table>
<?php get_footer() ?>
