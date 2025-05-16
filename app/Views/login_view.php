<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css">
    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5 col-5">
        <div class="biodata-box">
            <h2>LOGIN</h2>
            <form action="" method="POST">
                <?php if(session()->getFlashdata('error')) {?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('error') ?>
                    </div>
                <?php } ?>
                <div class="inputan">
                    <input type="text" id="inputUsername" name="member_username" class="form-control" value="<?php echo session()->getFlashdata('member_username') ?>">
                    <label>Username</label>
                </div>
                <div class="inputan">
                    <input type="password" id="inputPassword" name="member_password" class="form-control" >
                    <label>Password</label>
                </div>
                <div class="action">
                    <button type="submit" name="login" class="action-button" value="LOGIN">LOGIN</button>
                </div>
            </form>
            <a href="<?= base_url('/'); ?>">
                <button class="action-button-cancel">KEMBALI</button>
            </a>
        </div>
    </div>
</body>