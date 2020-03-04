import 'lazysizes';
import '../css/style.css';
import $ from 'jquery';
import lightbox from 'lightbox2';
import slick from 'slick-carousel';
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';
import TestimonialsSlider from './modules/TestimonialsSlider';
import PortfolioCarousel from './modules/PortfolioCarousel';
import TopButton from './modules/TopButton';
import Spinner from './modules/Spinner';
import Cookies from './modules/Cookies';

//import {Map} from './modules/Map'

if(module.hot) {
    module.hot.accept()
}

const mobileMenu = new MobileMenu();
const heroSlider = new HeroSlider();
const testimonialsSlider = new TestimonialsSlider();
const portfolioCarousel = new PortfolioCarousel();
const topButton = new TopButton();
const spinner = new Spinner();
const cookies = new Cookies();


AOS.init({
     duration: 1200,
});
lightbox.option({
    'albumLabel': "Zdjęcie %1 z %2"
   })

// document.addEventListener("DOMContentLoaded", function() {
//   let mapElement = document.getElementById('map');

//   Map.loadGoogleMapsApi().then(function(googleMaps) {
//     Map.createMap(googleMaps, mapElement);
//   });
  
// });
