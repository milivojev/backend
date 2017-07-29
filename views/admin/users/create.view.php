<?php get_admin_header() ?>

    <h1>Create new user</h1>
    <form action="/admin/users" method="POST">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="row">
        <div class="form-group col-sm-3">
            <label for="role">Roles: </label>
            <select name="role" id="role" class="form-control">
                <?php foreach ($roles as $role): ?>
                    <option value="<?= $role->id ?>"><?= $role->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label class="control-label" for="logo">Select Logo(300x100px)</label>
            <input id="input-1" type="file" class="file" name="logo">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook link:</label>
            <input type="text" id="facebook" name="facebook">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram link:</label>
            <input type="text" id="instagram" name="instagram">
        </div>
        <div class="form-group">
            <label for="gmail">Gmail link:</label>
            <input type="text" id="gmail" name="gmail">
        </div>
        <div class="form-group">
            <label for="youtube">Youtube link:</label>
            <input type="text" id="youtube" name="youtube">
        </div>


        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>