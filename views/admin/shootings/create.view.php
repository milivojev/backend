<?php get_admin_header() ?>

    <h1>Create new shooting</h1>
    <form action="/admin/shootings" method="POST">
        <div class="form-group">
            <label for="user">User </label>
            <select name="user" id="user" class="form-control">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>"><?= $user->email ?></option>
                <?php endforeach; ?>
            </select>
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
            <label for="customer">Customer</label>
            <select name="customer" id="customer" class="form-control">
                <?php foreach ($customers as $customer): ?>
                    <option value="<?= $customer->id ?>"><?= $customer->email ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea  class="form-control" id="description" cols="55" rows="1" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="expences">Expences:</label>
            <input type="text" id="expences" name="expences">
        </div>
        <div class="form-group">
            <label for="eventdate">Event date:</label>
            <input class="span2" size="16" type="date" id="eventdate" placeholder="12-02-2012 14:30" name="eventdate">
        </div>
        <div class="form-group">
            <label for="alarm">Alarm</label>
            <select name="alarm" id="alarm" class="form-control">
                <?php foreach ($alarms as $alarm): ?>
                    <option value="<?= $alarm->id ?>"><?= $alarm->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="Notes">Notes:</label>
            <textarea  class="form-control" id="notes" cols="55" rows="1" name="notes"></textarea>
        </div>


        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_admin_footer() ?>