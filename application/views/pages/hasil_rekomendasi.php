<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url(<?=base_url()?>assets/img/page-title-bg.webp);">
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
            <div class="row gy-4 d-flex justify-content-center">
                <?php foreach ($listKriteria as $key => $kriteria) :?>
                <div class="col-6">
                    <label for="bobot_<?=$kriteria['id_kriteria'];?>"><?=$kriteria['nama_kriteria'];?></label>
                    <input type="number" value="<?=$bobot_kriteria[$kriteria['id_kriteria']];?>"
                        class="form-control bobot-input" name="bobot[<?=$kriteria['id_kriteria'];?>]"
                        id="bobot_<?=$kriteria['id_kriteria'];?>" min="0" max="100" required>
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

<script>
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
</script>


<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
            <?php foreach ($ranking as $id => $nilai) :?>
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>
                    <div class="post-img">
                        <img src="<?=base_url('uploads/').$info_alternatif[$id]['gambar'];?>" alt="" class="img-fluid">
                    </div>
                    <p class="post-category">Skor : <?=$nilai?></p>
                    <h2 class="title">
                        <a
                            href="<?=base_url('pages/detail_rekomendasi/'.$id);?>"><?=$info_alternatif[$id]['nama'];?></a>
                    </h2>
                    <a target="_blank" class="btn btn-success"
                        href="https://www.google.com/maps/dir/?api=1&destination=<?=$info_alternatif[$id]['latitude'];?>,<?=$info_alternatif[$id]['longitude'];?>">Google
                        Maps</a>
                </article>
            </div>
            <?php endforeach;?>
            <!-- End post list item -->
        </div>
        <!-- End recent posts list -->
    </div>
</section>
<!-- /Blog Posts Section -->