<?php if (isset($_SESSION['success'])): ?>
<script>
Swal.fire({
    title: 'Sukses!',
    text: '<?= $_SESSION["success"]; ?>',
    icon: 'success',
    confirmButtonText: 'OK'
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href = '';
    }
});
</script>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
<script>
Swal.fire({
    title: 'Error!',
    text: '<?= $_SESSION["error"]; ?>',
    icon: 'error',
    confirmButtonText: 'OK'
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href = '';
    }
});
</script>
<?php unset($_SESSION['error']); ?>
<?php endif; ?>

<div class="container mb-5" style="font-family: 'Prompt', sans-serif">
    <div class="row">
        <div class="d-xxl-flex">
            <div class="mt-5 col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">DAFTAR PESAN KONTAK</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered nowrap" style="width:100%" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataKontak as $i => $kontak): ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td><?= htmlspecialchars($kontak['nama']) ?></td>
                                        <td><?= htmlspecialchars($kontak['email']) ?></td>
                                        <td><?= nl2br(htmlspecialchars($kontak['pesan'])) ?></td>
                                        <td><?= date('d-m-Y H:i', strtotime($kontak['tanggal_kirim'])) ?></td>
                                        <td>
                                            <!-- Tombol Lihat -->
                                            <button type="button" class="btn btn-sm btn-info text-white"
                                                data-bs-toggle="modal" data-bs-target="#detail<?= $kontak['id'] ?>">
                                                Lihat
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus<?= $kontak['id'] ?>">
                                                Hapus
                                            </button>
                                        </td>

                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<?php foreach ($dataKontak as $kontak): ?>
<div class="modal fade" id="hapus<?= $kontak['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?= base_url('kontak/delete') ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id_kontak" value="<?= $kontak['id'] ?>">
                <div class="modal-body">
                    <p>Yakin ingin menghapus pesan dari <strong><?= htmlspecialchars($kontak['nama']) ?></strong>?</p>
                    <p><em>"<?= htmlspecialchars($kontak['pesan']) ?>"</em></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php foreach ($dataKontak as $kontak): ?>
<div class="modal fade" id="detail<?= $kontak['id'] ?>" tabindex="-1" aria-labelledby="detailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="detailModalLabel">Detail Pesan Kontak</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?= htmlspecialchars($kontak['nama']) ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= htmlspecialchars($kontak['email']) ?></td>
                    </tr>
                    <tr>
                        <th>Pesan</th>
                        <td><?= nl2br(htmlspecialchars($kontak['pesan'])) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?= date('d-m-Y H:i', strtotime($kontak['tanggal_kirim'])) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>