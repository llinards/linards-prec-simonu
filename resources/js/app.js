import './bootstrap';

import '@splidejs/splide/css';
import Splide from '@splidejs/splide';

import 'fslightbox';

import Alpine from 'alpinejs';

import 'flowbite';

import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

window.Splide = Splide;

window.FilePond = FilePond;
window.FilePondPluginFileValidateSize = FilePondPluginFileValidateSize;
window.FilePondPluginFileValidateType = FilePondPluginFileValidateType;
window.FilePondPluginImagePreview = FilePondPluginImagePreview;

window.Alpine = Alpine;
Alpine.start();
