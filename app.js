/*

function nav1(){
    document.getElementById("link_nav").style.position = "fixed";
    document.getElementById("link_nav").style.backgroundColor = "#474747";
    document.getElementById("link_nav").classList.add("animated", "fadeInDown");
    
}

function nav2(){
    document.getElementById("link_nav").style.position = "absolute";
    document.getElementById("link_nav").style.backgroundColor = "transparent"
}

$('.m-nav-toggle').click(function(e){
    e.preventDefault();
    $('#Navbar').toggleClass('is-open');
})
*/
//menu transition js
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
            if (scroll > 0) {
          $(".navbar").addClass("navbar-scroll");
          }
            else{
            $(".navbar").removeClass("navbar-scroll");  	
        }
        if (scroll > 200) {
          $(".navbar").addClass("bg-primary");
        }
  
        else{
            $(".navbar").removeClass("bg-primary");  	
        }
    })
  })

  function moveToSelected(element) {

    if (element == "next") {
      var selected = $(".selected").next();
    } else if (element == "prev") {
      var selected = $(".selected").prev();
    } else {
      var selected = element;
    }
  
    var next = $(selected).next();
    var prev = $(selected).prev();
    var prevSecond = $(prev).prev();
    var nextSecond = $(next).next();
  
    $(selected).removeClass().addClass("selected");
  
    $(prev).removeClass().addClass("prev");
    $(next).removeClass().addClass("next");
  
    $(nextSecond).removeClass().addClass("nextRightSecond");
    $(prevSecond).removeClass().addClass("prevLeftSecond");
  
    $(nextSecond).nextAll().removeClass().addClass('hideRight');
    $(prevSecond).prevAll().removeClass().addClass('hideLeft');
  
  }
  
  // Eventos teclado
  $(document).keydown(function(e) {
      switch(e.which) {
          case 37: // left
          moveToSelected('prev');
          break;
  
          case 39: // right
          moveToSelected('next');
          break;
  
          default: return;
      }
      e.preventDefault();
  });
  
  $('#carousel div').click(function() {
    moveToSelected($(this));
  });
  
  $('#prev').click(function() {
    moveToSelected('prev');
  });
  
  $('#next').click(function() {
    moveToSelected('next');
  });


/*    (function () {
      var carousels = document.querySelectorAll('.js-product-carousel');

      [].forEach.call(carousels, function (carousel) {
        carouselize(carousel);
      });

    })();

    function carouselize(carousel) {
      var productList = carousel.querySelector('.js-product-list');
      var productListWidth = 0;
      var productListSteps = 0;
      var products = carousel.querySelectorAll('.product');
      var productAmount = 0;
      var productAmountVisible = 4;
      var carouselPrev = carousel.querySelector('.js-carousel-prev');
      var carouselNext = carousel.querySelector('.js-carousel-next');

      //Count all the products
      [].forEach.call(products, function (product) {
        productAmount++;
        productListWidth += 250;
        productList.style.width = productListWidth + "px";
      });

      carouselNext.onclick = function () {
        if (productListSteps < productAmount - productAmountVisible) {
          productListSteps++;
          moveProductList();
        }
      }
      carouselPrev.onclick = function () {
        if (productListSteps > 0) {
          productListSteps--;
          moveProductList();
        }
      }

      // This is a bit hacky, let me know if you find a better way to do this!
      // Move the carousels product-list
      function moveProductList() {
        productList.style.transform = "translateX(-" + 205 * productListSteps + "px)";
      }
    }