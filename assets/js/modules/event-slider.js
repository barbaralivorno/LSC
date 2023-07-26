import Slider from 'hd-components/slider';

class EventSlider {
  constructor() {
    this.setup();
  }

  setup() {
    $('.event-slider').each((i, carousel) => {
      const $el = $(carousel);
      new Slider($el, {
        cellAlign: 'left',
        wrapAround: true,
        autoPlay: false,
        arrows: true,
        arrowsClass: 'event-slider__slider-arrow',
      });
    });
  }
}
  
export default EventSlider;