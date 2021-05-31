<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body mt-5">
        <h2>Add Student</h2>
        <p>Please fill out this form to add new students</p>

        <!-- Form -->
        <form action="<?= URLROOT ?>/students/addStudent" method="post">
          <!-- Name -->
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input placeholder="name" type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <!-- E-mail -->
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input placeholder="name@student.youcode.ma" type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <!-- Age -->
          <div class="form-group">
            <label for="age">Age: <sup>*</sup></label>
            <input type="number" name="age" class="form-control form-control-lg">
          </div>
          <!-- Gendre -->
          <div class="form-group">
            <label for="age">Gendre: <sup>*</sup></label>
            <!-- <input type="number" name="genre" class="form-control form-control-lg"> -->
            <select class="form-control" name="genre">
                <option>Male</option>
                <option>Female</option>
              </select>
          </div>
          <!-- class -->
          <div class="form-group">
          <label for="class">Class</label>
          <select class="form-control " name="class">
            <?php foreach ($data['getclass'] as $class) : ?>
              <option value="<?= $class->classe_name; ?>"><?= $class->classe_name; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
          <div class="row">
            <div class="col">
              <input type="submit" value="ADD" class="btn btn-success btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>



