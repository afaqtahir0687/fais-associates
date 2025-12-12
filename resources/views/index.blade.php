@extends('layouts.master')
@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/bg_1.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello! This is Clyde</span>
                                <h1 class="mb-4 mt-3">Creative <span>UI/UX</span> Designer &amp; Developer</h1>
                                <p><a href="#" class="btn btn-primary">Hire me</a> <a href="#"
                                        class="btn btn-primary btn-outline-primary">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">We Design &amp; Build Brands</span>
                                <h1 class="mb-4 mt-3">Hi, I am <span>Clyde</span> This is my favorite work.</h1>
                                <p><a href="#" class="btn btn-primary">Hire me</a> <a href="#"
                                        class="btn btn-primary btn-outline-primary">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-lg-1"></div>
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center mt-5"
                            style="background-image:url({{ asset('assets/images/vision.png') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 style="font-size: 34px; text-transform: capitalize;">Vision Statement</h2>
                                <p>Empowering businesses and individuals to
                                    Achieve More—by delivering excellence in HR,
                                    management, finance, technology, and beyond.
                                    We envision a world where organizations
                                    thrive through strategic consulting, seamless
                                    operations, and transformative learning. With
                                    innovation, integrity, and expertise, we unlock
                                    potential, drive efficiency, and turn ambitions
                                    into achievements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Mission Statement</h2>
                                <p>To equip businesses with integrated, highimpact
                                    solutions—from HR and financial
                                    consulting to IT, facilities, and corporate training
                                    —enabling them to operate smarter, grow
                                    faster, and achieve more. Through tailored
                                    expertise, cutting-edge tools, and a client-first
                                    approach, we turn challenges into
                                    opportunities, ensuring sustainable success in
                                    an ever-evolving marketplace.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ asset('assets/images/mission.png') }});">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ asset('assets/images/values.png') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Core Values</h2>
                                <span class="subheading">1. Integrity & Reliability</span>
                                <p>We build trust through transparency, ethical
                                    practices, and unwavering accountability—
                                    delivering on every promise with consistency and
                                    professionalism
                                </p>
                                <span class="subheading">2. Excellence Through Efficiency</span>
                                <p>We maximize productivity and minimize waste—
                                    leveraging smart processes, technology, and
                                    expertise to achieve optimal results for our
                                    clients.
                                </p>
                                <span class="subheading">3. Innovate with Purpose</span>
                                <p>We embrace forward-thinking solutions that
                                    drive cost-effective growth, blending creativity
                                    with practicality to stay ahead in a dynamic
                                    world.
                                </p>
                                <span class="subheading">4. Win-Win Partnerships</span>
                                <p>We succeed when our clients succeed. By
                                    aligning our goals with theirs, we foster long-term
                                    collaboration, mutual growth, and shared value.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="about-txt mt-5">About Us</span>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ asset('assets/images/about-1.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">The Team of FAIS Associates</h2>
                                <p>For over 3 decades, our team of
                                    industry experts has built a legacy of
                                    excellence, driven by shared values of
                                    trust, hard work, honesty, and
                                    companionship. What began as a group
                                    of seasoned professionals with deep
                                    specialization in our respective fields
                                    evolved into more than just a
                                    companionship — it became a bond
                                    forged through challenges overcome,
                                    successes celebrated, and an
                                    unwavering commitment to delivering
                                    results. Our friendship is the foundation
                                    of our collaboration, ensuring that every
                                    client benefits not just from our
                                    expertise, but from a team that truly
                                    cares. Together, we don’t just serve—we
                                    elevate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">I am grat at</span>
                    <h2 class="mb-4">We do awesome services for our clients</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-3d-design"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-app-development"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Application</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-web-programming"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Development</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-branding"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Banner Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-computer"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Branding</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-vector"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Icon Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-vector"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Graphic Design</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
                        <div class="icon shadow d-flex align-items-center justify-content-center"><span
                                class="flaticon-zoom"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">SEO</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-hireme">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 col-lg-8 d-flex align-items-center">
                    <div class="w-100 py-4">
                        <h2>Have a project on your mind.</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                            is a paradisematic country, in which roasted parts of sentences fly.</p>
                        <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Contact me</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-items-end">
                    <img src="images/author.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-2.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-3.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-7.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/work-8.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2 class="mb-4">What client says about?</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">July 03, 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact us</span>
                    <h2 class="mb-4">Have a Project?</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-8">
                    <form action="#" class="bg-light p-4 p-md-5 contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-4 d-flex pl-md-5">
                    <div class="row">
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                                <p><span>Website</span> <a href="#">yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="map" class="map"></div> -->
                </div>
            </div>
        </div>
    </section>
@endsection