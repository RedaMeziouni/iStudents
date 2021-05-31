<?php
    require APPROOT . '/views/inc/header.php';
    // require APPROOT . '/Helpers/mail.php';
    ?>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body mt-5">
                <h2 class="text-center">Contact us</h2>
                <form action="<?= URLROOT; ?>/pages/contact" method="post">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control form-control-lg" required>
                        <span class="invalid-feedback"></span>
                    </div>
                   
                    <div class="form-group">
                        <label for="subject">Subject :</label>
                        <input type="text" name="subject" class="form-control form-control-lg" required>
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label for="Message">Message :</label>
                        <textarea name="message" class="form-control" rows="3" required></textarea>
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit" value="SEND" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>