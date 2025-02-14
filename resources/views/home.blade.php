@extends('common.app')
@section('title', 'WebHive - Home')
@section('main-content')
    <div class="parallax"></div>
    <div class="hero-section parent-section">
        <div class="container">
            <div class="hero-container">
                <div class="main-content">
                    <div class="heading-section">
                        <h3 class="sub-heading-1">IT Solution Agency</h3>
                        <h1 class="main-heading-1">Enhance Online Presence With Our <br />
                            <span>Optimum Solutions</span>
                        </h1>
                    </div>
                    <p>We offer full service digital media solutions.</p>
                    <button class="btn btn-cta-white">Get A Quote</button>
                </div>
                <div class="image-content"><img src="{{ asset('/img/image.png') }}" alt=""></div>
            </div>
        </div>
    </div>
    <div class="about-us-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-section">
                        <div class="img-sub-section-1">
                            <div class="image-canvas">
                                <img src="{{ asset('/img/image copy.png') }}" alt="">
                            </div>
                        </div>
                        <div class="img-sub-section-2">
                            <div class="image-canvas">
                                <img src="{{ asset('/img/image copy 2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="stats-ticker">
                            <h1 class="heading">450+</h1>
                            <p>Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-content">
                        <div class="heading-section">
                            <h3 class="sub-heading-1">About Us</h3>
                            <h1 class="main-heading-1">High-quality IT Services Provider Company
                            </h1>
                        </div>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="features-div">
                            <div class="single-feature-div">
                                <div class="feature-img-section">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="{{ asset('/img/business.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h1 class="main-heading">IT consulting
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet, </p>
                                </div>
                            </div>
                            <div class="single-feature-div">
                                <div class="feature-img-section">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="{{ asset('/img/cloud.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h1 class="main-heading">Managed IT Service
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet, </p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-cta">About Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why-us-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="heading-section">
                        <h3 class="sub-heading-1">Why Choose Us?</h3>
                        <h1 class="main-heading-1">boost your brand with it solutions</h1>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="feature-tile-parent">
                        <div class="feature-tile-child">
                            <img src="https://template-kit.evonicmedia.com/layout8/wp-content/uploads/2022/08/two-business-women-in-the-office-working.png"
                                class="feature-tile-image" alt="">
                            <div class="feature-tile-hover">
                                <div class="feature-tile-hover-content">
                                    <img src="{{ asset('img/quality.png') }}" alt="">
                                    <h2>Good Performance</h2>
                                    <p>Lorem Ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-tile-parent">
                        <div class="feature-tile-child">
                            <img src="https://template-kit.evonicmedia.com/layout8/wp-content/uploads/2022/08/Layer-724-1-1.png"
                                class="feature-tile-image" alt="">
                            <div class="feature-tile-hover">
                                <div class="feature-tile-hover-content">
                                    <img src="{{ asset('img/cog-wheel.png') }}" alt="">
                                    <h2>Higly Secure</h2>
                                    <p>Lorem Ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="feature-tile-parent">
                        <div class="feature-tile-child">
                            <img src="https://template-kit.evonicmedia.com/layout8/wp-content/uploads/2022/08/office-work-with-diverse-coworkers.png"
                                class="feature-tile-image" alt="">
                            <div class="feature-tile-hover">
                                <div class="feature-tile-hover-content">
                                    <img src="{{ asset('img/monitor.png') }}" alt="">
                                    <h2>Fast Development</h2>
                                    <p>Lorem Ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-services-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="parent-heading-section-1">
                        <div class="heading-section flex-child">
                            <h3 class="sub-heading-1">Our Services</h3>
                            <h1 class="main-heading-1">We are a premium agency that focus on quality</h1>
                        </div>
                        <div class="section-divider"></div>
                        <div class="para-section flex-child">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-service-parent-section">
                        <div class="single-service-child-section">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/development.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h1 class="main-heading-1">Website Development</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore </p>
                            <a href="#" class="btn btn-cta-white">Learn More</a>
                            <div class="slider-section">
                                <div class="slider-container">
                                    <div class="slider-tracker">
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/files.png') }}" alt="">
                                                <h3 class="title">Html</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/files (2).png') }}" alt="">
                                                <h3 class="title">Css</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/database (1).png') }}"
                                                    alt="">
                                                <h3 class="title">MySQL</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/files (3).png') }}" alt="">
                                                <h3 class="title">PHP</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/angularjs.png') }}" alt="">
                                                <h3 class="title">Angular</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/atom.png') }}" alt="">
                                                <h3 class="title">React</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-service-parent-section">
                        <div class="single-service-child-section">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/ux-design.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h1 class="main-heading-1">UI / UX Design</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore </p>
                            <a href="#" class="btn btn-cta-white">Learn More</a>
                            <div class="slider-section">
                                <div class="slider-container">
                                    <div class="slider-tracker">
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/digital/logo.png') }}" alt="">
                                                <h3 class="title">Logo</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/digital/bullhorn.png') }}" alt="">
                                                <h3 class="title">DM</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/digital/seo.png') }}" alt="">
                                                <h3 class="title">Seo</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/files (3).png') }}" alt="">
                                                <h3 class="title">PHP</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/angularjs.png') }}" alt="">
                                                <h3 class="title">Angular</h3>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img-section">
                                                <img src="{{ asset('/img/web-services/atom.png') }}" alt="">
                                                <h3 class="title">React</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12" style="display: flex; justify-content: center;">
                    <a href="#" class="btn btn-cta-white" style="margin: 0 auto;">View Services</a>
                </div>
            </div>
            {{-- <div class="stats-ticker-section">
                <div class="single-stat-ticker">
                    <div class="feature-img-section">
                        <div class="outer">
                            <div class="inner">
                                <img src="{{ asset('/img/ux-design.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="stats-detail">
                        <h1>200+</h1>
                        <p>Successfull Projects</p>
                    </div>
                </div>
                <div class="single-stat-ticker">
                    <div class="feature-img-section">
                        <div class="outer">
                            <div class="inner">
                                <img src="{{ asset('/img/ux-design.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="stats-detail">
                        <h1>200+</h1>
                        <p>Successfull Projects</p>
                    </div>
                </div>
                <div class="single-stat-ticker">
                    <div class="feature-img-section">
                        <div class="outer">
                            <div class="inner">
                                <img src="{{ asset('/img/ux-design.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="stats-detail">
                        <h1>200+</h1>
                        <p>Successfull Projects</p>
                    </div>
                </div>
                <div class="single-stat-ticker">
                    <div class="feature-img-section">
                        <div class="outer">
                            <div class="inner">
                                <img src="{{ asset('/img/ux-design.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="stats-detail">
                        <h1>200+</h1>
                        <p>Successfull Projects</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="pricing-plan-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h3 class="sub-heading-1">Why Choose Us?</h3>
                        <h1 class="main-heading-1">boost your brand with it solutions</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="stats-ticker-section">
                        <div class="single-stat-ticker">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/closure.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="stats-detail">
                                <h1>200+</h1>
                                <p>Successfull Projects</p>
                            </div>
                        </div>
                        <div class="single-stat-ticker">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/customer-service.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="stats-detail">
                                <h1>100+</h1>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="single-stat-ticker">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/clipboard.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="stats-detail">
                                <h1>650+</h1>
                                <p>Task Completed</p>
                            </div>
                        </div>
                        <div class="single-stat-ticker">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/infrastructure.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="stats-detail">
                                <h1>10+</h1>
                                <p>Industry Served</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="parent-heading-section-1">
                        <div class="heading-section flex-child">
                            <h3 class="sub-heading-1">Our Services</h3>
                            <h1 class="main-heading-1">We are a premium agency that focus on quality</h1>
                        </div>
                        <div class="section-divider"></div>
                        <div class="para-section flex-child">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing-plan-parent">
                        <div class="top-section">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/check-list.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h3 class="plan-title">Corporate</h3>
                        </div>
                        <div class="bottom-section">
                            <h1 class="plan-price"><span style="font-size: 40px;">&#8377;</span>7000</h1>
                            <div class="plan-details">
                                <ul>
                                    <li>Demo File</li>
                                    <li>Update</li>
                                    <li>File Compressed</li>
                                    <li>Commercial Use</li>
                                    <li>Support</li>
                                    <li>2 Data Base</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-cta">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing-plan-parent">
                        <div class="top-section">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/check-list.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h3 class="plan-title">E-Commerce</h3>
                        </div>
                        <div class="bottom-section">
                            <h1 class="plan-price"><span style="font-size: 40px;">&#8377;</span>7000</h1>
                            <div class="plan-details">
                                <ul>
                                    <li>Demo File</li>
                                    <li>Update</li>
                                    <li>File Compressed</li>
                                    <li>Commercial Use</li>
                                    <li>Support</li>
                                    <li>2 Data Base</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-cta">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing-plan-parent">
                        <div class="top-section">
                            <div class="feature-img-section">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="{{ asset('/img/check-list.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h3 class="plan-title">Custom</h3>
                        </div>
                        <div class="bottom-section">
                            <h1 class="plan-price"><span style="font-size: 40px;">&#8377;</span>7000</h1>
                            <div class="plan-details">
                                <ul>
                                    <li>Demo File</li>
                                    <li>Update</li>
                                    <li>File Compressed</li>
                                    <li>Commercial Use</li>
                                    <li>Support</li>
                                    <li>2 Data Base</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-cta">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h3 class="sub-heading-1">Contact Us</h3>
                        <h1 class="main-heading-1">Lets Get Started your project</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-us-form-section">
                        <div class="contact-details">
                            <h1>Send Us A Message</h1>
                            <p>Get in touch with us to see how our company can help you to grow your business online.
                            </p>
                            <div class="contact-info">
                                <div class="single-contact">
                                    <div class="feature-img-section">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="{{ asset('/img/email.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-type">
                                        <h1>Email</h1>
                                        <p>yourname@email.com</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="feature-img-section">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="{{ asset('/img/phone-call.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-type">
                                        <h1>Phone</h1>
                                        <p>+91-9717113636</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="feature-img-section">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="{{ asset('/img/location.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-type">
                                        <h1>Location</h1>
                                        <p>Delhi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="form-fields">
                                    <input type="text" name="fullName" class="form-control"
                                        placeholder="Full Name..." required />
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Email Address..." required />
                                </div>
                                <div class="form-fields">
                                    <input type="number" name="phone "class="form-control"
                                        placeholder="Phone Number..." required />
                                    <select name="service" class="form-control" required>
                                        <option value="">-----Select Service-----</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="ui-ux-design">UI / UX Design</option>
                                        <option value="digital-marketing">Digital Marketing</option>
                                    </select>
                                </div>
                                <div class="form-fields">
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Subject..."required />
                                </div>
                                <div class="form-fields">
                                    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Any Comments...."
                                        required></textarea>
                                </div>
                                <div class="form-fields">
                                    <button type="submit" class="btn btn-cta">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqs-section parent-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="parent-heading-section-1">
                        <div class="heading-section flex-child">
                            <h3 class="sub-heading-1">FAQ's</h3>
                            <h1 class="main-heading-1">All Your Queries are answered</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                        <div class="section-divider"></div>
                        <div class="para-section flex-child">
                            <div class="faqs-parent-section">
                                <div class="faqs-single">
                                    <button data-toggle="collapse" data-target="#faq-1" aria-expanded="false">How long
                                        should a business plan
                                        be? <span><i class="fa-solid fa-caret-down"></i></span></button>
                                    <div id="faq-1" class="collapse single-faq-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </div>
                                </div>
                                <div class="faqs-single">
                                    <button data-toggle="collapse" data-target="#faq-2" aria-expanded="false">Do i need a
                                        business
                                        plan? <span><i class="fa-solid fa-caret-down"></i></span></button>
                                    <div id="faq-2" class="collapse single-faq-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </div>
                                </div>
                                <div class="faqs-single">
                                    <button data-toggle="collapse" data-target="#faq-3" aria-expanded="false">Where do i
                                        start? <span><i class="fa-solid fa-caret-down"></i></span></button>
                                    <div id="faq-3" class="collapse single-faq-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
