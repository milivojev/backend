<?php get_admin_header() ?>

<div class="text-right">
    <a href="/admin/bookmarks/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Bookmark</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>link</th>
        <th>Description</th>
        <th>Category</th>
        <th>User</th>

        <th>Update | Delete</th>

    </tr>
    </tr>


    <?php foreach ($bookmarks as $bookmark): ?>

        <tr>
            <td><?= $bookmark->id ?></td>
            <td><?= $bookmark->title ?></td>
            <td><?= $bookmark->link ?></td>
            <td><?= $bookmark->description ?></td>
            <td><?= $bookmark->category ?></td>
            <td><?= $bookmark->user_email ?></td>



            <td style="text-align: center"><a href="/admin/bookmarks/edit?id=<?= $bookmark->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/bookmarks/delete?id=<?= $bookmark->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
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
