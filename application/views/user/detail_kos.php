<section class="hero-wrap hero-wrap-2" style="background-image: url('../../asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>Main_Front_User">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="<?php echo base_url() ?>Main_Front_User/semua_kos">Kos <i class="fa fa-chevron-right"></i></a></span> <span>Detail Kos <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Detail Kos</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-property-details">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="property-details">
          <div class="img" style="text-align: center;">
            <img src="<?php echo base_url(); ?>file/kos_image/<?= $image_header ?>" width="75%">
            </a>
          </div>
          <div class="text">
            <span class="subheading"><?= $kota ?></span>
            <h2><b><?= $nama ?></b></h2>
            <button type="button" class="btn btn-outline-success btn-rounded" style="margin-right: 2em">Kos
              <?php
              if ($tipe == 'Campur') {
                echo 'Campur';
              } elseif ($tipe == 'Putra') {
                echo 'Putra';
              } elseif ($tipe == 'Putri') {
                echo 'Putri';
              } ?>
            </button>
            <br><br>
            <span class="subheading"><img src="../../asset/images/maps.png" alt=""><?= $alamat ?></span>
            <br>
            <h3 class="text-success"><b>Rp. <?= $this->cart->format_number($harga); ?> /bulan</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 pills">
        <div class="bd-example bd-example-tabs">
          <div class="d-flex">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Detail</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Deskripsi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-fasilitas-tab" data-toggle="pill" href="#pills-fasilitas" role="tab" aria-controls="pills-fasilitas" aria-expanded="true">Fasilitas</a>
              </li>
            </ul>
          </div>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
              <div class="row">
                <div class="col-md-12">
                  <ul class="features">
                    <li class="check"><span class="fa fa-circle"></span>Kota : <?= $kota ?></li>
                    <li class="check"><span class="fa fa-circle"></span>Alamat : <?= $alamat ?></li>
                    <li class="check"><span class="fa fa-circle"></span>Kategori : <?= $tipe ?></li>
                    <li class="check"><span class="fa fa-circle"></span>No Hp : <?= $no_hp ?></li>
                    <li class="check"><span class="fa fa-circle"></span>Oleh : <?= $fullname ?></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
              <p><?= $deskripsi ?></p>
            </div>

            <div class="tab-pane fade" id="pills-fasilitas" role="tabpanel" aria-labelledby="pills-fasilitas-tab">
              <div class="row">
                <div class="col-md-12">
                  <ul class="features">
                    <?php foreach (json_decode($fasilitas) as $item) { ?>
                      <li class="check"><span class="fa fa-circle"></span><?php echo $item; ?></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

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