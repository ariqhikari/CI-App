<div class="container mt-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata("flash") ?>"></div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Siswa.." name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-3">Daftar Siswa</h3>
            <?php if (empty($siswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Siswa tidak ditemukan!
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($siswa as $sw) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $sw["nama"]; ?>
                        <div class="badge-list">
                            <a href="<?= base_url(); ?>siswa/detail/<?= $sw["id"]; ?>" class="badge badge-primary">Detail</a>
                            <a href="<?= base_url(); ?>siswa/ubah/<?= $sw["id"]; ?>" class="badge badge-success">Edit</a>
                            <a href="<?= base_url(); ?>siswa/hapus/<?= $sw["id"]; ?>" class="badge badge-danger tombol-hapus">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>