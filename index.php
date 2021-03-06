<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Locus'19</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

    <?php
    if(isset($_GET['msg']))
    {
        if($_GET['msg']=="sent")
        {
            echo "
                <script>
                    alert('Message has been sent sucessfully');
                </script>
            ";
        }
    }
    ?>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Workshops</a></li>
            <li><a href="#lectures">Lectures</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The Annual<br><span>Club Mathematica</span> Summit</h1>
      <p class="mb-4 pb-0">12-13 January, National Institute of Technology, Calicut</p>
      <a href="https://www.youtube.com/watch?v=W14M-DKOuZ0" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About Locus</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Locus</h2>
            <p>A summit exclusively for college students, Locus provides a platform to build up your skills and learn something new and productive. This summit will mainly comprise of workshops and lectures based on Business, Cryptography and Machine Learning which can be of great use in building up and succeeding in our career life . A weekend filled with informative and entertaining events , Locus'19 will be one of it's kind. </p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>National Institute of Technology, Calicut</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Saturday - Sunday<br>12-13 January</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Workshops</h2>
          <p>Here are some of our Workshops, more to come!</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <a href="workshops/capmarket.html"><img src="img/speakers/hsae.jpg" alt="Speaker 1" class="img-fluid"></a>
              <div class="details">
                <h3><a href="workshops/capmarket.html">Capital Market Trading</a></h3>
                <p>Hedge School of Applied Economics</p>
              </div>
            </div>
          </div>
        <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <a href="workshops/cybersecurity.html"><img src="img/speakers/rthacs.jpg" alt="Speaker 1" class="img-fluid"></a>
              <div class="details">
                <h3><a href="workshops/cybersecurity.html">Cyber Security</a></h3>
                <p>Red Team Hacker Academy</p>
                
              </div>
            </div>
          </div>
            <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <a href="workshops/blockchain.html"><img src="img/speakers/rthabc.jpg" alt="Speaker 1" class="img-fluid"></a>
              <div class="details">
                <h3><a href="workshops/blockchain.html">Blockchain Technology</a></h3>
                <p>Red Team Hacker Academy</p>
                
              </div>
            </div>
          </div>
            <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/coming.jpg" alt="Speaker 2" class="img-fluid">
              
            </div>
          </div>
          
        </div>
      </div>

    </section>
      
      
         <!--==========================
      lectures Section
    ============================-->
      <section id="lectures" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Lectures</h2>
          <p></p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="lecture">
              <img src="img/speakers/coming.jpg" alt="Speaker 2" class="img-fluid">
              
            </div>
          </div>
          
        </div>
      </div>

    </section>
      
      
      

 

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="" style="display: none;">
          
            <iframe></iframe>
          </div>
      </div>

        
        <div class="container-fluid">
        <div class="row no-gutters">
            <div class ="col-lg-6 venue-map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=national%20institute%20of%20technology%20calicut&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe><a href="https://www.pureblack.de/webdesign-wiesbaden/"></a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
            </div>
            <div class ="col-lg-6 venue-info"><div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>National Institute of Technology, Calicut</h3>
                <p></p>
              </div>
            </div></div>
            </div>
      </div>

        
        
      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/nitc1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/nitc1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/nitc2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/nitc2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/nitc3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/nitc3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/nitc5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/nitc5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>          
        </div>
      </div>

    </section>
      
    <!--==========================
      Sponsors Section
    ============================-->
  <!--  <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="img/sponsors/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section> -->

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">How do I reach NIT Calicut?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                     NITC is well connected by railway, air and road facilities. All major stations in India have trains to Kozhikode Railway station(CLT). The Kozhikode International Airport(CCJ) provides daily flights to and from major cities in India.<br>
                    <b>From Airport:</b><br>
                    Take a cab directly to NIT Calicut.<br>
                    <b>From Railway Station:</b><br>
                    Take a cab directly to NIT Calicut or take a bus (towards Mukkam or REC/NIT) from Palayam bus stand, Kozhikode.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">A workshop I want to take is sold out! What can I do? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                        Registrations  might reopen in the last week if there are cancellations.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Do you provide participation certificate? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes. Participation certificate will be provided to all the participants of events and workshops. 
(Provided you attend the event or workshop without fail adhering to the code of conduct)
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">What is your refund policy? Or What if I couldn't make it to the workshop I paid for? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      You have the provision of cancelling workshops/events for which you have paid only if there is a valid reason. The cancellation of your registration must be informed atleast a week before the event. If not informed a week before you will not be reimbursed.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Do I have to register separately for all events? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes. Each event has separate registration
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">What language will be the workshops and events? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      All the events and workshops will be in conducted in English.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq7" class="collapsed">I'm an established creative and would like to host a workshop at Locus'19, how can I get involved? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq7" class="collapse" data-parent="#faq-list">
                    <p>
                      You can send an email to <a href="mailto:clubmath@nitc.ac.in">clubmath@nitc.ac.in</a>
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq8" class="collapsed">Will I be provided with food and accommodation? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq8" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes. Food and accommodation will be provided at a reasonable price if required.
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq9" class="collapsed">What time does the event start? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq9" class="collapse" data-parent="#faq-list">
                    <p>
                      The schedule for each event shall be updated 2 weeks prior to the event
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq10" class="collapsed">Is there an offline registration? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq10" class="collapse" data-parent="#faq-list">
                    <p>
                        No, there there won't be any offline registration.
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq11" class="collapsed">Is there any prerequisites for any of the workshops? Or What do I need to be prepared for the workshop? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq11" class="collapse" data-parent="#faq-list">
                    <p>
                        Prerequisites for each workshop will be mentioned seperately in the contents of each workshop
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq12" class="collapsed">Do we get T-shirt and goodies? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq12" class="collapse" data-parent="#faq-list">
                    <p>
                        T-shirts will be provided only to winners and Campus Ambassadors
                    </p>
                  </div>
                </li>
                  <li>
                  <a data-toggle="collapse" href="#faq13" class="collapsed">Will I get a confirmation email after registering? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq13" class="collapse" data-parent="#faq-list">
                    <p>
                        Yes, your ticket will also be sent to your provided mail id
                    </p>
                  </div>
                </li>
                  
      
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Bookings open</h2>
          
        </div>
          <div class="center-block"><iframe class="center-block" src="https://www.townscript.com/widget/locus-19-club-mathematica-nitc-141232" frameborder="0" height="600" width="80%"></iframe></div>
      </div>

    </section>

 <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>NIT Calicut<br>Calicut Mukkam Road, Kattangal, Kerala 673601</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:9207746246">Jyothsna Shaji<br>9207746246</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:clubmath@nitc.ac.com">clubmath@nitc.ac.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
            
          <form role="form" action="message.php" method="post">
            
              <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
          </form>
            
        </div>

      </div>
    </section><!-- #contact -->


      
<!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/CM.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/nit.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
  
</main>


    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-6 footer-info">
            <img src="img/logo.png" alt="locus'19">
          </div>


          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <address><strong>NIT Calicut</strong><br>Calicut Mukkam Road, Kattangal, Kerala 673601</address>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/clubmathematica" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/clubmathematica" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="mailto:clubmath@nitc.ac.in" class="envelope"><i class="fa fa-envelope"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Club Mathematica</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
