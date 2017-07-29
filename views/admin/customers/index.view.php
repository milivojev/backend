<?php get_admin_header() ?>

<div class="text-right">
    <a href="customers/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Customer</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
    <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Customer Nickname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Adress </th>
        <th>User</th>
        <th>Update | Delete</th>

    </tr>
    </tr>


    <?php foreach ($customers as $customer): ?>

        <tr>
            <td><?= $customer->id ?></td>
            <td><?= $customer->first_name ?></td>
            <td><?= $customer->last_name ?></td>
            <td><?= $customer->nick_name ?></td>
            <td><?= $customer->phone ?></td>
            <td><?= $customer->email ?></td>
            <td><?= $customer->adress ?></td>
            <td><?= $customer->user ?></td>



            <td style="text-align: center"><a href="/admin/customers/edit?id=<?= $customer->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/customers/delete?id=<?= $customer->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
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
