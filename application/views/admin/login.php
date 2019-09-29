

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center" style="margin-top: 50px;">

    <div class="col-lg-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                  <?php if ($this->session->flashdata()): ?>
                    <?= $this->session->flashdata('flash') ?>
                  <?php endif ?>
                </div>
                <?= form_open('Control/Ck_login') ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Username" name="username" required="">
                  <?= form_error('username', '<small class="text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required="">
                  <?= form_error('password', '<small class="text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                  Login
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
