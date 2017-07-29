<?php get_admin_header() ?>

    <h1>Create new bookmark category</h1>
    <form action="/admin/bookmark_categories" method="POST">
        <div class="form-group">
            <label for="title">Category</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="user">User </label>
            <select name="user" id="user" class="form-control">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>"><?= $user->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Add new category</button>
        </div>

    </form>

<?php get_admin_footer() ?>