<?php get_admin_header() ?>

    <h1>Edit user</h1>
    <form action="/admin/users/update" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $user->email ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?= $user->password ?>">
        </div>
        <div class="form-group">
            <label for="role">Roles</label>
            <select name="role" id="user" class="form-control">

                <?php foreach ($roles as $role): ?>
                    <option value="<?= $role->id ?>" <?= ($role->id == $user->role_id) ? "selected" : "" ?>><?= $role->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $user->name ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Select Logo(300x100px)</label>
            <input id="input-1" type="file" class="file" name="logo">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook link:</label>
            <input type="text" id="facebook" name="facebook" value="<?= $user->facebook ?>">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram link:</label>
            <input type="text" id="instagram" name="instagram" value="<?= $user->instagram ?>">
        </div>
        <div class="form-group">
            <label for="gmail">Gmail link:</label>
            <input type="text" id="gmail" name="gmail" value="<?= $user->gmail ?>">
        </div>
        <div class="form-group">
            <label for="youtube">Youtube link:</label>
            <input type="text" id="youtube" name="youtube" value="<?= $user->youtube ?>">
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>