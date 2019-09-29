<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
         <?= form_open('Auth/Registrasi') ?>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user"  placeholder="First Name" name="username" value="<?= set_value('username') ?>">
                  <?= form_error('username','<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user"  placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
                 <?= form_error('email','<small class="text-danger pl-3">', '</small>') ?>
              </div>
              
                  <small>Password Berisi Angka Dan Huruf</small>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password1">
                   <?= form_error('password1','<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password2">
                   <?= form_error('password2','<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
              <button class="btn btn-primary btn-user btn-block" name="registrasi" type="submit">
                Register Account
              </button>
              <hr>

            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url() ?>">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
