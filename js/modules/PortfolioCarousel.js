import $ from 'jquery';

class PortfolioCarousel{
  constructor() {
    this.el = $(".portfolio__carousel");
    this.initSlider();
    this.elOffer = $(".portfolio__carousel--offer");
  }

  initSlider() {
    this.el.slick({
    slidesToShow:3,
      autoplay: true,
      lazyload:true,
      nextArrow: '<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slick-next.png" />',
      prevArrow: '<i class="fas fa-chevron-left"></i>',
      dots: false,
      responsive:[
        {
        breakpoint:900,
        settings:{
            slidesToShow:2,
            dots: false
            }
      },
        {
        breakpoint:530,
        settings:{
          slidesToShow:1,
           arrows:false,
           dots:true
          }
      }
      ]
    });
  }
}

export default PortfolioCarousel;