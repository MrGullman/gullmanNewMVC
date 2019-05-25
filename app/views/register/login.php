<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <div class="col-md-6 offset-md-3 bg-light p-4 mt-3">
        <form action="<?=PROOT?>register/login" class="form" method="POST">
        <h3 class="text-center">Log In</h3>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" value="on">
                <label for="remember_me">Remember Me</label>
            </div>
            <div class="form-groupe">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <div class="text-right">
                <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
            </div>
        </form>
    </div>

<?php $this->end(); ?>