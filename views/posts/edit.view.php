<?php get_header() ?>

    <h1>Edit post</h1>
    <form action="/posts/update" method="POST">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $post->title ?>">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <select name="user_id" id="author" class="form-control">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>" <?= ($user->id == $post->user_id) ? "selected" : "" ?>><?= $user->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?= $post->content ?></textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-control">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>" <?= ($category->id == $post->category_id) ? "selected" : "" ?>><?= $category->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footer() ?>