<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Pierre Leverrier | Freelance Graphic Designer</title>
  <meta name="description" content="Pierre Leverrier, graphic designer, based in France, currently looking for a job in an agency or some freelance work.">
  <meta name="keywords" content="Pierre Leverrier Graphic Webdesign Digital Design UX UI France Normandy Bayeux Caen">
  <meta name="author" content="Pierre Leverrier">

  <!-- Social
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta property="og:site_name" content="Pierre Leverrier Portfolio - French Graphic Designer ">
  <meta property="og:title"  />
  <meta property="og:url" content="http://leverrierpierre.fr/" />
  <meta property="og:type" content="website" />
  <meta property="og:description"  />
  <meta property="og:image"  />

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animsition.min.css" />
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/menu.css">

  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/animsition.min.js"></script>
    <script>
        $(document).ready(function() {
        $(".animsition").animsition({
          inClass: 'fade-in',
          outClass: 'fade-out',
          inDuration: 1500,
          outDuration: 800,
          linkElement: '.animsition-link',
          // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
          loading: true,
          loadingParentElement: 'body', //animsition wrapper element
          loadingClass: 'animsition-loading',
          loadingInner: '', // e.g '<img src="loading.svg" />'
          timeout: false,
          timeoutCountdown: 5333,
          onLoadEvent: true,
          browser: [ 'animation-duration', '-webkit-animation-duration'],
          // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
          // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
          overlay : false,
          overlayClass : 'animsition-overlay-slide',
          overlayParentElement : 'body',
          transition: function(url){ window.location.href = url; }
        });
      });
    </script>
  <script type="text/javascript" src="js/typed.js"></script>
  <script>
      $(function(){

          $("#typed").typed({
              // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
              stringsElement: $('#typed-strings'),
              typeSpeed: 100,
              backDelay: 300,
              loop: false,
              contentType: 'html', // or text
              // defaults to false for infinite loop
              loopCount: false,
              callback: function(){ foo(); },
              resetCallback: function() { newTyped(); }
          });

          $(".reset").click(function(){
              $("#typed").typed('reset');
          });

      });

      function newTyped(){ /* A new typed object */ }

      function foo(){ console.log("Callback"); }
  </script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <!-- Analytics
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39402174-2', 'leverrierpierre.fr');
    ga('send', 'pageview');
  </script>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="animsition section home">

    
    <video autoplay loop muted id="bgvid">
      <source src="video/nasa1.mp4" type="video/mp4"/>
    </video>
    


    <nav id="bt-menu" class="bt-menu">
    <div class="black-block">
      <a href="index.php">
          <img src="img/logo.png" alt="Logo" />
      </a>
    </div>
    <a href="#" class="bt-menu-trigger"><span>MENU</span></a>
      <ul>
        <li><a href="#"><i class="fa fa-angle-right"></i> Anecgones</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i> TV App</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i> L'Exception</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i> Creative Breakfast</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i> Lyon BD</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i> INSA</a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> About me</a></li>
      </ul>
    </nav>


    <div class="row">
      <div class="twelve columns">
        <div class="type-wrap">

           <div id="typed-strings">
              <p id="fittext">Hello there <i class="fa fa-hand-peace-o"></i><br />My name is <strong>Pierre</strong>.<br />I'm a <strong>graphic designer</strong>.<br />Thanks for stopping by ! <i class="fa fa-smile-o"></i></p>
            </div>
            <span id="typed"></span>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <a href="#0" class="arrow-wrap bounce"><i class="fa fa-bomb"></i></a>
      </div>
    </div>


    <a href="mailto:leverrier.pierre@gmail.com" class="button-hire button--nina animsition-link" data-text="Hire me →">
      <span>L</span><span>e</span><span>t</span><span>'</span><span>s</span><span>&nbsp;</span><span>g</span><span>o</span><span>&nbsp;</span><span>!</span>
    </a>

  </div>





<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/classie.js"></script>
  <script src="js/borderMenu.js"></script>
  <script src="js/modernizr.custom.js"></script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
  <script src="js/velocity.min.js"></script>
  <script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>