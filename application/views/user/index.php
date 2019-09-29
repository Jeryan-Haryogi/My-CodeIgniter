

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url('assets/img/banner.png') ?>" alt="First slide" height="300">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img/mobile.jpg') ?>" alt="Second slide" height='300'>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img/web-designer.jpg') ?>" alt="Third slide" height='300'>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-center mt-3"><b>DESIGN WEB APPS</b></h1>
        <hr>
      </div>
    </div>
    <div class="row ml-4" style="margin-top: 10px;">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src='<?= base_url("assets/img/pesan.jpg") ?>' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Design Tiket Online</b></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Pesan</a>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
              Detail
            </button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-4" >
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src='<?= base_url("assets/img/toko-online.jpg") ?>' alt="Card image cap" height='175'>
          <div class="card-body">
            <h5 class="card-title"><b>Design Tiket Online</b></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Pesan</a>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
              Detail
            </button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src='<?= base_url("assets/img/develop.jpg") ?>' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Development Website</b></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Pesan</a>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
              Detail
            </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('Auth/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>
