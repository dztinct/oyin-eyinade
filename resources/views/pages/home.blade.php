@extends('layouts.app')
@section('title', "Oyinkansola Eyinade Ajibade")
@section('content')


<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="{{ asset('images/oyin1.jpeg') }}" alt="" class="img-fluid" style="border-radius: 100px;">
      <h1 class="text-light"><a href="index.html">Oyinkansola Eyinade Ajibade</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="https://twitter.com/OyinEyinade?t=iD_pZLIqMPUxpEaDBcMTsw&s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/oyin.eyinade?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/oyin_eyinade?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/oyinkansola-eyinade-ajibade-10653297" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar pb-5">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Facts</span></a></li>
        <li><a href="#events" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Events</span></a></li>
        <li class="mb-5" style="margin-bottom: 30%;"><a href="/buy-books" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Buy Books</span></a></li>

      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->





  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-end ">
    <div class="hero-container" data-aos="fade-in">
      <h1>Oyinkansola &nbsp; Eyinade &nbsp; Ajibade</h1>
      <p><span class="typed" data-typed-items="An Empathetic Writer, A Teen Coach, A Public Speaker, An Author"></span></p>
    </div>
  </section><!-- End Hero -->



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>
            Oyinkansola Eyinade Ajibade, best known as Oyin Eyinade is the Founder and Executive Director of Heart Matters Initiative. (www.heartmattersinitiative.com). She is a  Public Speaker, Empathetic Writer and Teen Coach.
        </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('images/oyin1.jpeg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Writer &amp; Author.</h3>
            <p class="fst-italic">
                As a seasoned Writer and Author, She has explored the power of storytelling to inspire, educate, and transform lives. Through her books and articles, she delved into various themes that resonate deeply with teenagers, fostering a sense of understanding, empathy, and self-discovery. Writing, for her, is not just a craft; it is a means of connecting hearts and minds.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.oyineyinade.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lagos, Nigeria</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>hello@oyineyinade.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Books:</strong> <span>All Available</span></li>
                </ul>
              </div>
            </div>
            <p>
                She is a Teen Coach and have had the incredible opportunity to work closely with young individuals navigating the intricate path of adolescence. Empowering and guiding them as they embark on their journey of self-discovery is a responsibility she holds dear to her heart.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




     <!-- ======= Facts Section ======= -->
     <section id="facts" class="facts">
        <div class="container">

          <div class="section-title">
            <h2>Facts</h2>
            <p>
                One of the most fulfilling aspects of my work has been organizing seminars and outreaches tailored for teenage girls. These events create safe spaces for young girls to express themselves, share their stories, and build a supportive community. Addressing critical issues like sex education, periods, self-esteem, mental health, and personal growth, I tackle challenges head-on and create an atmosphere of trust and camaraderie.
            </p>
            <br>
            <p>
                A cause very close to her heart is promoting comprehensive sex education for teenagers. She strongly believes that knowledge is power, and in a world where information is readily accessible, it is essential to equip our teens with the right information about their bodies, relationships, and responsibilities. Through her public speaking engagements, she advocates for open conversations about sex education, breaking down stigmas, and fostering a healthier and safer environment for teenagers.
            </p>
            <br>
            <p>
                Together, let's create a brighter future for our teens and inspire positive change, one teen at a time.
            </p>
          </div>

          <div class="row no-gutters">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              <div class="count-box">
                <i class="bi bi-person-fill-check"></i>
                <span data-purecounter-start="0" data-purecounter-end="332" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Teens coaching</strong> Morally guiding youngs teens both physically and virtually</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="count-box">
                <i class="bi bi-book"></i>
                <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Books Written</strong> Tackling and Solving different life problems through pen</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="806" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Copies Sold</strong> Sold in Africa, Europe, North America and South America </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Events Attended and organised</strong> Organised and Attended various events in Africa and Europe</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Facts Section -->




    <!-- ======= Testimonials Section ======= -->
    <section id="events" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Events</h2>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('images/event1.jpeg') }}" class="testimonial-img" alt="">
                  <h3>HURREC</h3>
                  <h4>Guest Speaker</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Oyin Eyinade speaking at the Human Right Research and Education Centre event on the “Fundamental rights of youths and the consequences of denying them their rights.”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('images/event2.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Outreach</h3>
                  <h4>Secondary School, Lagos</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Oyin Eyinade takes a lot of time during her seminars to answer questions from students while providing age-appropriate answers.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('images/event3.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Outreach</h3>
                  <h4>Secondary School, Lagos</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    During one of her school tours in 2019 with her team (Heart Matters Initiative)
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('images/event4.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Parent Speech Talk</h3>
                  <h4>Secondary School</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    She was invited by Ebenezer High School to speak to speak to parents of students and school teens on digital age parenting.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('images/event5.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Teen Talks</h3>
                  <h4>Secondary Schools</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Pictured during one of her school outreaches in 2020
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- End Testimonials Section -->

</main>

@endsection
