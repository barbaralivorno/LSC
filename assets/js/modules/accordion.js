import HDAccordion from 'hd-components/accordion';

class Accordion {
  constructor() {
    this.setup();
  }

  setup() {
    const $accordions = $('.accordion');
    let accordions = [];
    $accordions.each((i, item) => {
      accordions.push(new HDAccordion(item, {
        togglerClass: 'accordion__item-title',
        collapsibleClass: 'accordion__item-content',
        itemClass: 'accordion__item',
      }));
    });
  }
}

export default Accordion;