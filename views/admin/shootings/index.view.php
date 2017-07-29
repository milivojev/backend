<?php get_admin_header() ?>

<div class="text-right">
    <a href="shootings/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Shooting</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>User email</th>
        <th>Customer nick</th>
        <th>Customer email</th>
        <th>Description</th>
        <th>Price</th>
        <th>Expences</th>
        <th>Date created</th>
        <th>Event date</th>
        <th>Update | Delete</th>
    </tr>

    <?php foreach ($shootings as $shooting):  ?>
        <tr>
            <td><?= $shooting->id ?></td>
            <td><?= $shooting->category?></td>
            <td><?= $shooting->user_email ?></td>
            <td><?= $shooting->customer_nick?> </td>
            <td><?= $shooting->customer_email?></td>
            <td><?= $shooting->description?></td>
            <td><?= $shooting->price?></td>
            <td><?= $shooting->expences?></td>
            <td><?= $shooting->date_created?></td>
            <td><?= $shooting->event_date?></td>
            <td style="text-align: center"><a href="shootings/edit?id=<?= $shooting->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="shootings/delete?id=<?= $shooting->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_admin_footer() ?>
