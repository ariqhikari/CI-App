<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-3">Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($siswa as $sw) : ?>
                    <li class="list-group-item"><?= $sw["nama"]; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>