 <body tabIndex=0>
  <main>
    <!-- Background and Image -->
      <section class="cover">
        <div class="background-img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/labyrinth-grey-01.png" />
        </div> 
        <div class="content-wrapper-cover"> 
            <a href="main/index.html">
              <nav class="menu">
                <div class="menu-lines one"></div>
                <div class="menu-lines two"></div>
                <div class="menu-lines three"></div>
              </nav>
            </a>
            <div class="cover-parent"> 
              <div class="cover-main">
                <h1 class="cover-title"><em>Hi, I'm</em> Beagle</h1>
                <p class="cover-text">A Front-End Web Developer</br>
                    Focusing on responsive, high functioning websites</p>
              </div>
            </div>  
        </div>
        <!-- Title and Intro -->
      </section>
  </main>



  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>