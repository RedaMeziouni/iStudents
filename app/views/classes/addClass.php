<?php  require APPROOT . '/views/inc/header.php'; ?>

 <!--  -->
 <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body mt-5">
        <h2>Add Class</h2>
        <p>Please fill out this form to add new Class</p>

        <!-- Form -->
        <form method ="POST">
        <!-- Class Name -->
          <div class="form-group">
            <label>Class Name: <sup>*</sup></label>
            <input placeholder="Class name" type="text" name="nom" class="form-control form-control-lg">
          </div>
          <!-- Speciality -->
          <div class="form-group">
            <label>Class Speciality: <sup>*</sup></label>
            <input placeholder="JAVA JEE/ C#/ FEBE" type="text" name="specialite" value="" class="form-control form-control-lg">
          </div>
          <!-- Description -->
          <div class="form-group">
            <label for="">Description: <sup>*</sup></label>
            <input placeholder="Description" type="text" name="description" class="form-control form-control-lg">
          </div>
          <!-- <button id="submit" type="submit" value="submit">Submit</button> -->

          <div class="row">
            <div class="col">
              <input type="submit" id="submit" value="ADD" class="btn btn-success btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>