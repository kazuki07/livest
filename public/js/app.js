const hour = document.getElementById("hour");
const minute = document.getElementById("minute");
const seconds = document.getElementById("seconds");

const clock = setInterval(function time() {
    const dateNow = new Date();
    let hr = dateNow.getHours();
    let min = dateNow.getMinutes();
    let sec = dateNow.getSeconds();

    hr = hr.toString().padStart(2, "0");
    min = min.toString().padStart(2, "0");
    sec = sec.toString().padStart(2, "0");

    const timeString = `${hr}:${min}:${sec}`;
    hour.textContent = hr;
    minute.textContent = min;
    seconds.textContent = sec;
}, 1000);

  const slides = document.querySelectorAll('.slide');
  let currentSlideIndex = 0;

  function moveSlide() {
    const activeSlide = slides[currentSlideIndex];
    activeSlide.classList.remove('translate-x-0');
    activeSlide.classList.add('-translate-x-full');

    currentSlideIndex = (currentSlideIndex + 1) % slides.length;

    const nextSlide = slides[currentSlideIndex];
    nextSlide.classList.remove('translate-x-full');
    nextSlide.classList.add('translate-x-0');
  }

  // Ganti slide setiap 3 detik (3000 milidetik)
  setInterval(moveSlide, 3000);
