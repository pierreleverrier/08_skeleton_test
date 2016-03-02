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

</div>  
</body>
</html>