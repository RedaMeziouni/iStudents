<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row mt-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5 ">
      <h2 class="text-center mb-3"><b>Forgot Password</b></h2>
        <p>Please fill the form the reset your Password</p>
        <form action="<?php echo URLROOT; ?>/pages/forgot" method="post">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg">
            </div>
          <div class="form-group">
              <input type="submit" name="reset" value="Login" class="btn btn-success btn-block">
            </div>
            <a href="<?php echo URLROOT; ?>/users/login" class="btn float-right btn-outline-primary">Login Page</a>
            </form>
            </div>
             </div> 
             </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>