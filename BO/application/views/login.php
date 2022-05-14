<!-- <h1>Login</h1> -->
<!-- <form action="<?php echo site_url('LoginController/verifyLogin'); ?>">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="checkbox" name="su">
    <input type="submit" value="Se connecter">
</form> -->



<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Administrateur</h1>
                                    <h5 style="color: red;"><?php if (isset($error)) echo $error; ?> </h5>

                                </div>
                                <form class="user" action="<?php echo site_url('LoginController/verifyLogin'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="login" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="mot de passe" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <!-- <input type="checkbox" class="custom-control-input" id="customCheck" name="su"> -->
                                            <!-- <label class="custom-control-label" for="customCheck">Super utilisateur</label> -->
                                        </div>
                                    </div>
                                    <input type="submit" value="se connecter" class="btn btn-primary btn-user btn-block">
                                    <br>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="http://[::1]/my-app/climat/FO/">Front</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>