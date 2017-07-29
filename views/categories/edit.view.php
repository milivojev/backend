<?php get_header() ?>

    <h1>Edit category</h1>
    <form action="/categories/update" method="POST">
        <input type="hidden" name="id" value="<?= $category->id ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $category->title ?>">
        </div>


        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footer() ?>