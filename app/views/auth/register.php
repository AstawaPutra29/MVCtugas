  <body class="bg-gradient-primary">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5 col-7 mx-auto">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="w-100">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Register</h1>
                </div>
                <form class="user">
                  <div class="form-group row">
                    <div class="col">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirm Password" />
                    </div>
                  </div>
                  <a href="login.html" class="btn btn-primary btn-user btn-block"> Register </a>
                  <hr />
                </form>
                <hr />
                <div class="text-center">
                  <a class="small" href="<?= BASEURL ?>/login"> have account? Login</a>
                  <br>
                  <a class="small" href="<?= BASEURL ?>/home"> Back to Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>