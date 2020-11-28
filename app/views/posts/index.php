<?php require APPROOT . "/views/include/header.php" ?>
  <?php echo flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>

    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-right">
        <i class="fas fa-pencil-alt"></i>
        Add Post
      </a>
    </div>
  </div>

  <?php foreach ($data['posts'] as $post): ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $post->title; ?></h4>
      <p class="card-text"><?php echo $post->body; ?></p>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $post->name; ?> on <?php echo $post->postCreatedAt; ?>
      </div>
      <a href="<?php echo URLROOT . "/posts/show/{$post->postId}"; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . "/views/include/footer.php"; ?>