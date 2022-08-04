<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevenKos | Register Page</title>
    <link href="<?php echo base_url() ?>/assets/css/index2.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="<?php echo base_url() ?>assets/images/bg.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h1>SevenKos</h1>
                <h2>Sign up</h2>
                <?= validation_errors(); ?>
                <form id="sign_up" method="POST" action="<?php echo base_url() ?>Main_Back_User/proses_daftar_user">
                    <div class="inputBx">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <?php if (isset($_GET['sucess'])) { ?>
                            <p class="sucess"><?php echo $_GET['sucess']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('username'); ?>
                        <span>Username</span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('fullname'); ?>
                        <span>Fullname</span>
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('email'); ?>
                        <span>Email</span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('jk'); ?>
                        <span>Jenis Kelamin</span>
                    </div>
                    <div class="form-check">
                        <input name="jk" type="radio" class="form-check-input" id="radio_3" value="Pria" />
                        <label for="radio_3">Pria</label>
                        <input name="jk" type="radio" id="radio_4" class="with-gap" value="Wanita" />
                        <label for="radio_4">Wanita</label>
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('password1'); ?>
                        <span>Password</span>
                        <input type="password" class="form-control" name="password1" minlength="6" placeholder="Password">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('password2'); ?>
                        <span>Confirm Password</span>
                        <input type="password" class="form-control" name="password2" minlength="6" placeholder="Confirm Password">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('no_hp'); ?>
                        <span>Telephone Number</span>
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('alamat'); ?>
                        <span>Address</span>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="inputBx">
                        <?php echo form_error('id_role'); ?>
                        <span>Role</span>
                    </div>
                    <div class="inputBx">
                        <span>Role</span>
                        <select class="form-control show-tick" name="id_role">
                            <option value="2">Customer</option>
                            <option value="3">Owner</option>
                        </select>
                    </div>
                    <br>
                    <div class="inputBx">
                        <input type="submit" value="Sign up" name="">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account? <a href="<?php echo base_url() ?>Login">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
<!-- <div class="inputBx">
    <span>Upload</span>
    <input type="text" class="form-control" name="profil" placeholder="Profil" required autofocus>
</div>
<div class="inputBx">
    <span>Upload Profil</span>
    <label for="image">Upload Gambar</label>
    <div class="form-group">
        <input type="file" name="foto" accept="image/png, image/gif, image/jpeg">
    </div>
</div> -->