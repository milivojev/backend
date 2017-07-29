<?php get_admin_header() ?>

    <h1>Create new customer</h1>
    <form action="/admin/customers" method="POST">


        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="price">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName">
        </div>
        <div class="form-group">
            <label for="nickName">Nick Name</label>
            <input type="text" class="form-control" name="nickName" id="nickName" >
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="adress">Adress</label>
            <input type="text" class="form-control" name="adress" id="adress">
        </div>
        <div class="form-group">
            <label for="user">User </label>
            <select name="user" id="user" class="form-control">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>"> <?= $user->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>