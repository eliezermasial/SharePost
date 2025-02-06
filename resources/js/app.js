import './bootstrap';

import Alpine from 'alpinejs';

import 'izitoast/dist/css/iziToast.min.css'; // Import du CSS

import iziToast from 'izitoast'; // Import de la librairie JS

window.Alpine = Alpine;

Alpine.start();

window.iziToast = iziToast; // On l'ajoute à l'objet global window