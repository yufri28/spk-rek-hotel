<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url(background-image: url(<?=base_url()?>assets/img/timor_megah.jpg);">
    <div class="container position-relative">
        <h1>Detail Rekomendasi</h1>
    </div>
</div>
<!-- End Page Title -->

<div class="container my-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <section id="hotel-details" class="blog-details section">
                <div class="container">
                    <article class="article">
                        <div class="post-img mb-4">
                            <img src="<?= base_url('uploads/' . $hotel['gambar']); ?>"
                                alt="<?= $hotel['nama_alternatif']; ?>" class="img-fluid w-100">
                        </div>
                        <h2 class="title"><?= $hotel['nama_alternatif']; ?></h2>
                        <div class="content mb-4">
                            <p><strong>Alamat:</strong> <?= $hotel['alamat']; ?></p>
                            <p><strong>Lokasi:</strong>
                                <a target="_blank" class="btn btn-success btn-sm"
                                    href="https://www.google.com/maps/dir/?api=1&destination=<?=$hotel['latitude'];?>,<?=$hotel['longitude'];?>">Google
                                    Maps
                                </a>
                            </p>
                        </div>
                        <h4 class="mt-4">Kriteria Penilaian:</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered mt-2">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Sub Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($listHotel as $item): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $item['nama_kriteria']; ?></td>
                                        <td><?= $item['nama_sub_kriteria']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <a class="btn btn-danger" href="<?=base_url('pages/rekomendasi');?>">Kembali</a>
                    </article>
                </div>
            </section>
        </div>
    </div>
</div>