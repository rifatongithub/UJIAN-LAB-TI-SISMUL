<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Mahasiswa</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Nama : <?= $mahasiswa['nama'] ?></h5>
                        <h5 class="card-title">NPM : <?= $mahasiswa['npm'] ?></h5>
                        <h5 class="card-title">Tanggal Lahir : <?= $mahasiswa['tgl_lahir'] ?></h5>
                        <h1 class="card-text">-------------------</h1>
                        <p class="card-text"><small class="text-muted"><b>Alamat : <?= $mahasiswa['alamat'] ?></b></small></p>

                        <a href="/mahasiswa/edit/<?= $mahasiswa['slug']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/mahasiswa/<?= $mahasiswa['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <br><br>
                        <a href="/mahasiswa">Kembali ke daftar Mahasiswa</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>