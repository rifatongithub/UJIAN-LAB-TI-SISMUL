<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/mahasiswa/create" class="btn btn-primary mt-3">Tambah Data Mahasiswa</a>
                <h1 class="mb-3 text-center">Daftar Mahasiswa</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($mahasiswa as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['npm']; ?></td>
                            <td><?= $m['alamat']; ?></td>
                            <td><?= $m['tgl_lahir']; ?></td>
                            <td>
                                <a href="/mahasiswa/<?= $m['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>