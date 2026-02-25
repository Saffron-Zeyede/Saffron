<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Saffron - About us</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="{{ asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/extra.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
  </head>

  <body>


    <!--================ Navbar =================== -->
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
            <a class="nav-link" href="{{ route('index')}}">Home</a>
            <a class="nav-link" href="{{ route('index', '#services-section')}}">Services</a>
            <a class="nav-link active" href="{{ route('about-us')}}">About Us</a>
            <a class="nav-link" href="#contact-section">Contact</a>
            <a class="nav-link" href="#">Stoke Management</a>
          </nav>

          <!-- <div class="d-none d-stick-block">
            <a class="btn btn-sm btn-warning" href="#">Let's Connect</a>
          </div> -->
        </section>

      </div>
    </nav>


    <!-- =============== Header ================== -->
    <header class="header text-white" style="background-image: url({{ asset('img/aboutbg.jpg')}});" data-overlay="7">
      <div class="container text-center">

        <div class="row">
          <div class="col-md-7 mx-auto py-7" style="margin-bottom: -80px">

            <h1 class="display-5 fw-500 pt-10">Saffron Marketing Solution</h1>
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

      <!-- ============== About Us ================= -->
      <section class="section">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="mx-auto">
              <!-- <h2>About Us</h2> -->
              <p class="lead">We’ve been helping real estate developers with marketing and sales since 2004.
                Our president, Assfaw Hailu, spent the early part of his career working in various
                marketing and sales roles for major real estate developers. He has designed
                Different marketing strategies for entire communities that sold out entire phases
                with short period of time. Assfaw led the marketing efforts for real estate
                developments and communities across Ethiopia.</p>
              <p class="lead">Over the last 6 years, Assfaw and his team have designed and executed marketing
                campaigns that have resulted in more than 100Million Birr in sales revenue</p>
              <p class="lead">Land developers and community builders come to Saffron for our years of experience,
              industry expertise and track record of success.</p>

            </div>

          </div>
        </div>
      </section>

      <!-- ============= Testimonial ================ -->
      <section class="section py-9" style="background-image: url({{ asset('img/21.png')}});">
        <div class="overlay opacity-90" style="background-image: linear-gradient(90deg, #fff 0%, transparent 100%);"></div>
        <div class="container">

          <div class="row">
            <div class="col-10 col-md-7 col-xl-8">
              <div class="section-dialog shadow-4">
                <h5 class="fw-500">WHY WE ARE DIFFERENT</h5>
                  <p class="text-left lead-1 mb-0 mt-5 mb-5">We have years of experience & results backing our marketing & sales strategy.
                    Our tactics were developed with insider knowledge of the real estate
                    development industry. Whether it’s promoting events, building stand-out
                    websites, deploying ad campaigns, we do it all, and we do it well. Our team will
                    deliver your sales target with qualified leads, every single month.</p>
              </div>
            </div>
          </div>

        </div>
      </section>


      <!-- ===================== The Team ============== -->
      <section class="section">
        <div class="ml-5 mr-5">
          <header class="section-header">
            <!-- <small>People</small> -->
            <h2>The Amazing Team</h2>
            <br>
            <h6>Creative, Dedicated, Driven, Punctual... The whole is much greater than the sum of its parts!</h6>
            <p class="lead">Saffron boasts a unique, close-knit team with experts in all facets of Marketing development; 
              strategic, creative and technical. We believe our competitive advantage is the quality of our team. As we grow, we are 
              committed to hiring and developing the very best people who strive for continuous innovation and extreme customer focus.</p>
          </header>

          <div class="row gap-y">
            <div class="col-md-3 team-2">
              <a href="#">
                <img src="{{ asset('img/saffron.png')}}" alt="...">
              </a>
              <h5>Saffron Zeyede</h5>
              <small>CEO & Founder</small>
              <p style="text-align: justify" class="ml-4 mr-4">Zelalem is an accomplished digital  Marketer skilled at designing and implementing digital media strategies that generate new clients 
                and revenue streams for businesses. His experience as a Real estate Consultant,  developer, digital marketer, and executive, 
                helps him to collaborate with companies to achieve their Goals.</p>
              <br>
              <div class="social social-brand">
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="mailto:saffronzeyede0@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="social-linkedin" href="https://www.linkedin.com/in/saffron-zeyede-b40758353/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>

            <div class="col-md-3 team-2">
              <a href="#">
                <img src="{{ asset('img/asfaw.png')}}" alt="...">
              </a>
              <h5>Asfaw Hailu</h5>
              <small>President & Founder</small>
              <p style="text-align: justify" class="ml-4 mr-4">Assfaw Completed his BA degree  in Marketing Management from Addis Ababa University School of Commerce. 
              He worked From Sales Supervisor to District Director at Ayat Real estate, his unique vision allows him to see various market segments to 
              which a product or service may appeal and he have the ability to reach those audiences successfully,</p>
              <br>
              <div class="social social-brand">
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="mailto:saffronzeyede0@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="social-linkedin" href="https://www.linkedin.com/in/saffron-zeyede-b40758353/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>

            <div class="col-md-3 team-2">
              <a href="#">
                <img src="{{ asset('img/ahadu.png')}}" alt="...">
              </a>
              <h5>Ahadu Mekonnen</h5>
              <small>Software Developer</small>
              <p style="text-align: justify" class="ml-4 mr-4">Ahadu is highly skilled and experienced in software development and cyber security, and he have worked in 
              several big governmental projects and worked on securing the country’s most sensitive systems also worked with big US companies as a designer and also a 
              developer.</p>
              <br>
              <div class="social social-brand">
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="mailto:saffronzeyede0@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="social-linkedin" href="https://www.linkedin.com/in/saffron-zeyede-b40758353/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>

            <!-- <input type="checkbox" class="read-more-state" id="abebe"/> -->

            <div class="col-md-3 team-2 read-more-wrap">
              <a href="#">
                <img src="{{ asset('img/abebe.png')}}" alt="...">
              </a>
              <h5>Abebe Gietaneh</h5>
              <small>Software Developer</small>
              <p style="text-align: justify" class="ml-4 mr-4">Abebe is a highly and experienced software developer. He is a fullstack web application and 
              mobile application developer. He graduated from Addis Ababa University, Addis Ababa Institute of Technology in 
                Software Engineering. He has worked on many software projects and ERP softwares.
              </p>
              <br>
              <div class="social social-brand">
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="mailto:saffronzeyede0@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="social-linkedin" href="https://www.linkedin.com/in/saffron-zeyede-b40758353/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>

            <!-- <label for="abebe" class="read-more-trigger -link"></label> -->

          </div>

          <!-- <div class="row gap-y">
            <div class="col-md-4 team-2">
              <a href="#">
                <img src="{{ asset('img/ahadu.png')}}" alt="...">
              </a>
              <h5>Ahadu Mekonnen</h5>
              <small>Software Developer</small>
              <p style="text-align: justify" class="ml-6 mr-6">Ahadu is highly skilled and experienced in software development and cyber security, and he have worked in several big governmental 
                projects and worked on securing the country’s most sensitive systems also worked with big US companies as a designer and also a developer.</p>
              <br>
              <div class="social social-brand">
                <a class="social-facebook" href="https://web.facebook.com/Dnsaffron/"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://x.com/SaffronZeyede"><i class="fa fa-twitter"></i></a>
                <a class="social-gplus" href="mailto:saffronzeyede0@gmail.com"><i class="fa fa-envelope"></i></a>
                <a class="social-linkedin" href="https://www.linkedin.com/in/saffron-zeyede-b40758353/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div> -->

        </div>
      </section>

       <!-- how we help you sell out -->
      <section class="section bg-gray">
        <div class="ml-8 mr-8">
          <header class="section-header">
            <!-- <small>Services</small> -->
            <h4>HOW WE HELP YOU SELL OUT</h4>
            <hr>
            <p class="lead">Every real estate development is built and sold on a story. As a growth agency, we 
                offer more than just beautiful websites and advertising campaigns. We develop 
                marketing and sales strategies designed to put your company on track for continuous, year-over-year growth.</p>
          </header>


          <div class="row gap-y">

            <div class="col-md-6 col-xl-4">
              <div class="card card-body shadow-3 text-center bg-success text-white">
                <p class="my-5"><i class="icon-notebook lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">Gather Information</a></h5>
                <p>We’ll look at your mission, vision, and purpose to understand who you are and what you hope to accomplish.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card card-body shadow-3 text-center">
                <p class="my-5"><i class="icon-linegraph lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">Establish Goals</a></h5>
                <p>We identify your growth goals: how many leads you want, how many lots you need to sell, and when you want to sell out.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-4">
              <div class="card card-body shadow-3 text-center bg-warning text-white">
                <p class="my-5"><i class="fa fa-calendar lead-6"></i></p>
                <h5 class="mb-5 fw-500"><a href="#">Monthly Tactics</a></h5>
                <p>We develop a strategy with specific tactics. We’ll implement monthly to generate the sales and the revenue you need.</p>
              </div>
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
              <a class="nav-link" href="{{ route('index')}}">Home</a>
              <a class="nav-link" href="{{ route('index', '#services-section')}}">Services</a>
              <a class="nav-link active" href="{{ route('about-us')}}">About Us</a>
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
