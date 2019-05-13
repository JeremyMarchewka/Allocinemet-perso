<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>AllocineMet</title>

  <link href="https://fonts.googleapis.com/css?family=Anton|Gloria+Hallelujah|Righteous" rel="stylesheet">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/animate.css">


</head>


<body>

<?php
    require_once 'database.php';
    
    ?>

  <?php include('nav.php');?>

  <div class="main_title zoomIn animated">
    <span>ALLOCINE<span>MET</span></span>
  </div>
  <div class="head">
    <div class="sp-container">
      <div class="sp-content">
        <div class="sp-globe"></div>
        <h2 class="frame-1">VOD ILLIMITES</h2>
        <h2 class="frame-2">POUR TOUTE LA FAMILLE</h2>
        <h2 class="frame-3">3 mois offerts*</h2>
        <h2 class="frame-5">
          <span>CINEMA </span>
          <span> AT </span>
          <span> HOME</span>
        </h2>
        <a class="sp-circle-link" href="https://nick.mkrtchyan.ga">by Nick</a>
      </div>
    </div>


<div class="slideshow">
	<ul class="slider">
		<li>
			<img src="img/50.jpg" alt="" title="">
		</li>		
		<li>
			<img src="img/51.jpg" alt="" title="">
		</li>		
		<li>
			<img src="img/52.jpg" alt="" title="">
		</li>		
	</ul>
	
	<ol class="pagination"></ol>
	
	<div class="left">
		<i class="fa fa-chevron-left"></i>
	</div>
	
	<div class="right">
		<i class="fa fa-chevron-right"></i>
	</div>
</div>


<?php
    require_once 'database.php';
    
    if(!$_SESSION['admin']) {
        header('location:login.php');
    }

    $req = $db->query('SELECT * FROM user');
    $users = $req->fetch();


    ?>


  </div>

  <div class="title2"><img src="img/decogcutblck.png" id="deco">Nouveautés<img src="img/decodcutblck.png" id="deco">
  </div>
  <div class="row justify-content-md-center">
    <hr class="col-10" style="background-color: red" margin-left="auto">
  </div>

  <div id="carousel">

    <div class="hideLeft">
      <img src="img/10.jpg"><br />
      <a href="allo_films.php"><span>Le seigneur des anneaux</span></a>
    </div>

    <div class="hideLeft">
      <img src="img/8.jpg"><br />
      <a href="allo_films.php"><span>Le parrain</span></a>
    </div>

    <div class="hideLeft">
      <img src="img/1.jpg"><br />
      <a href="allo_films.php"><span>Avengers Endgame</span></a>
    </div>

    <div class="prevLeftSecond">
      <img src="img/2.jpg"><br />
      <a href="allo_films.php"><span>Get out</span></a>
    </div>

    <div class="prev">
      <img src="img/3.jpg"><br />
      <a href="allo_films.php"><span>The dark knight</span></a>
    </div>

    <div class="selected">
      <img src="img/4.jpg"><br />
      <a href="allo_films.php"><span>Interstellar</span></a>
    </div>

    <div class="next">
      <img src="img/5.jpg"><br />
      <a href="allo_films.php"><span>Zootopie</span></a>
    </div>

    <div class="nextRightSecond">
      <img src="img/6.jpg"><br />
      <a href="allo_films.php"><span>Ready player one</span></a>
    </div>

    <div class="hideRight">
      <img src="img/7.jpg"><br />
      <a href="allo_films.php"><span>Forrest Gump</span></a>
    </div>

    <div class="hideRight">
      <img src="img/9.jpg"><br />
      <a href="allo_films.php"><span>Django</span></a>
    </div>

    <div class="hideRight">
      <img src="img/11.jpg"><br />
      <a href="allo_films.php"><span>Pulp fiction</span></a>
    </div>

  </div>

  <div class="buttons">
    <a id="prev">
      <</a> <a id="next">>
    </a>
  </div>


  <div class="row justify-content-md-center">
    <hr class="col-10" style="background-color: red" margin-left="auto">
  </div>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/sofa.jpg"></div>

  <div class="pres">
    <div class="title2"><img src="img/decogcutblck.png" id="deco">Allocinemet<img src="img/decodcutblck.png" id="deco">
    </div>
    <div class="row justify-content-md-center">
      <hr class="col-10" style="background-color: red" margin-left="auto">
    </div>
    <div class="pres_content" id="car">
      <div class="img_parag">
        <img src="img/met.jpg" class="img" alt="Responsive image">
      </div>
      <div class="cont">
        <h2 class="cont_title">Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
          culpa
          distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
          beatae
          esse? Nulla, totam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
          eligendi
          repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
          quis?</p>

      </div>
    </div>
  </div>

  <?php include('footer.php');?>

  <script>
    $(document).ready(function () {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 400) {
          $(".navbar").addClass("navbar-scroll");
        } else {
          $(".navbar").removeClass("navbar-scroll");
        }
        if (scroll > 400) {
          $(".navbar").addClass("bg-primary");
        } else {
          $(".navbar").removeClass("bg-primary");
        }
      })
    })
  </script>


<script>
$(document).ready(function() {
	

	let imgItems = $('.slider li').length;
	let imgPos = 1;
	

	for (let i = 0; i < imgItems; i++) {
		$('.pagination').append('<li><i class="fa fa-circle"></i></li>');	
	}	
	

	$('.slider li').hide();
	$('.slider li:first').show();
	
	$('.pagination li:first').css({
		'color': '#cd6e2e'
	});
	
	$('.pagination li').on('click', pagination);
	$('.right i').on('click', nextSlider);
	$('.left i').on('click', prevSlider);
	
	let sliderAuto = setInterval(function() {
		nextSlider();
	}, 5000);
	
	function pagination() {
		let paginationPos = $(this).index() + 1;
		$('.slider li').hide();
		$(`.slider li:nth-child(${paginationPos})`).fadeIn(1000);
		$('.pagination li').css({
			'color': '#858585'
		})
		$(this).css({
			'color': '#cd6e2e'
		});
		imgPos = paginationPos;
	}
	
	function nextSlider() {
		imgPos >= imgItems ? imgPos = 1 : imgPos++;
		$('.pagination li').css({
			'color': '#858585'
		});
		$(`.pagination li:nth-child(${imgPos})`).css({
			'color': '#cd6e2e'
		});

		$('.slider li').hide();
		$(`.slider li:nth-child(${imgPos})`).fadeIn();
	}
	
	function prevSlider() {
		imgPos <= 1 ? imgPos = imgItems : imgPos--;
		$('.pagination li').css({
			'color': '#858585'
		});
		$(`.pagination li:nth-child(${imgPos})`).css({
			'color': '#cd6e2e'
		});
		$('.slider li').hide();
		$(`.slider li:nth-child(${imgPos})`).fadeIn(1000);
	}
	
	$('.left i, .right i').on('click', function() {
		clearInterval(sliderAuto);
	});

	$(document).on('keydown', function(e) {
		e.keyCode == 37 ? $('.left i').trigger('click') : '';
		e.keyCode == 39 ? $('.right i').trigger('click') : '';
	});
	
});
</script>




  <script>
    $(".slider").each(function () {
      s = $(this);

      //create dots and slides
      d = $("<div class='dots'>");
      s.find("div").each(function (i, e) {
        sl = $(this);
        src = sl.attr("src");
        sl.removeAttr("src");
        sl.css("background-image", "url('" + src + "')").addClass("slide");

        if (i == 0) {
          d.append("<span class='active'>");
          sl.addClass("active");
        } else if (i == 1) {
          d.append("<span class='next'>");
          sl.addClass("next");
        } else {
          d.append("<span>");
        }
      });
      s.append(d);

      //create fading slider
      setInterval(function () {
        s.find(".slide.active").fadeOut(function () {
          s.find(".slide.active").removeClass("active");
          s.find("span.active").removeClass("active");

          c = s.find(".slide.next");
          cD = s.find("span.next");
          c.removeClass("next").addClass("active");
          cD.removeClass("next").addClass("active");

          n = c.next();
          nD = cD.next();
          if (n.is(".slide")) {
            n.addClass("next");
            nD.addClass("next");
          } else {
            n = s.find(".slide:first-child");
            n.addClass("next");
            s.find(".dots span:first-child").addClass("next");
          }
          n.fadeIn();
        });
      }, 5000);

      //create responsive or static
      if (s.hasClass("responsive")) {
        resizeMe(s);
      } else {
        s.css('width', s.attr('width')).css('height', s.attr('height'));
        s.find('div').css('width', s.attr('width')).css('height', s.attr('height'));
      }
    });

    $(window).resize(function () {
      $(".slider").each(function () {
        s = $(this);
        if (s.hasClass("responsive")) {
          resizeMe(s);
        }
      });
    });

    function resizeMe(s) {
      w = s.parent().width();
      h = w / s.attr('width') * s.attr('height')
      s.css('width', w).css('height', h);
      s.find('.slide').css('width', w).css('height', h);
    }
  </script>

  <script>
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
    $(document).keydown(function (e) {
      switch (e.which) {
        case 37: // left
          moveToSelected('prev');
          break;

        case 39: // right
          moveToSelected('next');
          break;

        default:
          return;
      }
      e.preventDefault();
    });

    $('#carousel div').click(function () {
      moveToSelected($(this));
    });

    $('#prev').click(function () {
      moveToSelected('prev');
    });

    $('#next').click(function () {
      moveToSelected('next');
    });
  </script>



  <script src="js/parallax.min.js"></script>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>