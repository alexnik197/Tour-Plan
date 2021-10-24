$(document).ready(function () {
    const hotelSlider = new Swiper('.hotel-slider', {
        // Optional parameters
        loop: true,
    
        // Navigation arrows
        navigation: {
          nextEl: '.hotel-slider__button--next',
          prevEl: '.hotel-slider__button--prev',
        },
        effect: "slide",
    });
    
    const reviewsSlider = new Swiper('.reviews-slider', {
        // Optional parameters
        loop: true,
    
        // Navigation arrows
        navigation: {
          nextEl: '.reviews-slider__button--next',
          prevEl: '.reviews-slider__button--prev',
        },
        effect: "slide",
    });
    
    let menuButton = $(".menu-button");
    menuButton.on('click', function(){
      console.log("Клик по кнопке меню");
      $(".navbar-bottom").toggleClass("navbar-bottom--visible");
    });

    let modalButton = $("[data-toggle=modal]");
    let closeModalButton = $(".modal__close");
    modalButton.on('click', openModal)
    closeModalButton.on("click", closeModal);

    function openModal(){
      let modalOverlay = $(".modal__overlay");
      let modalDialog = $(".modal__dialog");
      modalOverlay.addClass("modal__overlay--visible");
      modalDialog.addClass("modal__dialog--visible");
    }

      function closeModal(event) {
        event.preventDefault();
        let modalOverlay = $(".modal__overlay");
        let modalDialog = $(".modal__dialog");
        modalOverlay.removeClass("modal__overlay--visible");
        modalDialog.removeClass("modal__dialog--visible");
      }
  AOS.init();
});