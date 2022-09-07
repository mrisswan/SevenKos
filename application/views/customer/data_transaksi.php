<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css">
  <link rel="icon" href="<?= base_url() ?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/animate.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/fonts/icofont/icofont.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>asset/css/profile.css" />
</head>

<body>
  <br><br><br>
  <section class="content">
    <div class="container-fluid">
      <!-- Basic Examples -->
      <div class="container mt-2 mb-2 ">
        <div class="card border-info mt-2">
          <div class="card-body">
            <div class="header">
              <h3> </h3>
              <h3>Cek Pembayaran</h3>
            </div>
            <div class="body">

              <?php foreach ($transaksi as $dt) : ?>
                <div class="row">
                  <div class="col-md-6 my-4">
                    <img src="<?php echo base_url(); ?>file/kos_image/<?= $dt->image_header ?>" width="410px">
                  </div>
                  <hr>
                  <div class="col-md-6 my-4">
                    <table class="table">

                      <tr>
                        <td>Nama Kos :</td>
                        <td> <?= $dt->nama ?> </td>
                      </tr>
                      <tr>
                        <td>Harga : </td>
                        <td>Rp. <?= number_format($dt->harga, 0, ',', '.') ?>/bulan</td>
                      </tr>
                      <tr>
                        <td>
                          <?php if ($dt->status_pembayaran == 1) { ?>
                            <button class="btn btn-success">Succes</button>
                          <?php } else { ?>
                            <a href="<?= base_url('customer/transaksi/pembayaran/') . $dt->id_booking ?>" class="btn btn-warning">Lanjutkan Pembayaran</a>
                        </td>
                      <?php } ?>


                      <?php if ($dt->status_sewa == 'belum_selesai') { ?>
                        <td><a href="<?= base_url('customer/transaksi/batal_transaksi/' . $dt->id_booking) ?>" id="batal" class="btn btn-danger batal">Batal</a></td>
                        <td><a href="<?= base_url('Main_Back_User/semua_kos') ?>" class="btn btn-info">Kembali</a></td>
                      <?php } else { ?>
                        <td> <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"> Batal Transaksi </button> </td>
                      <?php } ?>


                      </tr>
                    </table>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="#exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Informasi Batal Transaksi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('customer/transaksi/pembayaran_aksi') ?>" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                Maaf Transaksi tidak bisa di batalkan :)
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-warning text text-light">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <br><br>

      <!-- loader -->
      <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


      <script src="../../asset/js/jquery.min.js"></script>
      <script src="../../asset/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="../../asset/js/popper.min.js"></script>
      <script src="../../asset/js/bootstrap.min.js"></script>
      <script src="../../asset/js/jquery.easing.1.3.js"></script>
      <script src="../../asset/js/jquery.waypoints.min.js"></script>
      <script src="../../asset/js/jquery.stellar.min.js"></script>
      <script src="../../asset/js/owl.carousel.min.js"></script>
      <script src="../../asset/js/jquery.magnific-popup.min.js"></script>
      <script src="../../asset/js/jquery.animateNumber.min.js"></script>
      <script src="../../asset/js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="../../asset/js/google-map.js"></script>
      <script src="../../asset/js/main.js"></script>

</body>

</html>