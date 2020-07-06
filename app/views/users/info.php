<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="user-container">
        <?php require APPROOT . '/views/inc/user/navigation.php'; ?>
        <section class="user-content">
            <header class="wrapper">
                <h2><?php echo $data['user_name']; ?></h2>
            </header>
        </section>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
