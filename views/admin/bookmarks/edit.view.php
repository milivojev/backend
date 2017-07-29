<?php get_admin_header() ?>


    <h1>Edit bookmark</h1>
    <form action="/admin/bookmarks/update" method="POST">
        <input type="hidden" name="id" value="<?= $bookmark->id ?>">
        <form action="/admin/bookmarks" method="POST">


            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $bookmark->title ?>">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" name="link" id="link" value="<?= $bookmark->link?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="<?= $bookmark->description?>" >
            </div>
            <div class="form-group">
                <label for="user">User </label>
                <select name="user" id="user" class="form-control">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= $user->id ?>" <?= ($user->id ==$bookmark->user_id) ? "selected" : ""?> ><?= $user->email ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category </label>

                <select name="category" id="category" class="form-control">
                    <?php foreach ($categories as $category):  ?>
                        <option value="<?= $category->id ?>" <?= ($category->id == $bookmark->user_id) ? "selected" : "" ?> ><?= $category->title ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-right">
                <button class="btn btn-primary">Submit</button>
            </div>

    </form>

<?php get_admin_footer() ?>