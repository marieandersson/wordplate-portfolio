// import Swiper JS
import Swiper from 'swiper/swiper-bundle.min.js';
// import Swiper styles
import 'swiper/swiper-bundle.css';

const initializeSwiper = (block) => {
  const blockContainer = block[0] || block;
  if (!blockContainer) return;
  // Get swiper container within current block (there could be several on the same page)
  const swiperContainer = blockContainer.querySelector('.swiper-container');
  // Create Swiper
  const swiper = new Swiper(swiperContainer, {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}
// Wait for the DOM to be ready
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('.image-carousel-block').forEach(block => {
    // Inititialize frontend swipers
    initializeSwiper(block);
  });
});

if (window.acf) {
    // Inititialize admin swipers
    window.acf.addAction('render_block_preview/type=image-carousel', initializeSwiper);
}
