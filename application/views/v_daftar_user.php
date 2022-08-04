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
                <!-- <?= validation_errors(); ?> -->
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
                        <span>Username</span>
                        <?php echo form_error('username'); ?>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Fullname</span>
                        <?php echo form_error('fullname'); ?>
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo set_value('fullname'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <?php echo form_error('email'); ?>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Jenis Kelamin</span>
                        <?php echo form_error('jk'); ?>
                        <select class="form-control show-tick" name="jk">
                            <option value="2">Pria</option>
                            <option value="3">Wanita</option>
                        </select>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <?php echo form_error('password1'); ?>
                        <input type="password" class="form-control" name="password1" minlength="6" placeholder="Password" value="<?php echo set_value('password1'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <?php echo form_error('password2'); ?>
                        <input type="password" class="form-control" name="password2" minlength="6" placeholder="Confirm Password" value="<?php echo set_value('password2'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Telephone Number</span>
                        <?php echo form_error('no_hp'); ?>
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo set_value('no_hp'); ?>">
                    </div>
                    <div class="inputBx">
                        <span>Address</span>
                        <?php echo form_error('alamat'); ?>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo set_value('alamat'); ?>">
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