@extends('layouts.master')
@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img"
                            style="background-image:url({{ asset('assets/images/desiman.png') }});">
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
                        <div class="one-third order-md-last img"
                            style="background-image:url({{ asset('assets/images/bg_2.jpg') }});">
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
                            style="background-image:url({{ asset('assets/images/vision.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 style="font-size: 34px; text-transform: capitalize;">Vision Statement</h2>
                                <p class="p-txt">Empowering businesses and individuals to
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
            <div class="row align-items-center">

                <!-- Text -->
                <div class="col-lg-7 order-2 order-lg-1 pt-4 pt-lg-0">
                    <div class="heading-section">
                        <h2 class="mb-4 mission-title">Mission Statement</h2>
                        <p class="mission-text" style="text-align: justify">
                            To equip businesses with integrated, high-impact solutions—from HR and financial
                            consulting to IT, facilities, and corporate training—enabling them to operate smarter,
                            grow faster, and achieve more. Through tailored expertise, cutting-edge tools, and a
                            client-first approach, we turn challenges into opportunities, ensuring sustainable success
                            in an ever-evolving marketplace.
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="mission-img-wrap">
                        <div class="mission-overlay"></div>
                        <div class="mission-img-wrap"
                            style="background-image:url({{ asset('assets/images/mission.jpg') }});">
                            <div class="mission-overlay"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>



        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-md-6 col-lg-5 d-flex mt-5">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image:url({{ asset('assets/images/values.jpeg') }}); height:92vh;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h2 style="font-size: 34px; text-transform: capitalize;">Core Values</h2>
                                    <span class="subheading">1. Integrity & Reliability</span>
                                    <p class="p-txt">We build trust through transparency, ethical
                                        practices, and unwavering accountability—
                                        delivering on every promise with consistency and
                                        professionalism
                                    </p>
                                    <span class="subheading">2. Excellence Through Efficiency</span>
                                    <p class="p-txt">We maximize productivity and minimize waste—
                                        leveraging smart processes, technology, and
                                        expertise to achieve optimal results for our
                                        clients.
                                    </p>
                                    <span class="subheading">3. Innovate with Purpose</span>
                                    <p class="p-txt">We embrace forward-thinking solutions that
                                        drive cost-effective growth, blending creativity
                                        with practicality to stay ahead in a dynamic
                                        world.
                                    </p>
                                    <span class="subheading">4. Win-Win Partnerships</span>
                                    <p class="p-txt">We succeed when our clients succeed. By
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


            <!-- Section Heading -->
            <div class="about-header-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center"
                            style="    background: red;
    color: white;
    font-weight: bold;">
                            <span class="about-title">About Us</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row d-flex no-gutters">

                    <!-- LEFT COLUMN : IMAGE + DETAILS -->
                    <div class="col-md-5 d-flex flex-column">

                        <!-- IMAGE -->
                        <div class="img-about img d-flex align-items-stretch w-70 mt-5">
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image:url({{ asset('assets/images/mypic.png') }}); background-size:cover; height:420px;">
                            </div>
                        </div>

                        <!-- TEXT UNDER IMAGE -->
                        <div class="ftco-animate text-center px-3 pb-4">
                            <h4 class="mb-1 mt-2">Imran Shahzad</h4>
                            <strong>Founder & CEO</strong><br>
                            <span>Fais Associates Pvt Ltd</span>

                            <p class="mt-3" style="font-size:14px; line-height:1.6;">
                                MBA (HR), MSc-HRM (UK), Assoc. CIPD<br>
                                Certified Trainer (PIEF-TAFTA-UNCTAD)<br>
                                Visiting Lecturer – University of the Punjab (IAS Laws)<br>
                                Quaid-e-Azam Law College (Law of Contract)<br>
                                Institute of Management Sciences (HRM)
                            </p>

                            <p class="p-txt" style="font-size:15px;">
                                As the Founder and CEO of Fais Associates Pvt Ltd, I bring about three
                                decades of transformative expertise in HR, organizational development,
                                and corporate governance to empower businesses with end-to-end
                                professional solutions.
                            </p>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN : TEAM + WHY PARTNER -->
                    <div class="col-md-7 pl-md-5 py-5">
                        <div class="py-md-4">

                            <!-- TEAM -->
                            <div class="heading-section ftco-animate mb-4">
                                <h2 class="mb-3" style="font-size:32px;">
                                    The Team of FAIS Associates
                                </h2>

                                <p style="text-align: justify;">
                                    For over 3 decades, our team of industry experts has built a legacy
                                    of excellence, driven by shared values of trust, hard work, honesty,
                                    and companionship. What began as a group of seasoned professionals
                                    with deep specialization in our respective fields evolved into more
                                    than just a companionship—it became a bond forged through challenges
                                    overcome, successes celebrated, and an unwavering commitment to
                                    delivering results.
                                </p>

                                <p style="text-align: justify">
                                    Our friendship is the foundation of our collaboration, ensuring that
                                    every client benefits not just from our expertise, but from a team
                                    that truly cares. Together, we don’t just serve—we elevate.
                                </p>
                            </div>

                            <!-- WHY PARTNER -->
                            <div class="ftco-animate mb-4">

                                <!-- IMAGE ABOVE -->
                                <div class="mb-3">
                                    <img src="{{ asset('assets/images/handshak.png') }}" alt="Why Partner With Us"
                                        class="img-fluid w-100">
                                </div>

                                <!-- WHY PARTNER -->
                                <h4 class="mb-3">Why Partner With Us?</h4>
                                <ul class="list-unstyled">
                                    <li>✔ <strong>End-to-End Expertise</strong> – From HR to legal, finance to events</li>
                                    <li>✔ <strong>Tailored Solutions</strong> – Customized to your industry & strategy</li>
                                    <li>✔ <strong>Compliance-First</strong> – Pakistani labor, tax & corporate laws</li>
                                    <li>✔ <strong>Proven Leadership</strong> – 3+ decades in HR & finance under FCAs</li>
                                </ul>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
            <div class="container">
                <div class="about-header-bar">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12 text-center"
                                style="    background: red;
                                    color: white;
                                    font-weight: bold;">
                                <span class="about-title">What we do: A birdeyeview.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <div class="col-lg-1"></div>
                    <div class="col-md-4 col-lg-4 d-flex">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center mt-5"
                                style="background-image:url({{ asset('assets/images/human.webp') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h5 style="font-size: 24px; text-transform: capitalize; font-weight: 500;">
                                        Human Resource Consulting Services
                                    </h5>

                                    <ol style="padding-left:18px; margin-top:10px;">
                                        <li>Labour Law Advisory</li>
                                        <li>Policies & Procedures</li>
                                        <li>Recruitment/Head Hunting</li>
                                        <li>Onboarding Support</li>
                                        <li>Performance Mgt. Systems</li>
                                        <li>Designing Compensation & RewardsFramework</li>
                                        <li>Training & Event Management</li>
                                        <li>Corporate Housekeeping Service - (Fresh n Tidy)</li>
                                    </ol>
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
                    <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h5 style="font-size: 24px; text-transform: capitalize; font-weight: 500;">
                                        Accounting, Fanance, Tax, Corporate Governance & Consulting Services
                                    </h5>

                                    <ol style="padding-left:18px; margin-top:10px;">
                                        <li>Book Keeping</li>
                                        <li>Accounting</li>
                                        <li>Financial Reporting</li>
                                        <li>Corporate Legal Advisory & SECP Compliance</li>
                                        <li>Bank Financing facilitation</li>
                                        <li>Tax Returns & advisory</li>
                                        <li>Auditing</li>
                                        <li>Iintellectual property rights management (IPO)</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 d-flex">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center mt-5"
                                style="background-image:url({{ asset('assets/images/fintech.png') }});">
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
                                style="background-image:url({{ asset('assets/images/mylaptop.webp') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5">
                        <div class="py-md-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h5 style="font-size: 24px; text-transform: capitalize; font-weight: 500;">
                                        Technology Solutions
                                    </h5>

                                    <ol style="padding-left:18px; margin-top:10px;">
                                        <li>Cloud based Payroll Software (EtimadHCM)</li>
                                        <li>Cloud based School Management Software</li>
                                        <li>Website Development</li>
                                        <li>Graphic Designing</li>
                                        <li>Performance Mgt. Systems</li>
                                        <li>Content Writing</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about-header-bar">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-12 text-center" style="    background: red;
    color: white;
    font-weight: bold;">
                        <span class="about-title">Price is important, so lets have a look at how we deal with it.</span>
                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb mt-3" id="four-column-section">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/team.jpeg') }});
                   background-size: cover;
                   background-position: center;
                   width: 100%;
                   padding-top: 80%;">
                            </div>
                        </div>
                    </div>


                    <!-- Next 4 columns: Heading + List (Vision / HR & Management Consultancy) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">1. HR & Management Consultancy</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Build an agile, compliant, and high-performing workforce</li>
                                <li>HR Policy Development – Labor law-aligned frameworks</li>
                                <li>Talent Acquisition – From entry-level to C-suite recruitment</li>
                                <li>Performance Management – Goal-driven evaluation systems</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Scalable retainers (employee count + service depth)</li>
                                <li>Project-based options (e.g., policy audits, litigation support)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="four-column-section">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/copy.jpeg') }});
                   background-size: cover;
                   background-position: center;
                   width: 100%;
                   padding-top: 80%;">
                            </div>
                        </div>
                    </div>


                    <!-- Next 4 columns: Heading + List (Vision / HR & Management Consultancy) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">2. Corporate Governance Services</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Navigate regulations with confidence</li>
                                <li>Company Incorporation & SECP Compliance – From startups to subsidiaries.</li>
                                <li>Contract Drafting & Review – Air-tight agreements for vendors, employees, and partners.
                                </li>
                                <li>Litigation & Dispute Resolution – Expert representation in labor, tax, and corporate
                                    courts.</li>
                                <li>Intellectual Property Protection – Trademarks, copyrights, and patents.</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Fixed fees for standard services (e.g., incorporation & Litigation).</li>
                                <li>Hourly based for Opinion Work & Drafting.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="four-column-section">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/rs.jpeg') }});
                               background-size: cover;
                               background-position: center;
                               width: 100%;
                               padding-top: 80%;">
                            </div>
                        </div>
                    </div>

                    <!-- Next 4 columns: Heading + List (Financial & Tax Advisory) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">3. Financial & Tax Advisory</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Precision-driven finance solutions for stability and growth.</li>
                                <li>Bookkeeping & Accounting – Accurate, real-time financial tracking.</li>
                                <li>Tax Planning & SECP Compliance – Avoid penalties, optimize returns.</li>
                                <li>Auditing & Reporting – Transparent, investor-ready financials.</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Retainer models (scaled by transaction volume and reporting complexity).</li>
                                <li>Custom pricing for specialized services (e.g., bank leasing, hybrid working, etc).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="four-column-section-4">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/laptop.jpeg') }});
                               background-size: cover;
                               background-position: center;
                               width: 100%;
                               padding-top: 80%;">
                            </div>
                        </div>
                    </div>

                    <!-- Next 4 columns: Heading + List (IT & Digital Solutions) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">4. IT & Digital Solutions</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Automate and streamline with cutting-edge technology.</li>
                                <li>EtimadHCM Payroll & HR Software – Zero-Error Payroll – Guided workflows for flawless
                                    processing.</li>
                                <li>100% Auto-Compliance – PF, EOBI, and tax calculations built-in.</li>
                                <li>All-in-One Platform – Payroll, attendance, expenses, and analytics.</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Tiered plans (based on features, employee count, and analytics needs).</li>
                                <li>Volume discounts for enterprises (500+ employees).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="four-column-section-5">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/guldan.jpeg') }});
                               background-size: cover;
                               background-position: center;
                               width: 100%;
                               padding-top: 80%;">
                            </div>
                        </div>
                    </div>

                    <!-- Next 4 columns: Heading + List (Corporate Housekeeping Services) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">5. Fresh & Tidy – Corporate Housekeeping Services &
                                Facility Management</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Elevate workplace hygiene and productivity.</li>
                                <li>Daily/Deep Cleaning – Certified staff using eco-friendly products.</li>
                                <li>Compliance with health/safety standards.</li>
                                <li>Staff Trainings (from hospitality trainers) to your existing staff members.</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Custom plans (based on square footage, frequency, and add-ons like 24/7 staffing).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="four-column-section-6">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <!-- First 4 columns: Image -->
                    <div class="col-md-4">
                        <div class="img-about img d-flex align-items-stretch" style="height: 100%;">
                            <div class="overlay"></div>
                            <div class="img d-flex align-self-stretch align-items-center"
                                style="background-image: url({{ asset('assets/images/humann.jpeg') }});
                               background-size: cover;
                               background-position: center;
                               width: 100%;
                               padding-top: 80%;">
                            </div>
                        </div>
                    </div>

                    <!-- Next 4 columns: Heading + List (Training & Event Management) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">6. Training & Event Management</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Elevate skills and brand impact.</li>
                                <li>Corporate Training Programs – Leadership Development | Compliance Workshops | Technical
                                    Upskilling.</li>
                                <li>Customized Events – Conferences | Product Launches | Team-Building Retreats.</li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        ul li::marker {
                            color: #38387a;
                            font-size: 20px;
                        }
                    </style>

                    <!-- Last 4 columns: Heading + List (Pricing) -->
                    <div class="col-md-4 pl-md-4">
                        <div class="heading-section ftco-animate">
                            <h2 style="font-size: 20px; color:#38387a">Pricing</h2>
                            <ul style="list-style-type: disc; padding-left: 20px; text-align:justify;">
                                <li>Per-participant pricing (training) or end-to-end event packages.</li>
                                <li>Grant-based models for donor projects.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <div class="page">

                <!-- POLICY & PROCEDURES DEVELOPMENT -->
                <div class="about-header-bar">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12 text-center"
                                style="    background: red;
    color: white;
    font-weight: bold;">
                                <span class="about-title">Policy & Procedures Development Services</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">

                    <!-- BASIC -->
                    <div class="col-4">
                        <div class="policy-box basic">
                            <div class="policy-title">Basic Policy</div>
                            <div class="policy-price">33K</div>
                            <div class="policy-feature">Basic Policies</div>
                            <div class="policy-feature">upto 1 time Customization</div>
                            <div class="policy-feature">1 Month Support</div>
                            <div class="policy-feature">Max. 3 Online Sessions for Support</div>
                        </div>
                    </div>

                    <!-- STANDARD -->
                    <div class="col-4">
                        <div class="policy-box standard">
                            <div class="policy-title">Standard Policy</div>
                            <div class="policy-price">66K</div>
                            <div class="policy-feature">Basic Policies + PMS & Rec</div>
                            <div class="policy-feature">upto 2 times Customizations</div>
                            <div class="policy-feature">2 Months Support</div>
                            <div class="policy-feature">Max. 5 online Sessions for Support</div>
                        </div>
                    </div>

                    <!-- PREMIUM -->
                    <div class="col-4">
                        <div class="policy-box premium">
                            <div class="policy-title">Premium Policy</div>
                            <div class="policy-price">99K</div>
                            <div class="policy-feature">Standard Policies + Industry Specific Policies</div>
                            <div class="policy-feature">upto 3 times Customizations</div>
                            <div class="policy-feature">3 Months Support</div>
                            <div class="policy-feature">Max. 7 online Sessions for Support</div>
                        </div>
                    </div>


                </div>




                <div class="about-header-bar mt-3">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12 text-center"
                                style="    background: red;
    color: white;
    font-weight: bold;">
                                <span class="about-title">Recruitment Services</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-2 justify-content-center">
                    <div class="col-md-8">
                        <div class="policy-box basic">
                            <p>
                                1. Monthly Positions: 1-5 [@Rs.50,000/- per position]<br>
                                2. Monthly Positions: 6-10 [@Rs.45,000/- per position]<br>
                                3. Monthly Positions: 11-20 [@Rs.40,000/- per position]<br>
                                4. Flat Rate over 20 positions: [@Rs.38,000/- per position]
                            </p>
                            <p style="font-size: 14px; color: #555;">
                                <strong>Note:</strong> These rates are for recruitment of regular office-based white collar
                                staff members under normal circumstances. For Blue Collar / Technical positions, or scarce
                                candidate situations, separate rates shall apply as per the business context of each
                                company.

                                <br>
                                <br>
                                Please also note that Recruitment for GM-level and above will
                                be charged separately at a fee equivalent to one month's
                                gross salary or more, as per the seniority of the candidate
                            </p>
                        </div>
                    </div>
                </div>



<div class="container my-5">

  <!-- Section Header -->
  <div class="text-center mb-4">
    <div class="about-header-bar mt-3">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12 text-center"
                                style="    background: red;
    color: white;
    font-weight: bold;">
                                <span class="about-title">HR Retainership Packages</span>
                            </div>
                        </div>
                    </div>
                </div>
    <p class="text-danger fw-semibold">Duration – Min. 12 Months</p>
    <p class="text-muted">
      Recruitment + Payroll Software + HR Policy Manual
    </p>
  </div>

  <div class="row g-4">

    <!-- HR-1 -->
    <div class="col-md-4">
      <div class="card retain-card text-center">
        <div class="card-header bg-primary text-white">
          <h5>HR-1</h5>
          <p class="mb-0">Rs. 75k / Month</p>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
            <li>👥 Sourcing: <strong>3 Positions</strong></li>
            <li>📘 HR Manual: <strong>Yes (Basic)</strong></li>
            <li>💻 Payroll Software: <strong>Yes</strong></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- HR-2 -->
    <div class="col-md-4">
      <div class="card retain-card text-center">
        <div class="card-header bg-primary text-white">
          <h5>HR-2</h5>
          <p class="mb-0">Rs. 125k / Month</p>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
            <li>👥 Sourcing: <strong>5 Positions</strong></li>
            <li>📘 HR Manual: <strong>Yes (Std)</strong></li>
            <li>💻 Payroll Software: <strong>Yes</strong></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- HR-3 -->
    <div class="col-md-4">
      <div class="card retain-card text-center">
        <div class="card-header bg-primary text-white">
          <h5>HR-3</h5>
          <p class="mb-0">Rs. 175k / Month</p>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
            <li>👥 Sourcing: <strong>7 Positions</strong></li>
            <li>📘 HR Manual: <strong>Yes (Prem)</strong></li>
            <li>💻 Payroll Software: <strong>Yes</strong></li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <!-- Why Packages -->
  <div class="row mt-5">
    <div class="col-md-6">
      <h5 class="fw-bold text-danger">Why Packages</h5>
      <ol class="ps-3">
        <li>All in One</li>
        <li>Economical</li>
        <li>Sourcing</li>
        <li>Software</li>
      </ol>
    </div>

    <div class="col-md-6">
      <p class="text-muted">
        We offer flexible monthly HR retainership services tailored to your
        business size — whether you’re a growing team of up to 20, an expanding
        company of 20–100, or a large organization of 100–500.
      </p>
    </div>
  </div>

</div>



            </div>





            <div class="about-header-bar mt-3">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-12 text-center"
                                style="    background: red;
    color: white;
    font-weight: bold;">
                                <span class="about-title">Additional Services</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-2 justify-content-center">
                    <div class="col-md-8">
                        <div class="policy-box basic">
                           <div class="row g-2 justify-content-center">
    <div class="col-md-8">

            <p>
                1) Provision of legal opinions on HR matters<br>
                2) Conducting employee engagement and satisfaction surveys<br>
                3) Assistance in labor and employment-related litigation<br>
                4) Drafting and vetting of HR policies and employment contracts<br>
                5) HR compliance audits and gap analysis<br>
                6) Representation before labor courts and regulatory authorities<br>
                7) Advisory on industrial relations and dispute resolution
            </p>
            <p style="font-size: 11px; color: #555;">
                <strong>Important Notes:</strong><br>
                8) All charges mentioned are exclusive of applicable taxes.<br>
                9) All services will be provided in line with the Standard Trading Conditions of Fias Associates Pvt. Ltd.
            </p>

            <div class="row justify-content-center mb-3">
    <div class="col-md-8 text-center">
        <p style="color: red; font-weight: bold; font-size: 14px; margin: 0;">
            "Together with our clients, we build a future where success is shared, growth is mutual, and every win is a win for all."
        </p>
    </div>
</div>

    </div>
</div>
                        </div>
                    </div>
                </div>



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
                                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
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
