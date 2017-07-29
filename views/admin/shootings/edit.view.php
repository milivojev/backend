<?php get_admin_header() ?>

    <h1>Edit shooting</h1>
    <form action="/admin/shootings/update" method="POST">
        <input type="hidden" name="id" value="<?= $shooting->id ?>">

        <div class="form-group">
            <label for="user">User</label>
            <select name="user" id="user" class="form-control">

                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>" <?= ($user->id == $shooting->user_id) ? "selected" : "" ?>><?= $user->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">

                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>" <?= ($category->id == $shooting->shooting_category_id) ? "selected" : "" ?>><?= $category->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="customer">Customer</label>
            <select name="customer" id="customer" class="form-control">

                <?php foreach ($customers as $customer): ?>
                    <option value="<?= $customer->id ?>" <?= ($customer->id == $shooting->customer_id) ? "selected" : "" ?>><?= $customer->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
        <label for="description">Description</label>
            <textarea  class="form-control" name="description" id="description" value="<?= $shooting->description ?>"></textarea>
        </div>
        <div class="form-group">
        <label for="price">price</label>
        <input type="text" class="form-control" name="price" id="price" value="<?= $shooting->price ?>">
        </div>

        <div class="form-group">
            <label for="expences">Expences</label>
            <input type="text" class="form-control" name="expences" id="expences" value="<?= $shooting->expences ?>">
        </div>
        <div class="form-group">
            <label for="alarm">Alarm</label>
            <select name="alarm" id="alarm" class="form-control">

                <?php foreach ($alarms as $alarm): ?>
                    <option value="<?= $alarm->id ?>" <?= ($alarm->id == $shooting->alarm_id) ? "selected" : "" ?>><?= $alarm->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <input type="text" class="form-control" name="notes" id="notes" value="<?= $shooting->notes ?>">
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>