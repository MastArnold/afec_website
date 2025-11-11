import './bootstrap';
import './homeMoveHeroCard';

import Alpine from 'alpinejs';

import AOS from 'aos';
import 'aos/dist/aos.css';

window.Alpine = Alpine;

Alpine.start();

AOS.init({
  duration: 800,     // durée de l'animation
  once: true,        // ne s'anime qu'une fois
  offset: 0,       // distance de déclenchement
});
