<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="title">
    <header class="wrapper">
        <h2><?php echo $data['title']; ?></h2>
        <p class="description"><?php echo $data['description']; ?></p>
    </header>
</section>
<section class="contact-form form">
    <form action="<?php echo URLROOT; ?>/contact/submit" method="post">
        <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-input" value = "" placeholder="Jan">
            <span class="err-info"></span>
        </div>
        <div class="form-group">
            <label for="email">E-mail: <sup>*</sup></label>
            <input type="email" name="email" class="form-input" value = "" placeholder="example@example.com">
            <span class="err-info"></span>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number: <sup>*</sup></label>
            <input type="number" name="phone_number" class="form-input" value = "" placeholder="eg. 600700800">
            <span class="err-info"></span>
        </div>
        <div class="form-group">
            <label for="message_contetn">Message content: <sup>*</sup></label>
            <textarea type="password" name="message_contetn" cols="30" rows="10" class="form-input" value = "" placeholder="Your message"></textarea>
            <span class="err-info"></span>
        </div>
        <div class="submit-form">
            <input type="submit" value="Contact" class="btn btn-primary btn-contact">
        </div>
    </form>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
