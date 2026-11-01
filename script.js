const audio = new Audio("music.mp3");

window.onload = function () {
  audio.play();
};
AOS.init({
  duration: 1400,
  offset: 80,
  easing: "ease-in-out",
  once: false,
});

document.addEventListener("DOMContentLoaded", function () {
  // TANGGAL ACARA
  const weddingDate = new Date("2026-07-05T08:00:00").getTime();

  // UPDATE SETIAP 1 DETIK
  const timer = setInterval(function () {
    const now = new Date().getTime();

    const distance = weddingDate - now;

    // HITUNG
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));

    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
    );

    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // TAMPILKAN
    document.getElementById("days").innerHTML = days;

    document.getElementById("hours").innerHTML = hours;

    document.getElementById("minutes").innerHTML = minutes;

    document.getElementById("seconds").innerHTML = seconds;

    // JIKA HABIS
    if (distance < 0) {
      clearInterval(timer);

      document.querySelector(".countdown").innerHTML =
        "<h3>Acara Sedang Berlangsung</h3>";
    }
  }, 1000);
});

// COPY REKENING
function copyRekening(id) {
  const rekening = document.getElementById(id).innerText;

  navigator.clipboard.writeText(rekening);

  alert("Nomor rekening berhasil disalin 😊");
}

// MUSIC
const music = document.getElementById("music");

const musicBtn = document.getElementById("music-btn");

const icon = musicBtn.querySelector("i");

let isPlaying = false;

// BUTTON CLICK
musicBtn.addEventListener("click", function () {
  // JIKA BELUM PLAY
  if (!isPlaying) {
    music.play();

    icon.classList.remove("fa-play");

    icon.classList.add("fa-pause");

    isPlaying = true;
  }

  // JIKA SEDANG PLAY
  else {
    music.pause();

    icon.classList.remove("fa-pause");

    icon.classList.add("fa-play");

    isPlaying = false;
  }
});
