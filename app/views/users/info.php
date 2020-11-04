<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php if($data['user_id']): ?>
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
                        <div class="item email">
                            <span class="title">E-mail: </span>
                            <span class="value"><?php echo $data['user_email']; ?></span>  
                            <?php if($data['user_id'] == $_SESSION['user_id']): ?>
                                <a href="<?php echo URLROOT; ?>/users/edit/<?php echo $data['user_id']; ?>" class="btn btn-edit">
                                edit
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="item phone">
                            <span class="title">Phone: </span>
                            <span class="value"><?php echo $data['user_email']; ?></span>
                            <?php if($data['user_id'] == $_SESSION['user_id']): ?>
                                <a href="<?php echo URLROOT; ?>/users/edit/<?php echo $data['user_id']; ?>" class="btn btn-edit">
                                edit
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="item password">
                            <span class="title">Password: </span>
                            <span class="value"><?php echo $data['user_email']; ?></span>
                            <?php if($data['user_id'] == $_SESSION['user_id']): ?>
                                <a href="<?php echo URLROOT; ?>/users/edit/<?php echo $data['user_id']; ?>" class="btn btn-edit">
                                edit
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php else: ?>
        <div class="no-user-container">
            <div class="no-user-info">
            No such user exists or his account has been deleted 
            </div>
            <button class="btn btn-primary go-back-btn"><a href="<?php echo URLROOT; ?>">Back</a></button>
        </div>
    <?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
