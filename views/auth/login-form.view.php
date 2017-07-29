<?php get_form_header() ?>


                <form action="/login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="email">email:</label>
                        <div class="col-sm-7">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="pwd">Password:</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="  col-sm-12">
                            <button type="submit" class="btn btn-success btn-block">LOGin</button>
                        </div>
                    </div>
                    <div>
                        <p>first time here?</p>
                        <a href="register.php" class="btn btn-info btn-block">Register</a>

                    </div>
                </form>



<?php get_form_footer() ?>
