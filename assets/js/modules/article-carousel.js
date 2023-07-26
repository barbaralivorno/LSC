import Slider from 'hd-components/slider';

class ArticleCarousel {
  constructor() {
    this.setup();
  }

  setup() {
    $('.article-carousel').each((i, carousel) => {
      const $el = $(carousel);
      new Slider($el, {
        cellAlign: 'left',
        wrapAround: true,
        autoPlay: false,
        arrows: true,
        arrowsClass: 'article-carousel__slider-arrow',
      });
    });
  }
}
  
export default ArticleCarousel;