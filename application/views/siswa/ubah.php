<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form Ubah Data Siswa</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama.." name="nama" value="<?= $siswa["nama"]; ?>">
                            <small class="form-text text-danger"><?= form_error("nama"); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" id="nis" placeholder="Masukkan nis.." name="nis" min="0" value="<?= $siswa["nis"]; ?>">
                            <small class="form-text text-danger"><?= form_error("nis"); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email.." name="email" value="<?= $siswa["email"]; ?>">
                            <small class="form-text text-danger"><?= form_error("email"); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="jurusan">Jurusan</option>
                                <?php foreach ($jurusan as $js) : ?>
                                    <?php if ($js["jurusan"] === $siswa["jurusan"]) : ?>
                                        <option value="<?= $js["jurusan"]; ?>" selected><?= $js["jurusan"]; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $js["jurusan"]; ?>"><?= $js["jurusan"]; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="btn-form d-flex justify-content-end">
                            <a href="<?= base_url(); ?>/siswa" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>