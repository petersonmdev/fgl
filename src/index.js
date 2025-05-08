import 'jquery';
import $ from 'jquery';
import 'letteringjs';
import 'jquery-zoom';
import '@popperjs/core';
import 'bootstrap';
import 'slick-carousel';
import Swiper from 'swiper';
import '@fancyapps/fancybox';
import GLightbox from 'glightbox';
import '../public/assets/js/script';
import './style.css';

const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
const swiper = new Swiper('.hero-swiper',{
    centeredSlides: true,
    autoplay: {
        delay: 100,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    on: {
    autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
    }
});
const lightbox = GLightbox({ selector: '.glightbox' });