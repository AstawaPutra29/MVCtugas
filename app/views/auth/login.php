<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9 bg-white mt-5">
                <div class="p-5">
                    <div class="text-center">
                        <?php Flasher::flash(); ?>
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="login" class="small" href="<?= BASEURL ?>/auth">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>