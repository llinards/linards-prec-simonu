import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';

import Splide from '@splidejs/splide';

window.Alpine = Alpine;

Alpine.start();

import '@splidejs/splide/css';

import 'fslightbox';

document.addEventListener('DOMContentLoaded', function () {
    const inspirationGallery = new Splide('#inspiration-gallery', {
        lazyLoad: 'sequential',
        pagination: false,
    });

    inspirationGallery.mount();
});
