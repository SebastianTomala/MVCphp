<nav class="user-navigation">
    <ul class="user-action">
        <li class="item<?php echo (strpos($_SERVER['REQUEST_URI'], '/users/info/') ? ' active' : ''); ?>"><a href="<?php echo URLROOT . '/users/info/' . $_SESSION['user_id']; ?>">Info</a></li>
        <li class="item<?php echo (strpos($_SERVER['REQUEST_URI'], '/users/gallery/') ? ' active' : ''); ?>"><a href="<?php echo URLROOT . '/users/gallery/' . $_SESSION['user_id']; ?>">Gallery</a></li>
    </ul>
</nav>