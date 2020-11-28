<?php require APPROOT . "/views/include/header.php" ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fas fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit Post</h2>
    
    <form action="<?php echo URLROOT . '/posts/edit/' . $data['id']; ?>" method="post">
      <div class="form-group">
        <label>Title: <sup>*</sup></label>
        <input type="text" class="form-control form-control-lg <?php echo !empty($data['title_err']) ? 'is-invalid': ''; ?>" name="title" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>

      <div class="form-group">
        <label>Body: <sup>*</sup></label>
        <textarea class="form-control form-control-lg <?php echo !empty($data['body_err']) ? 'is-invalid': ''; ?>" name="body"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>

      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPROOT . "/views/include/footer.php"; ?>