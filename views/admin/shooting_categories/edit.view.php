<?php get_admin_header() ?>

    <h1>Edit category</h1>
    <form action="/admin/shooting_categories/update" method="POST">
        <input type="hidden" name="id" value="<?= $category->id ?>">
        <div class="form-group">
            <label for="title">Category</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $category->title ?>">
        </div>
        <div class="form-group">
            <select name="user" id="user" class="form-control">

             <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>" <?= ($user->id == $category->user_id) ? "selected" : "" ?>><?= $user->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>