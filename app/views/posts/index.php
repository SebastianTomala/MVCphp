<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
    <section class="posts-title-wrapper">
        <div class="title">
            <h1>Posts</h1>
        </div>
        <div class="button">
            <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary">
                <i class="fa fa-pencil"></i>Add post
            </a>
        </div>
    </section>
    <?php foreach($data['posts'] as $post): ?>
        <div class="card card-body">
            <h4 class="card-title mb-0">
                <?php echo $post->title; ?>
            </h4>
            <div class="bg-light p-2 mb-3">
                written by <a href="users/info/<?php echo $post->user_id; ?>"><?php echo $post->user_name; ?></a> on <time datetime="<?php echo $post->created_at; ?>"><?php echo $post->created_at; ?></time>
            </div>
            <p class="card-text"><?php echo $post->body; ?></p>
            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id; ?>" class="btn btn-dark">More</a>
        </div>
    <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
