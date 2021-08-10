const init = () => {
  heroSlider();
  featuredSlider();
  logosSlider();
};

const heroSlider = () => {
  const $target = $('.js-hero-slider');

  renderSlider($target, {
    arrows: false,
    autoplay: true,
    dots: true,
    dotsClass: 'slick-dots slick-dots--hero',
    fade: true,
    rows: 0,
  });
};

const featuredSlider = () => {
  const $target = $('.js-featured-slider');
  const $parent = $target.parent();
  const $prevArrow = $parent.find('.js-slider-prev');
  const $nextArrow = $parent.find('.js-slider-next');

  renderSlider($target, {
    nextArrow: $nextArrow,
    prevArrow: $prevArrow,
    rows: 0,
    slidesToShow: 3,
  });
};

const logosSlider = () => {
  const $target = $('.js-logos-slider');
  const $parent = $target.parent();
  const $prevArrow = $parent.find('.js-slider-prev');
  const $nextArrow = $parent.find('.js-slider-next');

  renderSlider($target, {
    nextArrow: $nextArrow,
    prevArrow: $prevArrow,
    rows: 0,
    slidesToShow: 4,
  });
};

const renderSlider = (target, options = {}) => {
  if (!target || !target.length) return;

  return target.slick(options);
};

export default {
  init,
};
