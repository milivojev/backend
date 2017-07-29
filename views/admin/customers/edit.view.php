<?php get_admin_header() ?>


    <h1>Edit customer</h1>
    <form action="/admin/customers/update" method="POST">
        <input type="hidden" name="id" value="<?= $customer->id ?>">


        <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="firstName" id="price" value="<?= $customer->first_name ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" value="<?= $customer->last_name ?>">
        </div>
        <div class="form-group">
            <label for="nickName">Nick Name</label>
            <input type="text" class="form-control" name="nickName" id="nickName" value="<?= $customer->nick_name ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="<?= $customer->phone ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="Email" id="Email" value="<?= $customer->email ?>">
        </div>
        <div class="form-group">
            <label for="adress">Adress</label>
            <input type="text" class="form-control" name="adress" id="adress" value="<?= $customer->adress ?>">
        </div>


        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>