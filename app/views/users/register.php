<?php require APPROOT . '/views/inc/header.php'; ?>
    <section class="title">
        <h2>Create account</h2>
        <p class="description">Please fill out this form to register with us</p>
    </section>
    <section class="register-form form">
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" class="form-input <?php echo (!empty($data['name_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['name']; ?>">
                <span class="err-info"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="email">E-mail: <sup>*</sup></label>
                <input type="email" name="email" class="form-input <?php echo (!empty($data['email_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['email']; ?>">
                <span class="err-info"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-input <?php echo (!empty($data['password_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['password']; ?>">
                <span class="err-info"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password: <sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-input <?php echo (!empty($data['confirm_password_err']) ? 'is-invalid' : ''); ?>" value = "<?php echo $data['confirm_password']; ?>">
                <span class="err-info"><?php echo $data['confirm_password_err']; ?></span>
            </div>
            <div class="submit-form">
                <input type="submit" value="Register" class="btn btn-primary btn-register">
            </div>
        </form>
    </section>
    <section class="have-account">
        <div class="login">
            <p class="">Have an account?  <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-secondary">Log in</a></p>
        </div>
    </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
