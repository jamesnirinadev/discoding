<?php
ob_start();
// require_once('common.php');
// echo '<br> TEST -- signupView is alive </br>';
?>


<div class="col-sm-6 col-md-9 mt-2">
        <div class="row">
                <div class="col-10">
                    <h2><i class="bi-people-fill mx-2"></i>Sign Up</h2>
                </div>
                <div class="col-2 align-self-center d-flex justify-content-end">
                    <btn>
                        <a href="index.php?action=login" class="btn btn-success">Home</a>
                    </btn>
                </div>
           </div>
</div>


<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>Sign up
            </h3>
            <p class="text-muted">We're so excited that you join Discoding !</p>
            <form action="index.php?action=signup&sub_action=signup" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label text-muted small text-uppercase">Email or Phone
                        number</label>
                    <input type="email" class="form-control" id="email" name="email"/>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label text-muted small text-uppercase">name</label>
                    <input type="name" class="form-control" id="username" name="username"/>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted small text-uppercase">Password</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Validate</button>
                </div>
            </form>


        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php // require( __DIR__ . '/base.php'); ?>
<?php require('base.php'); ?>
