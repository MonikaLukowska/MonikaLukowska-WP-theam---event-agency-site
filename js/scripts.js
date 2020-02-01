import 'lazysizes';
import '../css/style.css';
import $ from 'jquery';
import slick from 'slick-carousel';
import lightbox from 'lightbox2';
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';
import TestimonialsSlider from './modules/TestimonialsSlider';
import PortfolioCarousel from './modules/PortfolioCarousel';
//import {Map} from './modules/Map'

if(module.hot) {
    module.hot.accept()
}

const mobileMenu = new MobileMenu();
const heroSlider = new HeroSlider();
const testimonialsSlider = new TestimonialsSlider();
const portfolioCarousel = new PortfolioCarousel();

lightbox.option({
    'albumLabel': "Zdjęcie %1 z %2"
   })

// document.addEventListener("DOMContentLoaded", function() {
//   let mapElement = document.getElementById('map');

//   Map.loadGoogleMapsApi().then(function(googleMaps) {
//     Map.createMap(googleMaps, mapElement);
//   });
  
// });
