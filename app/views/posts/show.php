<?php require APPROOT . "/views/include/header.php" ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fas fa-backward"></i> Back</a>
  <br>
  <h1><?php echo $data['post']->title; ?></h1>
  <div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
  </div>
  <p><?php echo $data['post']->body; ?></p>
  <?php if ($data['post']->user_id == $_SESSION['user_id']): ?>
    <hr>
    <a href="<?php echo URLROOT . '/posts/edit/' . $data['post']->id; ?>" class="btn btn-dark">Edit</a>

    <form class="float-right" method="post" action="<?php echo URLROOT . '/posts/delete/' . $data['post']->id; ?>">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
<?php require APPROOT . "/views/include/footer.php"; ?>