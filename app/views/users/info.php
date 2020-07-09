<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="user-container">
        <?php require APPROOT . '/views/inc/user/navigation.php'; ?>
        <section class="user-content">
            <header class="user-name">
                <div><?php echo $data['user_name']; ?></div>
            </header>
            <div class="user-data">
                <div class="avatar">
                    <img width="200" height="200" src="https://via.placeholder.com/300" alt="avatar">
                </div>
                <div class="data">
                    <div class="item email"><span class="title">E-mail: </span><span class="value"><?php echo $data['user_email']; ?></span><a href="<?php echo URLROOT; ?>/users/edit/<?php echo $data['user_id']; ?>" class="btn btn-edit">edit</a></div>
                    <div class="item phone"><span class="title">Phone: </span><span class="value"><?php echo $data['user_email']; ?></span><a href="<?php echo URLROOT; ?>/users/edit/<?php echo $data['user_id']; ?>" class="btn btn-edit">edit</a></div>
                </div>
            </div>
        </section>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
