const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
  };
  // To create animation effect while scrolling
  ScrollReveal().reveal(".hero-Right img", {
    ...scrollRevealOption,
    origin: "right",
  });
  ScrollReveal().reveal(".hero-content h1", {
    ...scrollRevealOption,
    delay: 500,
  });
  ScrollReveal().reveal(".hero-content p", {
    ...scrollRevealOption,
    delay: 1000,
  });
  ScrollReveal().reveal(".hero-content button", {
    ...scrollRevealOption,
    delay: 1500,
  });
  ScrollReveal().reveal(".about-Zone h2", {
    ...scrollRevealOption,
    delay: 500,
  });
  ScrollReveal().reveal(".about-Zone p", {
    ...scrollRevealOption,
    delay: 1000,
  });
  ScrollReveal().reveal(".vision", {
    ...scrollRevealOption,
    delay: 1500,
  });
  ScrollReveal().reveal(".mission", {
    ...scrollRevealOption,
    delay: 2000,
  });
  // for the animation effect of mentor section
  const swiper = new Swiper(".mentor-swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 1,
      },
    },
  });
  // for menu bars 
  function toggleMenu() {
    document.querySelector('.nav-Headings').classList.toggle('active');
  }