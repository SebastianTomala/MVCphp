<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('register_success'); ?>
    <section class="title">
        <h2>Log in</h2>
        <p class="description">Please fill out this form to log in</p>
    </section>
    <section class="login-form form">
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
            <div class="form-group">
                <label for="email">E-mail: <sup>*</sup></label>
                <input type="email" name="email" class="form-input <?php echo (!empty($data['email_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['email']; ?>" placeholder="example@example.com">
                <span class="err-info"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-input <?php echo (!empty($data['password_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['password']; ?>" placeholder="Password">
                <span class="err-info"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="submit-form">
                <input type="submit" value="Login" class="btn btn-primary btn-login">
            </div>
        </form>
    </section>
    <section class="have-account">
        <div class="login-register">
            <p class="">Don't have an account?  <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-secondary">Register</a></p>
        </div>
    </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
