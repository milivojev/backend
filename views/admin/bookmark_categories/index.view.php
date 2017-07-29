<?php get_admin_header() ?>

<div class="text-right">
    <a href="/admin/bookmark_categories/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Category</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
    <tr>
        <th>Category</th>
        <th>User email</th>

        <th>Update | Delete</th>
    </tr>
    </tr>

    <?php foreach ($bookmark_categories as $category): ?>
        <tr>
            <td><?= $category->title ?></td>
            <td><?= $category->user_email ?></td>

            <td style="text-align: center"><a href="/admin/bookmark_categories/edit?id=<?= $category->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/bookmark_categories/delete?id=<?= $category->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>

    <?php endforeach; ?>

</table>

<script>
    $(document).ready(function(){
        $('.user-select').on('change', function(){
           var userId = $(this).val()

            $.ajax({
                method : 'POST',
                url: '/api/customers/change-user',
                data: {
                   userId : userId,
                    id: $(this).data('id')

                },
                success: function (response) {
                    console.log(response)
                }
            });
        });
    })
</script>
<?php get_admin_footer() ?>
