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
              typeSpeed: 75,
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
  <script src="js/fadeInScroll.jQuery.js"></script>

  <script>
    jQuery(document).ready(function(){
      $('.fadeIn').fadeInScroll({
        minDistance:  80 * $(window).height() / 100
        });
    });
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
<div class="animsition">