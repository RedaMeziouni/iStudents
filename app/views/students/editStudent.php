<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Back Button -->
  <a href="<?php echo URLROOT; ?>/students/showStudent" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit Student</h2>
    <p>Edit students infos with this form</p>
    <form action="<?= URLROOT; ?>/students/editStudent/<?= $data['id']; ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Name"> Name :</label>
                        <input type="text" name="name" class="form-control form-control-lg <?= (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['name']; ?>">
                        <span class="invalid-feedback"><?= $data['name_err']; ?></span>
                    </div>
                    
                
                
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email']; ?>">
                        <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="genre">Gender</label>
                        <select class="form-control <?= (!empty($data['genre_err'])) ? 'is-invalid' : ''; ?>" name="genre">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span class="invalid-feedback"><?= $data['genre_err']; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="class">Class</label>
                        <select class="form-control <?= (!empty($data['class_err'])) ? 'is-invalid' : ''; ?>" name="class">
                            <?php foreach ($data['getclass'] as $class) : ?>
                                <option value="<?= $class->classe_name; ?>"><?= $class->classe_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="invalid-feedback"><?= $data['class_err']; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Update" class="btn btn-success btn-block">
                    </div>
                </div>
            </form>
  </div>



<?php require APPROOT . '/views/inc/footer.php'; ?>