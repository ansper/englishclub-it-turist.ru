let slideIndex = 0;

function showSlide(n) {
    const slides = document.getElementsByClassName("slide");
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("slide__active");
        slides[i].classList.remove('fade-in');
    }
    slides[slideIndex].classList.add("slide__active");
    setTimeout(() => {
        slides[slideIndex].classList.add('fade-in');
    }, 100);
}

function nextSlide() {
    showSlide(++slideIndex);
}

function prevSlide() {
    showSlide(--slideIndex);
}

// Показываем первый слайд по умолчанию
showSlide(slideIndex);

let reviewSlideIndex = 0;

function reviewShowSlide(n) {
    const reviewsSlides = document.getElementsByClassName("reviews__slide");
    if (n >= reviewsSlides.length) {
        reviewSlideIndex = 0;
    } else if (n < 0) {
        reviewSlideIndex = reviewsSlides.length - 1;
    }
    for (let i = 0; i < reviewsSlides.length; i++) {
        reviewsSlides[i].classList.remove("slide__active");
        reviewsSlides[i].classList.remove('fade-in');
    }
    reviewsSlides[reviewSlideIndex].classList.add("slide__active");
    setTimeout(() => {
        reviewsSlides[reviewSlideIndex].classList.add('fade-in');
    }, 100);
}

function reviewNextSlide() {
    reviewShowSlide(++reviewSlideIndex);
}

function reviewPrevSlide() {
    reviewShowSlide(--reviewSlideIndex);
}

// Показываем первый слайд по умолчанию
reviewShowSlide(reviewSlideIndex);