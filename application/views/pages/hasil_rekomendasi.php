<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url(background-image: url(<?=base_url('assets/img/timor_megah.jpg')?>);">
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
                    <input type="range" value="<?=$bobot_kriteria[$kriteria['id_kriteria']];?>"
                        class="form-range bobot-input" name="bobot[<?=$kriteria['id_kriteria'];?>]"
                        id="bobot_<?=$kriteria['id_kriteria'];?>" min="0" max="100" required>
                </div>
                <?php endforeach; ?>
            </div> -->
            <div class="row gy-4 d-flex justify-content-center">
                <?php foreach ($listKriteria as $key => $kriteria) :
                    $id = $kriteria['id_kriteria'];
                    $value = isset($bobot_kriteria[$id]) ? $bobot_kriteria[$id] : 0;
                ?>
                <div class="col-6">
                    <label for="bobot_<?=$id;?>">
                        <?=$kriteria['nama_kriteria'];?>:
                        <span id="bobot_val_<?=$id;?>"><?=$value;?></span>
                    </label>
                    <input type="range" value="<?=$value;?>" class="form-range bobot-input" name="bobot[<?=$id;?>]"
                        id="bobot_<?=$id;?>" min="0" max="100" required
                        oninput="document.getElementById('bobot_val_<?=$id;?>').textContent = this.value">
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

<!-- <?php
    foreach($matriks_X as $key => $value) { 
        echo $info_alternatif[$key]['nama']." - ";
        foreach ($value as $keys => $val) {
            echo $val;
        }
        echo "<br>";
    }
    foreach($matriks_R as $key => $value) { 
        echo $info_alternatif[$key]['nama']." - ";
        foreach ($value as $keys => $val) {
            echo round($val, 6)." ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($matriks_V as $key => $value) { 
        echo $info_alternatif[$key]['nama']." - ";
        foreach ($value as $keys => $val) {
            echo round($val, 6)." ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($concordance as $key => $value) { 
        echo $info_alternatif[$key]['nama']." - ";
        foreach ($value as $keys => $val) {
            echo round($val, 6)." ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($discordance as $key => $value) {
        echo $info_alternatif[$key]['nama']." - "; 
        foreach ($value as $keys => $val) {
            echo round($val, 6)." ";
        }
        echo "<br>";
    }
    echo $threshold_C;
    echo "<br>";
    echo $threshold_D;echo "<br>";
    echo "<br>";
    foreach($dominasi as $key => $value) { 
        echo $info_alternatif[$key]['nama']." - ";
        foreach ($value as $keys => $val) {
            echo round($val, 6)." ";
        }
        echo "<br>";
    }
?> -->
<section id="blog-posts" class="blog-posts section">
    <div class="container">
        <?php
            function renderTable($title, $matrix, $info_alternatif, $isRounded = false, $decimals = 6) {
                echo "<h5 class='mt-4 mb-2 fw-bold'>$title</h5>";
                echo "<div class='table-responsive'>";
                echo "<table class='table table-bordered table-striped table-hover align-middle'>";
                echo "<thead class='table-dark'><tr><th>Alternatif</th>";
                
                // Ambil jumlah kolom dari elemen pertama
                if (!empty($matrix)) {
                    $colCount = count(reset($matrix));
                    for ($i = 1; $i <= $colCount; $i++) {
                        echo "<th>C$i</th>";
                    }
                }

                echo "</tr></thead><tbody>";

                foreach ($matrix as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $info_alternatif[$key]['nama'] . "</td>";
                    foreach ($value as $val) {
                        echo "<td>" . ($isRounded ? round($val, $decimals) : $val) . "</td>";
                    }
                    echo "</tr>";
                }

                echo "</tbody></table></div>";
            }

            renderTable("Matriks X", $matriks_X, $info_alternatif);
            renderTable("Matriks R (Normalisasi)", $matriks_R, $info_alternatif, true);
            renderTable("Matriks V (Terbobot)", $matriks_V, $info_alternatif, true);
            renderTable("Matriks Concordance", $concordance, $info_alternatif, true);
            renderTable("Matriks Discordance", $discordance, $info_alternatif, true);
            renderTable("Matriks Dominasi", $dominasi, $info_alternatif, true);

            echo "<div class='mt-4'>";
            echo "<p><strong>Threshold Concordance (C) :</strong> " . round($threshold_C, 6) . "</p>";
            echo "<p><strong>Threshold Discordance (D) :</strong> " . round($threshold_D, 6) . "</p>";
            echo "</div>";
            ?>
    </div>
    <div class="container">
        <h2 class="mb-4 text-center">Hasil Ranking Hotel</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Ranking</th>
                        <th>Nama Hotel</th>
                        <th>Gambar</th>
                        <th>Skor</th>
                        <th>Lokasi (Google Maps)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($ranking as $id => $nilai) : 
                        $hotel = $info_alternatif[$id];
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>
                            <a href="<?= base_url('pages/detail_rekomendasi/'.$id); ?>">
                                <?= $hotel['nama']; ?>
                            </a>
                        </td>
                        <td>
                            <img src="<?= base_url('uploads/').$hotel['gambar']; ?>" alt="Gambar Hotel" width="100">
                        </td>
                        <td><?= $nilai; ?></td>
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
<!-- Blog Posts Section -->
<!-- <section id="blog-posts" class="blog-posts section">
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
            
        </div>
    </div>
</section> -->