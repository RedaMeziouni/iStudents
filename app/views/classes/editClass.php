<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Back Button -->
  <a href="<?php echo URLROOT; ?>/classes/showClass" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit Classes</h2>
    <p>Edit classes infos with this form</p>
    <form action="<?= URLROOT; ?>/classes/editClass/<?= $data['id']; ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Name"> Name Class :</label>
                        <input type="text" name="nom" class="form-control form-control-lg" value="<?= $data['nom']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Specialite :</label>
                        <input type="text" name="specialite" class="form-control form-control-lg" value="<?= $data['specialite']; ?>">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Description :</label>
                        <input type="text" name="description" class="form-control form-control-lg" value="<?= $data['description']; ?>">
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