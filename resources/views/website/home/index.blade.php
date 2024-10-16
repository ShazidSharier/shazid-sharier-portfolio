@extends('website.master')
@section('body')
    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <img src="{{ asset('/') }}website/assets/images/shazid.png" alt="Logo">
                        <span class="designation">PHP/Laravel Developer</span>
                    </div>
                    <img class="me" src="{{ asset('/') }}website/assets/images/shazid2.jpg" alt="Me">
                    <h2 class="email">drzratul@gmail.com</h2>
                    <h2 class="address">Basila, Mohammadpur, Dhaka.</h2>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href="https://www.linkedin.com/in/shazid-sharier-1a9259279/"><i class="lab la-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/ShazidSharier"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                </div>
                <section class="hero-section page-section scroll-to-page" id="home">
                    <div class="custom-container">
                        <div class="hero-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom"><i class="las la-home"></i> Introduce</h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Say Hi from <span>Shazid</span>, PHP/Laravel Developer</h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                            <a href="#portfolio"
                               class="go-to-project-btn scroll-to scroll-animation"
                               data-animation="rotate_up">
                                <img src="{{ asset('/') }}website/assets//images/round-text.png" alt="Rounded text">
                                <i class="las la-arrow-down"></i>
                            </a>

                            <div class="facts d-flex">
                                <div class="left scroll-animation" data-animation="fade_from_left">
                                    <h1>1+</h1>
                                    <p>Years of <br>Experience</p>
                                </div>
                                <div class="right scroll-animation" data-animation="fade_from_right">
                                    <h1>12+</h1>
                                    <p>projects completed on <br>Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-area page-section scroll-to-page" id="about">
                    <div class="custom-container">
                        <div class="about-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-user"></i> About
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Every great design begin with<br>
                                    an even <span>better story</span></h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">Since beginning my journey as a freelance designer nearly 6 years ago,
                                I've done remote work for agencies, design various template as a Graphic designer. I'm quietly confident, naturally curious, and
                                perpetually working on improving my chopsone design problem at a time. I am CSE background student. I love design from my childhood.
                                During versity time I like design most of the time, some time I practice c, c++. I didn't like to coding much, it was kind of booring work for me.
                                One day there is something happen to me. I'm thinking about my senior, friend and their coding life. If they can make any site by coding, why am I not?
                                From this curiosity I am starting coding myself. I start with PHP, Html and Css. Keep practicing myself to make verious design with this thing.
                                In 2024, I found the institute of BITM from source and I started the cours "Web design & development using Laravel & Vue" under Habibur Rahman. Who
                                is my best trainer in my life. I just started to love coding life. The course duration was 7 month. This is my story to become a coder. Now this time
                                I like to coding all time. Coding is my life. That's all about me.
                                </p>
                        </div>
                    </div>
                </section>
                <section class="resume-area page-section scroll-to-page" id="resume">
                    <div class="custom-container">
                        <div class="resume-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-briefcase"></i> Resume
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Institute</h1>
                            </div>
                            <div class="resume-timeline">
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2024 - Present</span>
                                    <h2>BITM</h2>
                                    <p>12 Kawran Bazar, Dhaka -1215</p>
                                    <h2>FullStack Developer</h2>
                                    <p>Laravel & VueJs, BITM, Dhaka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="services-area page-section scroll-to-page" id="services">
                    <div class="custom-container">
                        <div class="services-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom"><i class="las la-stream"></i> Services</h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Experience</span></h1>
                            </div>

                            <div class="services-items">
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>Website Design</h2>
                                    <p>I created digital products with unique ideas use Laravel Framework</p>
                                    <span class="projects">10 Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-code"></i>
                                    <h2>Development</h2>
                                    <p>I build website go live with Laravel</p>
                                    <span class="projects">10+ Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>SEO/Marketing</h2>
                                    <p>Increase the traffic for website with SEO optimized</p>
                                    <span class="projects">10 Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="skills-area page-section scroll-to-page" id="skills">
                    <div class="custom-container">
                        <div class="skills-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-shapes"></i> my skills
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Advantages</span></h1>
                            </div>
                            <div class="row skills text-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/laravel.png" alt="Laravel/PHP">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">Laravel</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/php2.png" alt="Php">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">Php</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/v.png" alt="VueJs">
                                            <h1 class="percent">70%</h1>
                                        </div>
                                        <p class="name">Vue Js</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/ajax1.png" alt="Ajax">
                                            <h1 class="percent">70%</h1>
                                        </div>
                                        <p class="name">Ajax</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/html1.png" alt="Html5">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">Html 5</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="{{ asset('/') }}website/assets/images/css1.png" alt="Css">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">Css</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                    <div class="custom-container">
                        <div class="portfolio-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom"><i class="las la-grip-vertical"></i> portfolio</h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                            </div>
                            <div class="row portfolio-items">
                                @foreach($webs as $web)
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-full">
                                        <div class="portfolio-item-inner">
                                            <a href="{{ asset($web->image) }}" data-lightbox="example-1">
                                                <img src="{{ asset($web->image) }}" alt="Portfolio">
                                            </a>
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="#">PHP/laravel</a>
                                                </li>
                                                <li>
                                                    <a href="#">Js</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="{{asset($web->url)}}">Ecommerce</a></h2>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
{{--                <section class="contact-area page-section scroll-content" id="contact">--}}
{{--                    <div class="custom-container">--}}
{{--                        <div class="contact-content content-width">--}}
{{--                            <div class="section-header">--}}
{{--                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">--}}
{{--                                    <i class="las la-dollar-sign"></i> contact--}}
{{--                                </h4>--}}
{{--                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>--}}
{{--                            </div>--}}
{{--                            <h3 class="scroll-animation" data-animation="fade_from_bottom">drzratul@gmail.com</h3>--}}
{{--                            <p id="required-msg">* Marked fields are required to fill.</p>--}}
{{--                            <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="https://wpriverthemes.com/HTML/drake/mailer.php">--}}
{{--                                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">--}}
{{--                                    Your message was sent successfully.--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="full-name">full Name <sup>*</sup></label>--}}
{{--                                            <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="email">Email <sup>*</sup></label>--}}
{{--                                            <input type="email" name="email" id="email" placeholder="Your email adress">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="phone-number">phone <span>(optional)</span></label>--}}
{{--                                            <input type="text" name="phone-number" id="phone-number" placeholder="Your number phone">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="subject">subject <sup>*</sup></label>--}}
{{--                                            <select name="subject" id="subject">--}}
{{--                                                <option value="">Select a subject</option>--}}
{{--                                                <option value="subject1">Subject 1</option>--}}
{{--                                                <option value="subject2">Subject 2</option>--}}
{{--                                                <option value="subject3">Subject 3</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="budget">your budget <span>(optional)</span></label>--}}
{{--                                            <input type="number" name="budget" id="budget" placeholder="A range budget for your project">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <label for="message">message</label>--}}
{{--                                            <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="input-group upload-attachment">--}}
{{--                                            <div>--}}
{{--                                                <label for="upload-attachment">--}}
{{--                                                    <i class="las la-cloud-upload-alt"></i> add an attachment--}}
{{--                                                    <input type="file" name="file" id="upload-attachment">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="input-group submit-btn-wrap">--}}
{{--                                            <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
            </div>
        </div>
    </main>
@endsection
