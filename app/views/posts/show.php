<?php require APPROOT . '/views/inc/header.php'; ?>

    <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light">Back <i class="fa fa-backward"></i></a>
    <br>
    <h1><?php echo $data['post']->title; ?></h1>
    <div class="bg-secondary text-white p-2 mb-3">
     Written by 
     <?php if($data['user']): ?>
     <a href="<?php echo URLROOT; ?>/users/info/<?php echo $data['user']->id; ?>"><?php echo $data['post']->user_name; ?></a>
     <?php else: ?>
     <?php echo $data['post']->user_name; ?>
     <?php endif; ?>
     on <time datetime="<?php echo $data['post']->created_at; ?>"><?php echo $data['post']->created_at; ?></time>
    </div>
    <p><?php echo $data['post']->body; ?></p>

    <?php if($data['post']->user_id == $_SESSION['user_id']): ?>
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">
        Edit
    </a>
    <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger pull-right">
    </form>
    <?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>