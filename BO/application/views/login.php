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
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    <h5 style="color: red;"><?php if (isset($error)) echo $error; ?>    </h5>

                                </div>
                                <form class="user" action="<?php echo site_url('LoginController/verifyLogin'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="su">
                                            <label class="custom-control-label" for="customCheck">Super utilisateur</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="login" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo site_url('inscriptionController/inscription'); ?>">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>