<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url(<?=base_url()?>assets/img/timor_megah.jpg);">
    <div class="container position-relative">
        <h1>Rekomendasi Hotel</h1>
    </div>
</div><!-- End Page Title -->

<section class="section">
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Silakan masukkan bobot untuk setiap kriteria sesuai tingkat kepentingan Anda.
            Bobot menunjukkan seberapa penting kriteria tersebut dalam pengambilan keputusan.
            Total seluruh bobot harus tepat <strong>100</strong>. Pastikan tidak kurang atau lebih.
        </div>
        <form id="bobotForm" action="<?= base_url('electre');?>" method="post">
            <!-- <div class="row gy-4 d-flex justify-content-center">
                <?php foreach ($listKriteria as $key => $kriteria) :?>
                <div class="col-6">
                    <label for="bobot_<?=$kriteria['id_kriteria'];?>"><?=$kriteria['nama_kriteria'];?></label>
                    <input type="range" class="form-range bobot-input" name="bobot[<?=$kriteria['id_kriteria'];?>]"
                        id="bobot_<?=$kriteria['id_kriteria'];?>" min="0" max="100" required>
                </div>
                <?php endforeach; ?>
            </div> -->
            <div class="row gy-4 d-flex justify-content-center">
                <?php foreach ($listKriteria as $key => $kriteria) :?>
                <div class="col-6">
                    <label for="bobot_<?=$kriteria['id_kriteria'];?>">
                        <?=$kriteria['nama_kriteria'];?>:
                        <span id="bobot_val_<?=$kriteria['id_kriteria'];?>">0</span>
                    </label>
                    <input type="range" class="form-range bobot-input" name="bobot[<?=$kriteria['id_kriteria'];?>]"
                        id="bobot_<?=$kriteria['id_kriteria'];?>" min="0" max="100" value="0" required
                        oninput="document.getElementById('bobot_val_<?=$kriteria['id_kriteria'];?>').textContent = this.value">
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <button class="btn btn-success" type="submit">Rekomendasi</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- <script>
document.getElementById('bobotForm').addEventListener('submit', function(event) {
    const inputs = document.querySelectorAll('.bobot-input');
    let total = 0;
    let valid = true;

    inputs.forEach(input => {
        const value = input.value.trim();
        if (value === '' || isNaN(value)) {
            valid = false;
        } else {
            total += parseFloat(value);
        }
    });

    if (!valid) {
        alert('Semua kolom bobot harus diisi.');
        event.preventDefault();
        return;
    }

    if (total !== 100) {
        alert(`Total bobot saat ini adalah ${total}. Total bobot harus tepat 100.`);
        event.preventDefault();
    }
});
</script> -->
<section id="blog-posts" class="blog-posts section">
    <div class="container">
        <h2 class="mb-4 text-center">Daftar Hotel</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Hotel</th>
                        <th>Gambar</th>
                        <th>Lokasi (Google Maps)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listHotel as $key => $hotel) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td>
                            <a href="<?= base_url('pages/detail_rekomendasi/'.$hotel['id_alternatif']); ?>">
                                <?= $hotel['nama_alternatif']; ?>
                            </a>
                        </td>
                        <td>
                            <img src="<?= base_url('uploads/').$hotel['gambar']; ?>" alt="Gambar Hotel" width="100">
                        </td>
                        <td>
                            <a target="_blank" class="btn btn-sm btn-success"
                                href="https://www.google.com/maps/dir/?api=1&destination=<?= $hotel['latitude']; ?>,<?= $hotel['longitude']; ?>">
                                Google Maps
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- <section id="blog-posts" class="blog-posts section">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
            <?php foreach ($listHotel as $key => $hotel) :?>
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>
                    <div class="post-img">
                        <img src="<?=base_url('uploads/').$hotel['gambar'];?>" alt="" class="img-fluid">
                    </div>
                    <h2 class="title">
                        <a
                            href="<?=base_url('pages/detail_rekomendasi/'.$hotel['id_alternatif']);?>"><?=$hotel['nama_alternatif'];?></a>
                    </h2>
                    <a target="_blank" class="btn btn-success"
                        href="https://www.google.com/maps/dir/?api=1&destination=<?=$hotel['latitude'];?>,<?=$hotel['longitude'];?>">Google
                        Maps</a>
                </article>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section> -->