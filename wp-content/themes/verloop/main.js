jQuery(function ($) {
  jQuery(document).ready(function ($) {

    handleFormSubmission();

    // Slider variables
    var sliderContainer = $(".slider-container");
    var sliderItems = $(".slider-item");
    var sliderCount = sliderItems.length;
    var sliderWidth = sliderContainer.width();
    var slideIndexf = 0;
    var slideWidth = sliderItems.outerWidth(true);
    var slideVisibleCount = Math.floor(sliderWidth / slideWidth);
    var slideTotalWidth = slideWidth * sliderCount;

    // Set initial slider container width
    sliderContainer.width(slideTotalWidth);
    // Slide next
    function slideNext() {
      if (slideIndexf >= sliderCount - slideVisibleCount) {
        slideIndexf = 0;
      } else {
        slideIndexf++;
      }
      slideToIndex();
      console.log("next");
    }

    // Slide previous
    function slidePrev() {
      if (slideIndexf <= 0) {
        slideIndexf = sliderCount - slideVisibleCount;
      } else {
        slideIndexf--;
      }
      slideToIndex();
      console.log("prev");
    }

    // Slide to specific index
    function slideToIndex() {
      var slidePosition = slideIndexf * -slideWidth;
      sliderContainer.css("transform", "translateX(" + slidePosition + "px)");
    }

    // Slider navigation buttons
    $(".prev-button").on("click", slidePrev);
    $(".next-button").on("click", slideNext);

    // featured section

    var sliderContainerfrd = $(".slider-container-frd");
    var sliderItemsfrd = $(".slider-item-frd");
    var sliderCountfrd = sliderItemsfrd.length;
    var sliderWidthfrd = sliderContainerfrd.width();
    var slideIndexfrd = 0;
    var slideWidthfrd = sliderItemsfrd.outerWidth(true);
    var slideVisibleCountfrd = Math.floor(sliderWidthfrd / slideWidthfrd);
    var slideTotalWidthfrd = slideWidthfrd * sliderCountfrd;

    // Set initial slider container width
    sliderContainerfrd.width(slideTotalWidthfrd);
    // Slide next
    function slideNextfrd() {
      if (slideIndexfrd >= sliderCountfrd - slideVisibleCountfrd) {
        slideIndexfrd = 0;
      } else {
        slideIndexfrd++;
      }
      slideToIndexfrd();
    }

    // Slide previous
    function slidePrevfrd() {
      if (slideIndexfrd <= 0) {
        slideIndexfrd = sliderCountfrd - slideVisibleCountfrd;
      } else {
        slideIndexfrd--;
      }
      slideToIndexfrd();
    }

    // Slide to specific index
    function slideToIndexfrd() {
      var slidePositionfrd = slideIndexfrd * -slideWidthfrd;
      sliderContainerfrd.css(
        "transform",
        "translateX(" + slidePositionfrd + "px)"
      );
    }

    // Slider navigation buttons
    $(".prev-button-frd").on("click", slidePrevfrd);
    $(".next-button-frd").on("click", slideNextfrd);

    // Testimonials section //

    var sliderContainertest = $(".slider-container-test");
    var sliderItemstest = $(".slider-item-test");
    var sliderCounttest = sliderItemstest.length;
    var sliderWidthtest = sliderContainertest.width();
    var slideIndextest = 0;
    var slideWidthtest = sliderItemstest.outerWidth(true);
    var slideVisibleCounttest = Math.floor(sliderWidthtest / slideWidthtest);
    var slideTotalWidthtest = slideWidthtest * sliderCounttest;

    // Set initial slider container width
    sliderContainertest.width(slideTotalWidthtest);
    // Slide next
    function slideNexttest() {
      if (slideIndextest >= sliderCounttest - slideVisibleCounttest) {
        slideIndextest = 0;
      } else {
        slideIndextest++;
      }
      slideToIndextest();
    }

    // Slide previous
    function slidePrevtest() {
      if (slideIndextest <= 0) {
        slideIndextest = sliderCounttest - slideVisibleCounttest;
      } else {
        slideIndextest--;
      }
      slideToIndextest();
    }

    // Slide to specific index
    function slideToIndextest() {
      var slidePositiontest = slideIndextest * -slideWidthtest;
      sliderContainertest.css(
        "transform",
        "translateX(" + slidePositiontest + "px)"
      );
    }

    // Slider navigation buttons
    $(".prev-button-test").on("click", slidePrevtest);
    $(".next-button-test").on("click", slideNexttest);


    // price button in books filter page ->//

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;
    sliderOne.addEventListener('input', slideOne);
    sliderTwo.addEventListener('input', slideTwo);
    function slideOne() {
      if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
      }
      displayValOne.textContent = sliderOne.value;
      fillColor();
    }
    function slideTwo() {
      if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
      }
      displayValTwo.textContent = sliderTwo.value;
      fillColor();
    }
    function fillColor() {
      percent1 = (sliderOne.value / sliderMaxValue) * 100;
      percent2 = (sliderTwo.value / sliderMaxValue) * 100;
      sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #8d28ad ${percent1}% , #8d28ad ${percent2}%, #dadae5 ${percent2}%)`;
    }
    let pricefunc = document.querySelector('.price-function');
    pricefunc.addEventListener("click", () => {
      slideOne();
      slideTwo();
    })
    // filter drop down button

    let dropdowns = document.querySelectorAll('.drop-filter-btn');

    dropdowns.forEach((dropdown) =>
      dropdown.addEventListener("click", () => {
        dropdown.nextElementSibling.classList.toggle('active')
        dropdown.classList.toggle('active')
      })
    );



    function handleFormSubmission() {
      var formData = $('.filter-form').serialize();
      console.log(formData);

      $.ajax({
        url: ajax_object.ajax_url,
        type: 'post',
        data: {
          action: 'filter_posts',
          formData: formData,
        },
        success: function (response) {
          $('.book-list').html(response);
          console.log(response);
        },
        error: function (response) {
          console.warn(response);
        }
      });
    }

    // Call the function on form submission

    $('.filter-form').on('submit', function (e) {
      e.preventDefault();
      handleFormSubmission();
    });
    $('.filter-form').on('submit', function (e) {
      e.preventDefault();
      handleFormSubmission();
    });

  });
})

const hammenu = document.querySelector('.ham-menu');
const navmenu = document.querySelector('.nav-menu');

hammenu.addEventListener("click", () => {
  navmenu.classList.toggle('active');
})

const filtermenubtn = document.querySelector('.filter-responsive-btn');
const filterform = document.querySelector('.filter-form');
const filtersubmitbtn = document.querySelector('.refine-search');


filtermenubtn.addEventListener("click", () => {
  filterform.classList.toggle('active');
})
filtersubmitbtn.addEventListener("click", () => {
  if(filterform.classList.contains('active')){
    filterform.classList.remove('active')
  }else{
    filterform.classList.add('active')
  }
})