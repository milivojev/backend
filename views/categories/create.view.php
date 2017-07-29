<?php get_header() ?>

    <h1>Create new category</h1>
    <form action="/categories" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footer() ?>