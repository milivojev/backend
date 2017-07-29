<?php get_admin_header() ?>

    <h1>Create New Bookmark</h1>
    <form action="/admin/bookmarks" method="POST">


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" >
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" id="link" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" >
        </div>
        <div class="form-group">
            <label for="category">Category </label>
            <select name="category" id="category" class="form-control">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>"><?= $category->title ?></option>
                <?php endforeach; ?>
            </select>
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
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>