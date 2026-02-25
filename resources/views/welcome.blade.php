<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Saffron - Home</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="{{ asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/extra.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="smart">
      <div class="container">

        <div class="navbar-left mr-3 mt-3 mb-2">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="{{ route('index')}}">
            <img class="logo-dark" src="{{ asset('img/logo-dark.png')}}" alt="logo">
            <img class="logo-light" src="{{ asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <nav class="nav nav-navbar mr-auto ml-7">
            <a class="nav-link active" href="{{ route('index')}}">Home</a>
            <a class="nav-link" href="#services-section">Services</a>
            <a class="nav-link" href="{{ route('about-us')}}">About Us</a>
            <a class="nav-link" href="#contact-section">Contact</a>
            <a class="nav-link" href="#">Stoke Management</a>
          </nav>

          <!-- <div class="d-none d-stick-block">
            <a class="btn btn-sm btn-warning" href="#">Let's Connect</a>
          </div> -->
        </section>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <!-- <header id="home" class="header text-white h-fullscreen text-center text-lg-left" style="background-color: #24292e">
      <canvas class="constellation" data-color="rgba(255,255,255,0.3)"></canvas>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-lg-6">
            <h1>Saffron Marketing Solution</h1>
            <p class="lead mt-5 mb-8">Support your workflow with lightweight tools and features. Then work how you work best—we'll follow your lead.</p>
            <p class="gap-xy">
              <a class="btn btn-round btn-outline-warning mw-150" href="#">Let's Connect</a>
            </p>
          </div>

          <div class="col-lg-5 ml-auto">
            <img class="mt-5" src="{{ asset('img/laptop-1.png')}}" alt="img">
          </div>

        </div>
      </div>
    </header> -->

    <header class="header text-white" style="background-image: url({{ asset('img/background.jpg')}});" data-overlay="7">
      <div class="container text-center">

        <div class="row">
          <div class="col-md-7 mx-auto py-7" style="margin-bottom: -80px">

            <h2 class="display-5 fw-500 pt-10">Saffron Marketing Solution</h2>
            <h3 class="mt-3">Be exclusive like Saffron!</h3>

          </div>
          <!-- <div class="col-lg-5 ml-auto">
            <img class="mt-5" src="{{ asset('img/laptop-1.png')}}" alt="img">
          </div> -->
        </div>

      </div>
    </header>


    <!-- Main Content -->
    <main class="main-content">

      <!-- ================ Welcome ============= -->
      <section class="section">
        <div class="container">
          <header class="section-header">
            <!-- <small>Welcome</small> -->
            <h3>Working together is always better!</h3>
            <hr>
            <p class="lead">Collaboration brings out the best in everyone. By sharing ideas and supporting each other, we achieve more than we ever could alone. Teamwork fosters creativity, strengthens problem-solving, and builds stronger connections. </p>
            <p>Like, Follow, Join, Chat, Email or Call us!</p>
          </header>


          <div class="row">

            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="https://web.facebook.com/Dnsaffron/">
                <p style="color: #0fabf2"><i class="icon-facebook lead-7"></i></p>
                <h6 class="mb-0"><strong>Facebook</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="https://x.com/SaffronZeyede">
                <p style="color: #0fcff2"><i class="icon-twitter lead-7"></i></p>
                <h6 class="mb-0"><strong>Twitter</strong></h6>
              </a>
            </div>
            
            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="https://www.instagram.com/S_a_f_f_r_o_n_n/">
                <p style="color: #c235a7"><i class="fa fa-instagram lead-7"></i></p>
                <h6 class="mb-0"><strong>Instagram</strong></h6>
              </a>
            </div>

            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="https://t.me/S_a_f_f_r_o_n_n">
                <p style="color: #2faabc"><i class="fa fa-telegram lead-7"></i></p>
                <h6 class="mb-0"><strong>Telegram</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="tel:+251906038164">
                <p style="color: #f69a3e"><i class="fa fa-phone lead-7"></i></p>
                <h6 class="mb-0"><strong>Phone Call</strong></h6>
              </a>
            </div>

            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="mailto:saffronzeyede0@gmail.com">
                <p style="color: #37b8af"><i class="fa fa-envelope lead-7"></i></p>
                <h6 class="mb-0"><strong>Email</strong></h6>
              </a>
            </div>

          </div>
        </div>
      </section>

     <!-- SOMETHING about the company -->
      <section class="section">
        <div class="container">
          <header class="section-header">
            <!-- <small>Feature</small>
            <h2>Send better email</h2>
            <hr> -->
            <p class="lead">Here, at Saffron Marketing Soulution, we provide quality services for your business regarding marketing. 
              We provide different digital marketing solutions including Social Media Marketing, Search Engine Optimization, Content Marketing and Marketing Analytics.</p>
          </header>



          <div class="row gap-y">

            <div class="col-md-8 mx-auto mb-7">
              <img src="{{ asset('img/mockup-tablet.png')}}" alt="..." data-aos="fade-up" data-aos-duration="2000">
            </div>


            <div class="w-100"></div>

          </div>

        </div>
      </section>


      <!-- Why you choose Us -->
      <section class="section bg-gray">
        <div class="ml-8 mr-8">
          <header class="section-header">
            <!-- <small>Services</small> -->
            <h2>WHY YOU CHOOSE US?</h2>
            <hr>
            <p class="lead">We are the best solution for you businesses, because;</p>
          </header>


          <div class="row gap-y">

            <div class="col-md-6 col-xl-3">
              <div class="card card-body shadow-3 text-center bg-success text-white">
                <p class="my-5"><i class="fa fa-book lead-6"></i></p>
                <h5 class="mb-5 fw-500">You Talk, We Listen</h5>
                <p>As a marketing agency, we strive to understand our client’s business goals first. Then all decisions are made with those goals in mind. 
                  A shiny new website is worthless if it doesn’t help you reach your goals. You talk, we listen… then we throw in lots of ideas for improvement.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card card-body shadow-3 text-center">
                <p class="my-5"><i class="fa fa-group lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">We Value Integrity</a></h5>
                <p>We believe in doing business with honesty, integrity and a sincere heart for others. We aren’t going to give you unfair deal which 
                  something you don’t need. We won’t lie to get your business. We will treat you with kindness and respect. 
                  The way it should be (and far too often is not).</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card card-body shadow-3 text-center bg-warning text-white">
                <p class="my-5"><i class="icon-pencil lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">We Create Outstanding Marketing strategies</a></h5>
                <p>Our goal is to position your business as a top player in the Real estate industry and surpass all competitors. 
                  A top-notch, professional Marketing boosts credibility with all customers (existing and potential) and ultimately leads to future growth.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card card-body shadow-3 text-center">
                <p class="my-5"><i class="icon-clock lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">We Deliver on Time</a></h5>
                <p>We know that time is money in business, so we set realistic deadlines (for ourselves and for our clients) and stick to them. 
                  We communicate constantly with our clients to give them updates as we progress and get projects launched by the agreed launch date.</p>
              </div>
            </div>

          </div>


        </div>
      </section>


      <!-- ================== Services ================= -->
      <section id="services-section" class="section">
        <div class="container">
          <header class="section-header">
            <small>Our Services</small>
            <h6>Deal with the real estate Developers to do all the marketing activities (such as Asset valuation, selling apartments......)</h6>
            <!-- <hr> -->
            <!-- <p class="lead">Holisticly implement fully tested process improvements rather than dynamic internal.</p> -->
          </header>



          <div class="row gap-y text-center">


            <div class="w-100"></div>


            <div class="col-md-6 col-xl-6 feature-1">
              <p class="feature-icon text-warning"><i class="fa fa-support"></i></p>
              <h5>Virtual Marketing & Support</h5>
              <p style="text-align: justify" class=mr-5>Our Outsource Commercial Real Estate Marketing Plans provide a turnkey solution capable of handling all of your ongoing marketing needs. 
                Our service is a Hybrid to the traditional in-office employee and offers a more cost effective and streamlined solution. <br>
                Saffron specializes in providing virtual marketing (outsourcing) and support services that have been optimized for the Commercial Real Estate industry. 
                We’ll strategize, develop, design and orchestrate your next and future marketing campaigns.</p>
            </div>


            <div class="col-md-6 col-xl-6 feature-1">
              <p class="feature-icon text-warning"><i class="icon-search"></i></p>
              <h5>Searching finance for Real estate Developers</h5>
              <p style="text-align: justify" class="ml-5">We provide institutional investors with opportunities in Ethiopia real estate sector. Instead of replicating established investment models, 
                we focus on sectors offering routes into niche markets. <br> 
                We take extra steps to be more deeply involved and committed to each of investments. In turn, this gives us the information, 
                knowledge and experience we need to yield better results for our investors, our customers and the markets we operate in. 
                Our ability to create value from rapidly changing markets provides our investors with the potential for attractive and stable returns.</p>
            </div>

          </div>

        </div>
      </section>


      <!-- ================ Contact =============== -->
      <section id="contact-section" class="section">
        <div class="container">

          <form class="row gap-y" action="../assets/php/sendmail.php" method="POST" data-form="mailer">
            <div class="col-lg-7">
              <h4>Send your Feedback to Us</h4>
              <br>

              <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control form-control-lg" rows="4" placeholder="Message" name="message"></textarea>
              </div>

              <button class="btn btn-lg btn-warning" type="submit">Send message</button>

            </div>


            <div class="col-lg-3 ml-auto text-center text-lg-left">
              <hr class="d-lg-none">
              <h4>Find Us</h4>
              <br>
              <p>6 Kilo <br>Addis Ababa, Ethiopia</p>
              <p>+2519 06 03 8164<br>+2519 77 20 0815</p>
              <p>contact@Saffron.com</p>
              <div class="fw-400">Follow Us</div>
              <div class="social social-sm social-inline">
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-instagram" href="https://www.instagram.com/saffronzeyede/"><i class="fa fa-instagram"></i></a>
                <a class="social-dribbble" href="https://dribbble.com/saffronzeyede"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </form>

        </div>

      </section>


    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-md-2 text-center text-md-left">
            <a href="{{ route('index')}}"><img src="{{ asset('img/logo-dark.png')}}" alt="logo"></a>
          </div>

          <div class="col-md-7">
            <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
              <a class="nav-link active" href="{{ route('index')}}">Home</a>
              <a class="nav-link" href="#services-section">Services</a>
              <a class="nav-link" href="{{ route('about-us')}}">About Us</a>
              <a class="nav-link" href="#contact-section">Contact</a>
              <a class="nav-link" href="#">Stoke Management</a>
            </div>
          </div>

          <div class="col-md-3 text-center text-md-center">
            <small>©2024. Saffron Marketing Solution.</small>
          </div>

        </div>
      </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>

  </body>
</html>
