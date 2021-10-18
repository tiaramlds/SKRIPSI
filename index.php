<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img class="gambar" src="<?php echo ambil_gambar('5') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('5') ?></p>
        <h2><?php echo ambil_judul('5') ?></h2>
        <?php echo maximum_kata(ambil_isi('5'), 15) ?>
        <p><a href="<?php echo buat_link_halaman('5') ?>" class="tbl-pink">More..</a></p>
    </div>
</section>

<!-- untuk brand -->
<section id="brand">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('8') ?></p>
        <h2><?php echo ambil_judul('8') ?></h2>
        <?php echo maximum_kata(ambil_isi('8'), 15) ?>
        <p><a href="<?php echo buat_link_halaman('8') ?>" class="tbl-pink">More..</a></p>
    </div>
    <img class="gambar" src="<?php echo ambil_gambar('8') ?>" />

</section>

<!-- untuk rekomendasi -->
<section id="rekomendasi">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Here we go!</p>
            <h2>Recommendation List</h2>
            <p>Pada bagian ini, ada beberapa jenis rekomendasi brand foundation lokal yang bisa kamu jadiin pilihan sebelum membeli foundation itu sendiri lho! Intip yuk!</p>
        </div>

        <div class="rekomendasi-list">
            <div class="kartu-rekomendasi">
                <img src="wardah.png" alt="image" height="160" width="190" />
                <p>Wardah</p>
            </div>
            <div class="kartu-rekomendasi">
                <img src="MO.png" alt="image" height="130" width="170" />
                <p>Make Over</p>
            </div>
            <div class="kartu-rekomendasi">
                <img src="emina-logo.jpg" alt="image" height="150" width="180" />
                <p>Emina</p>
            </div>
            <div class="kartu-rekomendasi">
                <img src="lt pro.png" alt="image" height="150" width="160" />
                <p>LT.Pro</p>
            </div>
        </div>
    </div>
</section>

<?php include_once("inc_footer.php") ?>