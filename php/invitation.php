<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Undangan Pernikahan</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
</style>
<link rel="stylesheet" href="stylee.css">
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Cormorant+Garamond:wght@300;400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- Link FontAwesome untuk memunculkan ikon Instagram & Heart -->
  <link rel="stylesheet" href="https://cloudflare.com">

    <style>
    /* Background simulasi agar efek blur (backdrop-filter) terlihat jelas */
    body {
      background: linear-gradient(135deg, #f5efe6, #e4d5c3);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* CONTAINER UTAMA */
    .social-instagram {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 8px;
      width: 100%;
      max-width: 480px; /* Diperlebar sedikit agar muat tombol di samping */
      margin: 0 auto;
      padding: 0 10px;
      box-sizing: border-box;
    }

    /* CARD */
    .ig-card {
      flex: 1;
      min-width: 0;
      display: flex;
      align-items: center; /* Membuat semua elemen sejajar vertikal di tengah */
      justify-content: space-between; /* Mendorong tombol ke ujung kanan kartu */
      gap: 6px;
      padding: 8px 10px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.65);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: transform 0.3s;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .ig-card:hover {
      transform: translateY(-3px);
    }

    /* ICON INSTAGRAM */
    .ig-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: linear-gradient(135deg, #fff, #d4b08c);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-shrink: 0;
    }

    .ig-icon i {
      color: #6d4c41;
      font-size: 14px;
    }

    /* TEXT WRAPPER */
    .ig-card div {
      text-align: left;
      min-width: 0;
      flex: 1;
    }

    .ig-label {
      display: block;
      font-size: 9px;
      color: #7a6557;
      font-weight: 500;
    }

    .ig-card h4 {
      font-size: 11px;
      color: #8a5c46;
      margin: 1px 0 0 0;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    /* PERBAIKAN STYLE BUTTON KECIL (UKURAN PASTI & HORIZONTAL) */
    .ig-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 3px;
      
      /* Mengunci dimensi fisik tombol */
      width: 2cm;       /* Panjang 2cm */
      height: 0.5cm;    /* Tinggi/Lebar Tombol 0.5cm */
      box-sizing: border-box;
      flex-shrink: 0;   /* Mencegah tombol gepeng atau menyusut */
      
      font-size: 7px;   /* Disesuaikan agar teks muat dalam 2cm */
      font-weight: 600;
      color: #fff;
      background: linear-gradient(135deg, #b56b6b, #8a5c46);
      border-radius: 4px; /* Sudut kotak sedikit melengkung agar rapi di ukuran tipis */
      text-transform: uppercase;
      letter-spacing: 0.3px;
      white-space: nowrap;
      transition: background 0.3s, transform 0.2s;
    }

    .ig-card:hover .ig-btn {
      background: linear-gradient(135deg, #8a5c46, #b56b6b);
      transform: scale(1.03);
    }

    .ig-btn i {
      font-size: 6px;
    }

    /* LOVE ICON (DIVIDER) */
    .love-divider {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: linear-gradient(135deg, #fff, #d4b08c);
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      flex-shrink: 0;
    }

    .love-divider i {
      color: #b56b6b;
      font-size: 12px;
    }

    /* RESPONSIVE UNTUK PONSEL LAYAR KECIL */
    @media (max-width: 360px) {
      .social-instagram {
        gap: 4px;
      }
      .ig-card {
        padding: 6px 6px;
        gap: 4px;
      }
      .ig-card h4 {
        font-size: 9px;
      }
      .ig-label {
        font-size: 8px;
      }
      .ig-icon, .love-divider {
        width: 22px;
        height: 22px;
      }
      .ig-icon i, .love-divider i {
        font-size: 10px;
      }
      /* Dimensi cm dipertahankan, hanya font tombol disesuaikan jika meluap */
      .ig-btn {
        font-size: 6.5px;
      }
    }
</style>

</head>

<body>


<!-- AUDIO -->
<audio id="music" loop>

    <source src="music.mp3" type="audio/mp3">

</audio>

<!-- HOME -->
<section class="home">
    <!-- MUSIC BUTTON -->
<div class="music-box">

    <button id="music-btn">

        <i class="fa-solid fa-music"></i>

    </button>

</div>

<p data-aos="fade-up" style="font-family: 'Cairo', serif; font-size: 20px;">﷽</p>


    <h2   data-aos="fade-up">
    Assalamu’alaikum Wr. Wb.
</h2>

    <p data-aos="fade-up"
          data-aos-delay="200"
          data-aos-duration="2200">
        Dengan memohon rahmat dan ridho Allah SWT,
        kami mengundang Bapak/Ibu/Saudara/i
        untuk hadir pada acara pernikahan kami.
    </p>

</section>

<!-- COUPLE -->
<section class="couple" data-aos="fade-up"
          data-aos-delay="200"
          data-aos-duration="2200">

    <div class="card" data-aos="fade-up">

        <img src="bride.png">

        <h3 style="font-family: Agbalumo, system-ui; font-size: 20px;">St. Arabiah Tul Al Adawiah, S.Kep.</h3>

        <p style="font-size: 11px;">Putri dari: <br> Bapak Pasarai P. Japarang & Ibu Khadijah Mangapung</p>

    </div>

    <div style="font-size: 20px; font-family: Agbalumo, system-ui" >&</div>

    <div class="card">

        <img src="groom.png">

        <h3 style="font-family: Agbalumo, system-ui; font-size: 18px;">Muhammad Ilham Thamrin, S.Ag., M.Ag.</h3>

        <p style="font-size: 11px;">Putra dari: <br> Bapak Tamrin Tahir, S.Ag. & Ibu Kasmawati Mappa, S.E.</p>

    </div>

</section>

<!-- AYAT -->
<section class="ayat-section" data-aos="fade-up">

  <div class="ayat-card">

    <p class="mini-title">
      QS. Ar-Rum : 21
    </p>

    <div class="arabic-text" data-aos="fade-up">

      وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ
      اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ
      مَّوَدَّةً وَّرَحْمَةًۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ
      لِّقَوْمٍ يَّتَفَكَّرُوْنَ

    </div>

    <p class="ayat-translation" data-aos="fade-up">

      “Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia
      menciptakan pasangan-pasangan untukmu dari (jenis)
      dirimu sendiri agar kamu merasa tenteram kepadanya.
      Dia menjadikan di antaramu rasa cinta dan kasih sayang.
      Sesungguhnya pada yang demikian itu benar-benar terdapat
      tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.”

    </p>

    <div class="ayat-source">
      Ar-Rum · Ayat 21
    </div>

  </div>

</section>

<!-- EVENT -->
<section class="event">

    <h2 data-aos="fade-up">Wedding Event</h2>

    <div class="event-box" data-aos="fade-up">

        <h3>Akad Nikah</h3>

        <p>Minggu, 05 Juli 2026</p>
        <p>10.00 WITA</p>
        <p>Jl. Poros Labolong</p>

    </div>

    <div class="event-box"data-aos="fade-up">

        <h3>Resepsi</h3>

        <p>Minggu, 05 Juli 2026</p>
        <p>11.00 WITA</p>
        <p>Jl. Poros Labolong</p>

    </div>

</section>

<!-- COUNTDOWN -->
<section class="countdown-section">

    <div class="countdown-container" data-aos="fade-up">

        <p class="mini-title">
            Save The Date
        </p>

        <h2>
            5 Juli 2026
        </h2>

        <div class="countdown">

    <div class="count-box">
        <h4 id="days">0</h4>
        <span>Hari</span>
    </div>

    <div class="count-box">
        <h4 id="hours">0</h4>
        <span>Jam</span>
    </div>

    <div class="count-box">
        <h4 id="minutes">0</h4>
        <span>Menit</span>
    </div>

    <div class="count-box">
        <h4 id="seconds">0</h4>
        <span>Detik</span>
    </div>

</div>

    </div>

</section>


<!-- MAP -->
<section class="map-section" data-aos="fade-up">

    <div class="map-container">

        <p class="mini-title" data-aos="fade-up">
            Lokasi Acara
        </p>

        <h2 data-aos="fade-up">
            Wedding Venue
        </h2>

<div class="map-card" data-aos="fade-up">

<iframe
src="https://www.google.com/maps?q=-3.8014467,119.5626349&output=embed"
width="100%"
height="300"
style="border:0;"
allowfullscreen=""
loading="lazy">
</iframe>

</div>

<a 
href="https://maps.app.goo.gl/xpNqjsByRqhyYkw1A"
target="_blank"
class="map-button" data-aos="fade-up">

📍 Buka Google Maps

</a>

    </div>

</section>

<!-- GIFT -->
<section class="gift-section">

    <div class="gift-card" data-aos="fade-up">

        <p class="mini-title">
            Wedding Gift
        </p>

        <h3>
            Amplop Digital
        </h3>

        <!-- REKENING 1 -->
        <div class="gift-box">

            <div class="bank-icon">
                <i class="fa-solid fa-building-columns"></i>
            </div>

            <div class="gift-info">

                <h4>BNI</h4>

                <p id="rekening1">
                    1658279974
                </p>

                <small style="font-size: 10px;">
                    a.n St. Arabiah Tul Al Adawiah
                </small>

            </div>

        </div>

        <button
        class="gift-button"
        onclick="copyRekening('rekening1')">

            📋 Salin Rekening

        </button>

        <!-- REKENING 2 -->
        <div class="gift-box">

            <div class="bank-icon">
                <i class="fa-solid fa-building-columns"></i>
            </div>

            <div class="gift-info">

                <h4>BRI</h4>

                <p id="rekening2">
                    502001009092530
                </p>

                <small style="font-size: 10px;">
                    a.n Muhammad Ilham Thamrin
                </small>

            </div>

        </div>

        <button
        class="gift-button"
        onclick="copyRekening('rekening2')">

            📋 Salin Rekening

        </button>

    </div>

</section>

<!-- UCAPAN -->
<section class="wish-section">

    <div class="wish-card" data-aos="fade-up">

        <p class="mini-title">
            Wedding Wish
        </p>

        <h2>
            Ucapan & Doa
        </h2>

        <form
        action="simpan_ucapan.php"
        method="POST"
        class="wish-form">

            <!-- NAMA -->
            <div class="input-group">

                <i class="fa-solid fa-user"></i>

                <input
                type="text"
                name="nama"
                placeholder="Nama Anda"
                required>

            </div>

            <!-- KEHADIRAN -->
            <div class="input-group">

                <i class="fa-solid fa-heart"></i>

                <select
                name="kehadiran"
                required>

                    <option value="">
                        Konfirmasi Kehadiran
                    </option>

                    <option value="Hadir">
                        Hadir
                    </option>

                    <option value="Tidak Hadir">
                        Tidak Hadir
                    </option>

                </select>

            </div>

            <!-- PESAN -->
            <div class="input-group textarea-group">

                <i class="fa-solid fa-envelope"></i>

                <textarea
                name="pesan"
                placeholder="Tulis ucapan dan doa..."
                required></textarea>

            </div>

            <!-- BUTTON -->
            <button type="submit" class="wish-button">

                <i class="fa-solid fa-paper-plane"></i>

                Kirim Ucapan

            </button>

        </form>

    </div>

</section>

<!-- TAMPIL UCAPAN -->
<section class="list-ucapan">

    <div class="ucapan-card">

        <p class="mini-title">
            Wedding Wishes
        </p>

        <h2>
            Ucapan Tamu
        </h2>

        <?php

        include 'koneksi.php';

        $query = mysqli_query(
        $conn,
        "SELECT * FROM ucapan
        ORDER BY id DESC"
        );

        while($data = mysqli_fetch_array($query)){

        ?>

        <div class="ucapan-item">

            <div class="ucapan-header">

                <h3>
                    <?= htmlspecialchars($data['nama']); ?>
                </h3>

                <span class="
                <?= $data['kehadiran'] == 'Hadir'
                ? 'hadir'
                : 'tidak-hadir'; ?>
                ">

                    <?= htmlspecialchars($data['kehadiran']); ?>

                </span>

            </div>

            <p class="pesan">

                <?= htmlspecialchars($data['pesan']); ?>

            </p>
            <a
href="hapus_ucapan.php?id=<?= $data['id']; ?>"
class="hapus-btn"

onclick="return confirm(
'Yakin ingin menghapus ucapan ini?'
)">

🗑 Hapus

</a>

        </div>

        <?php } ?>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer" data-aos="fade-up">

    <div class="footer-overlay"></div>

    <div class="footer-content">

        <p class="mini-title">
            Thank You
        </p>

        <h3 style="font-size: 30px;">
            Arabiah & Ilham
        </h3>

        <p class="footer-text" style="font-size: 10px;">
            Terima kasih atas <br> doa dan restunya.
        </p>
<br>
           <div class="social-instagram">
  <!-- INSTAGRAM WANITA -->
  <a href="https://instagram.com/arabiah____" target="_blank" class="ig-card">
    <div class="ig-icon">
      <i class="fa-brands fa-instagram"></i>
    </div>
    <div>
      <span class="ig-label">Mempelai Wanita</span>
      <h4>@arabiah_</h4>
      <!-- TOMBOL KECIL TAMBAHAN -->
      <span class="ig-btn">Kunjungi <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
    </div>
  </a>

  <!-- LOVE -->
  <div class="love-divider">
    <i class="fa-solid fa-heart"></i>
  </div>

  <!-- INSTAGRAM PRIA -->
  <a href="https://instagram.com/ilhamthamrin_itham" target="_blank" class="ig-card">
    <div class="ig-icon">
      <i class="fa-brands fa-instagram"></i>
    </div>
    <div>
      <span class="ig-label">Mempelai Pria</span>
      <h4>@ilhamthamrin_itham</h4>
      <!-- TOMBOL KECIL TAMBAHAN -->
      <span class="ig-btn">Kunjungi <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
    </div>
  </a>

    </div>

</footer>

    <!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init({

    once:false,
    easing:'ease-in-out',

});

</script>

    <script src="script.js"></script>


</body>
</html>
