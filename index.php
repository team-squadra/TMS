
<?php
session_start();
if (isset($_POST['ico']))
{
  if (isset($_SESSION['getadminname'])  )
  {
    header('location: admin/home.php');
  }
  else if (isset($_SESSION['getusername'])) 
  {
    header('location: user/home.php');
  }
  else
  {
    header('location: login/login.php');
  }
}
else
{

}

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>NSBM TMS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <style>
      #log-btn{
       width: 50%;
       height: 60px;
       letter-spacing: 4px;
       font-size: 25px; 
           }

       #banner #log-btn:hover {
        letter-spacing: 5px;
        color: white;
        font-weight: bolder; 
       }    
    </style>
  </head>
  <body >

    <!------------------------------------------------------------------------- Header ------------------------------------------------------------>
      <header id="header">
        <a class="logo" href="http://nsbm.lk/home">NSBM</a>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header>

    <!------------------------------------------------------------------------ Nav ---------------------------------------------------------------->
      <nav id="menu">
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="http://lmsnew.nsbm.lk/">LMS</a></li>
          
          <li><a name="ico">LOGIN</a></li>
        

        </ul>
      </nav>

    <!-------------------------------------------------------------------- Banner ------------------------------------------------------------------>
      <section id="banner">
        <div class="inner">
          <h1><b>T M S</b></h1>
          <p>Welcome To The Next Generation <a href="http://nsbm.lk/">NSBM</a> Timetable & Hall Management System.</p>
            <form action="" method="post">
        <button name="ico" id="log-btn" >LOGIN</button>

      </form>
        </div>
        <video autoplay loop muted playsinline src="images/nsbmv.mp4"></video>
      </section>

    <!----------------------------------------------------------------- Highlights -------------------------------------------------------------------->
      <section class="wrapper">
        <div class="inner">
          <header class="special">
            <h2>Important Links</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
          </header>
          <div class="highlights">
            <section>
              <div class="content">
                <header>
                  <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                  <h3>Important Contact Details</h3>
                </header>
                <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
              </div>
            </section>
            
            <section>
              <div class="content">
                <header>
                  <a href="http://lmsnew.nsbm.lk/" class="icon fa-files-o"><span class="label">Icon</span></a>
                  <h3>Learning Management System</h3>
                </header>
                <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
              </div>
            </section>
            <section>
              <div class="content">
                <header>
                  <a href="TRANSPORT_SERVICE.php" class="icon fa-line-chart"><span class="label">Icon</span></a>
                  <h3>Transport Service</h3>
                </header>
                <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
              </div>
            </section>
          </div>
        </div>
      </section>

    <!--------------------------------------------------------------------------------- CTA ---------------------------------------------------------->
      <section id="cta" class="wrapper">
        <div class="inner">
          <h2>Curabitur ullamcorper ultricies</h2>
          <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
        </div>
      </section>

    <!------------------------------------------------------------------------ Testimonials ------------------------------------------------------------>
      <section class="wrapper">
        <div class="inner">
          <header class="special">
            <h2>Faucibus consequat lorem</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
          </header>
          <div class="testimonials">
            <section>
              <div class="content">
                <blockquote>
                  <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </blockquote>
                <div class="author">
                  <div class="image">
                    <img src="images/picT.jpg" alt="" />
                  </div>
                  <p class="credit">- <strong>Thilini De Silva</strong> <span>Dean SOB.</span></p>
                </div>
              </div>
            </section>
            <section>
              <div class="content">
                <blockquote>
                  <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </blockquote>
                <div class="author">
                  <div class="image">
                    <img src="images/picC.jpg" alt="" />
                  </div>
                  <p class="credit">- <strong>Chaminda Wijesinghe</strong> <span>   Dean SOC.</span></p>
                </div>
              </div>
            </section>
            <section>
              <div class="content">
                <blockquote>
                  <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </blockquote>
                <div class="author">
                  <div class="image">
                    <img src="images/picCP.jpg" alt="" />
                  </div>
                  <p class="credit">- <strong>Chandana Perera</strong> <span>CEO - ABC Inc.</span></p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

    <!------------------------------------------------------------------------ Footer ------------------------------------------------>
      <footer id="footer">
        <div class="inner">
          <div class="content">
            <section>
              <h3>Accumsan montes viverra</h3>
              <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
            </section>
            <section>
              <h4>Sem turpis amet semper</h4>
              <ul class="alt">
                <li><a href="#">Dolor pulvinar sed etiam.</a></li>
                <li><a href="#">Etiam vel lorem sed amet.</a></li>
                <li><a href="#">Felis enim feugiat viverra.</a></li>
                <li><a href="#">Dolor pulvinar magna etiam.</a></li>
              </ul>
            </section>
            <section>
              <h4>Magna sed ipsum</h4>
              <ul class="plain">
                <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
              </ul>
            </section>
          </div>
          <div class="copyright">
            &copy; Untitled. Photos <a href="https://SQUADRA.co">SQUADRA</a>
          </div>
        </div>
      </footer>

    <!------------------------------------------------------------------------------------ Scripts ------------------------------------------>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
