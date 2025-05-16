<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/styleHome.css">
<div class="container">
    <div class="row">
        <div class="col">
            <h1>LABTI Sistem Multimedia</h1>
            <?php if (session()->get('member_id')) : ?>
                <h2>Selamat Datang <?php echo (session()->get('member_username')); ?></h2>
            <?php else : ?>
                <h2>Selamat Datang</h2>
            <?php endif; ?>
            <h2>
                <marquee behavior="" direction="">
                    <font color="red"> Rifat Hidayatullah </font>
                </marquee>
            </h2>
            <h2></h2>
            <audio controls>
                <source src="/mp3/The_Beatles_Yesterday.mp3" type="audio/mpeg">
            </audio>
            <h2>
                <font color="blue"> Lucasfilm Games
            </h2>
            </font>
            <p>Lucasfilm Games (known as LucasArts between 1990 and 2021) is an American video game licensor, former video game developer and publisher, and a subsidiary of Lucasfilm. </p>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="">
                <img src="/img/lfg.jpeg" alt="" id="imgHomeM">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="colVid">
            <h2 class="mt-5">The Secrets of Monkey Island</h2>
            <video class="videoPlayer mb-5" controls>
                <source src="/img/monkeyisland.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class=" mb-5 mt-5">
                <img src="https://c.tenor.com/_afTeBSbXXcAAAAC/download-downloading.gif" alt="" id="imgHomeM">
            </div>
        </div>
    </div>
</div>



<footer class="footer text-white" id="footerHome">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h5>Ini apa?</h5>
                <p>
                    Ini footer ygy
                </p>
            </div>
            <div class="col-lg-6 mb-3 text-center">
                <h5>Kantor</h5>
                <p>
                    Dihatimu
                </p>
            </div>
            <h5 class="text-center mb-5">
                Rifat Hidayatullah
            </h5>
        </div>

    </div>
</footer>

<?= $this->endSection(); ?>