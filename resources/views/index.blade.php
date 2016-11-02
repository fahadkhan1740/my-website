@extends('layouts')

@section('title','Fahad Khan - Web Developer')

@section('content')
    <script>
        $(function(){
            $(".element").typed({
                strings: ["Hello I'm <br> Fahad Khan <br> <span class=\"title\">Web Developer</span>"],
                typeSpeed: 30,
                showCursor: false
            });
        });
    </script>
    <div id="container" class="container">
        <!-- Left Menu / Logo-->
        <aside class="menu" id="menu">
            <div class="logo">
                <!-- Logo image-->
                <img src="images/logo.png" width="140" height="140" alt=""/>
                <!-- Logo name-->
                <span>Fahad Khan</span></div>
            <!-- Mobile Navigation-->
            <a href="#menu1" class="menu-link"></a>
            <!-- Left Navigation-->
            <nav id="menu1" role="navigation">
                <a href="#chapterintroduction">
                    <span id="link_introduction" class="active">Home</span></a>
                <a href="#chapterabout">
                    <span id="link_about">About</span>
                </a>
                <a href="#chapterskills">
                    <span id="link_skills">Skills</span>
                </a>
                <a href="#chapterexperience">
                    <span id="link_experience">Experience</span>
                </a>
                <a href="#chaptereducation">
                    <span id="link_education">Education</span></a>
                <a href="#chapterportfolio">
                    <span id="link_portfolio">Portfolio</span>
                </a>
                <a href="#chaptercontact">
                    <span id="link_contact">Contact</span>
                </a>
            </nav>
            <br>
            <div class="copyright"> © Fahad Khan.<br>
                All Rights Reserved.
            </div>
        </aside>
        <!-- Go to top link for mobile device -->
        <a href="#menu" class="totop-link">Go to the top</a>
        <div class="content-scroller">
            <div class="content-wrapper">

                <!-- Introduction -->
                <article class="content introduction noscroll" id="chapterintroduction">
                    <div class="inner">
                        <h2>
                            <div class="element">

                            </div>
                        </h2>
                    </div>
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item"><img src="http://placehold.it/804x990" alt=""/></div>
                        <div class="item"><img src="http://placehold.it/804x990" alt=""/></div>
                        <div class="item"><img src="http://placehold.it/804x990" alt=""/></div>
                    </div>
                </article>

                <!-- About -->
                <article class="content about white-bg" id="chapterabout">
                    <div class="inner">
                        <h2>About</h2>
                        <div class="title-divider"></div>
                        <div class="about-con">
                            <ul>
                                <li>Name: Fahad Khan</li>
                                <li>Email: <a href="mailto:fahadkhan1740@outlook.com">fahadkhan1740@outlook.com</a></li>
                                {{--<li>Phone: (123) - 456-7890</li>--}}
                                <li>Date of birth: 4 December 1993</li>
                                <li>Address: Shaheen Bagh, Jamia Nagar, New Delhi.</li>
                                {{--<li>Nationality: United States</li>--}}
                            </ul>
                            <h3>Professional Profile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                                aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                                elementum. Suspendisse id neque a nibh mollis blandit.<br>
                            </p>
                            <a href="https://dl.dropboxusercontent.com/s/38nz45gxbmg0bxk/Fahad%20Khan%20CV.pdf?dl=0" class="button">Download resume as PDF format</a>
                        </div>
                    </div>
                </article>

                <!-- Skills -->
                <article class="content skills gray-bg" id="chapterskills">
                    <div class="inner">
                        <h2>Skills</h2>
                        <div class="title-divider"></div>
                        <h3>Just My Awesome Skills</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                            aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus
                            dignissim.</p>
                        <div class="skills-con">
                            <div class="container-sub margin-top50">
                                <div class="row">
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="60">
                                                <span class="percent"></span>
                                                <img src="images/laravel-logo.png" alt="laravel logo" style="margin-left: 8px;margin-top: 30px;">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="50">
                                                <span class="percent"></span>
                                                <img src="images/jquery-logo.png" alt="jquery logo" style="margin-top: 30px;">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="50">
                                                <span class="percent"></span>
                                                <img src="images/mysql-logo.png" alt="mysql logo" style="margin-top: 25px; height: 75px;">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="60">
                                                <span class="percent"></span>
                                                <img src="images/git-logo.png" alt="git logo" style="margin-top: 40px;">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="70">
                                                <span class="percent"></span>
                                                <img src="images/html-css-logo.svg" alt="html & css logo" style="margin-top: 20px;">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 margin-bottom30">
                                        <div class="col-6">
                                            <span class="chart" data-percent="55">
                                                <span class="percent"></span>
                                                <img src="images/bootstrap-logo.png" alt="bootstrap logo" style="margin-top: 40px;">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="container-sub skill-list">
                                <div class="row">
                                    <h3>Knowledge</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed
                                        quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur
                                        vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.
                                        Quisque varius eros ac purus dignissim.</p>
                                    <div class="col-4 margin-top10">
                                        <ul>
                                            <li>Bootstrap</li>
                                            <li>Google Material Design</li>
                                            <li>PhpStorm</li>
                                            <li>Nginx</li>
                                            <li>Ubuntu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="container-sub">
                                <div class="row">
                                    <h3>Language Skills</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed
                                        quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur
                                        vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.
                                        Quisque varius eros ac purus dignissim.</p>
                                    <div class="progressbar-main margin-top50">
                                        <div class="progress-bar-description">English</div>
                                        <div id="progressBar" class="progress">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                    <div class="progressbar-main margin-top40">
                                        <div class="progress-bar-description">Urdu</div>
                                        <div id="progressBar2" class="progress">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                    <div class="progressbar-main margin-top40">
                                        <div class="progress-bar-description">Hindi</div>
                                        <div id="progressBar3" class="progress">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Experience -->
                <article class="content experience white-bg" id="chapterexperience">
                    <div class="inner">
                        <h2>Experience</h2>
                        <div class="title-divider"></div>
                        <h3>9 Months Experience!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                            aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus
                            dignissim.</p>
                        <div class="experience-con">
                            <div class="container-sub">
                                <div class="full-divider"></div>
                                <div class="row">
                                    <div class="experience-details">
                                        <div class="col-6 margin-bottom50 margin-top50">
                                            <div class="flot-left">
                                                <h5>Digital IP Insights</h5>
                                                <h4>Software Developer <br>Trainee</h4>
                                                <span>Since May 2016</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec
                                            gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis
                                            feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus
                                            pretium quam.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    <div class="experience-details">
                                        <div class="col-6 margin-bottom50 margin-top50" style="width: 329.5px;">
                                            <div class="flot-left">
                                                <h5>Niswaarth Foundation</h5>
                                                <h4>Web Developer</h4>
                                                <span>March 2016 - May 2016</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                                            Developed and deployed an NGO website using Bootstrap.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    <div class="experience-details">
                                        <div class="col-6 margin-bottom50 margin-top50" style="width: 329.5px;">
                                            <div class="flot-left">
                                                <h5>Bodyworks</h5>
                                                <h4>Web Developer</h4>
                                                <span>July 2015</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                                            Developed and deployed an e-commerce website using Opencart.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    <div class="experience-details">
                                        <div class="col-6 margin-bottom50 margin-top50" style="width: 329.5px;">
                                            <div class="flot-left">
                                                <h5>Silverline Productions</h5>
                                                <h4>Web Developer</h4>
                                                <span>June 2015</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                                            Developed and deployed Child photography agency website using Bootstrap.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Education -->
                <article class="content education gray-bg" id="chaptereducation">
                    <div class="inner">
                        <h2>Education</h2>
                        <div class="title-divider"></div>
                        <h3>Just My Education</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                            aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus
                            dignissim.</p>
                        <div class="education-con">
                            <div class="container-sub">
                                <div class="full-divider"></div>
                                <div class="row">
                                    <div class="education-details">
                                        <div class="col-6 margin-bottom50 margin-top50">
                                            <div class="flot-left">
                                                <h5>Jamia Millia Islamia</h5>
                                                <h4>Post Graduate Diploma in Computer Application</h4>
                                                <span>2015 - 2016</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec
                                            gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis
                                            feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus
                                            pretium quam.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    <div class="education-details">
                                        <div class="col-6 margin-bottom50 margin-top50">
                                            <div class="flot-left">
                                                <h5>Institute of Innovation in Technology & Management</h5>
                                                <h4>Bachelor of Computer Applications</h4>
                                                <span>2012 - 2015</span></div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec
                                            gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis
                                            feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus
                                            pretium quam.
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Pportfolio -->
                <article class="content portfolio white-bg" id="chapterportfolio">
                    <div class="inner">
                        <h2>Portfolio</h2>
                        <div class="title-divider"></div>
                        <h3>Our portfolio features a variety of projects and services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                            aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus
                            dignissim.</p>
                        <div class="portfolio-con">
                            <div class="container-sub margin-top50">
                                <div class="row">
                                    <div id="grid-gallery" class="grid-gallery">
                                        <section class="grid-wrap">
                                            <ul class="grid">
                                                <li>
                                                    <figure>
                                                        <img src="http://placehold.it/700x475" alt=""/>
                                                        <figcaption>
                                                            <div class="figcaption-details">
                                                                <img src="images/icon-plus.png" height="82" width="82" alt=""/>
                                                                <h3>Crawler</h3>
                                                                <span>Web App</span></div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="http://placehold.it/700x475" alt=""/>
                                                        <figcaption>
                                                            <div class="figcaption-details">
                                                                <img src="images/icon-plus.png" height="82" width="82" alt=""/>
                                                                <h3>Niswaarth Foundation</h3>
                                                                <span>NGO Website</span></div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="http://placehold.it/700x475" alt=""/>
                                                        <figcaption>
                                                            <div class="figcaption-details">
                                                                <img src="images/icon-plus.png" height="82" width="82" alt=""/>
                                                                <h3>White Streak</h3>
                                                                <span>Child Photography Website</span></div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </section>

                                        <!-- Lightbox Popup -->
                                        <section class="slideshow">
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <figcaption>
                                                            <h3>Crawler</h3>
                                                            <span>Web App</span>
                                                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr,
                                                                mustache sriracha tattooed cray aute slow-carb placeat
                                                                delectus. Letterpress asymmetrical fanny pack art party
                                                                est pour-over skateboard anim quis, ullamco craft
                                                                beer.</p>
                                                        </figcaption>
                                                        <div id="owl-demo1" class="owl-carousel">
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                        </div>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <figcaption>
                                                            <h3>Niswaarth Foundation</h3>
                                                            <span>NGO</span>
                                                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr,
                                                                mustache sriracha tattooed cray aute slow-carb placeat
                                                                delectus. Letterpress asymmetrical fanny pack art party
                                                                est pour-over skateboard anim quis, ullamco craft
                                                                beer.</p>
                                                        </figcaption>
                                                        <div id="owl-demo1" class="owl-carousel">
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                        </div>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <figcaption>
                                                            <h3>White Streak</h3>
                                                            <span>Child Photography Agency Website</span>
                                                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr,
                                                                mustache sriracha tattooed cray aute slow-carb placeat
                                                                delectus. Letterpress asymmetrical fanny pack art party
                                                                est pour-over skateboard anim quis, ullamco craft
                                                                beer.</p>
                                                        </figcaption>
                                                        <div id="owl-demo2" class="owl-carousel">
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                            <div class="item"><img src="http://placehold.it/700x475"
                                                                                   alt=""/></div>
                                                        </div>
                                                    </figure>
                                                </li>

                                            </ul>
                                            <nav><span class="fa nav-prev"></span> <span class="fa nav-next"></span>
                                                <span class="fa nav-close"></span></nav>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Contact -->
                <article class="content contact gray-bg" id="chaptercontact">
                    <div class="inner">
                        <h2>Contact</h2>
                        <div class="title-divider"></div>
                        <h3>Let's Keep In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus
                            aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum
                            elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus
                            dignissim.</p>
                        <div class="full-divider"></div>
                        <div class="contact-con margin-top50">
                            <div class="container-sub">
                                <div class="row">
                                    <div class="contact-details">
                                        <div class="col-6">
                                            <div class="contact-text">
                                                <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="flot-left"><strong>Fahad Khan</strong><br>
                                                    Shaheen Bagh, Jamia Nagar <br>
                                                    New Delhi
                                                </div>
                                            </div>
                                            <div class="contact-text">
                                                <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                                                <div class="flot-left"><strong>Email</strong><br>
                                                    <a href="mailto:fahadkhan1740@outlook.com">fahadkhan1740@outlook.com</a></div>
                                            </div>
                                        </div>
                                        <div class="col-6 m-margin-top30">
                                            <h3>I'm also on Social Networks</h3>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem
                                            sed quam tempus aliquet vitae eget dolor.
                                            <div class="contact-social margin-top30">
                                                <a href="https://www.facebook.com/fahadkhan1740" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a href="https://twitter.com/fahadkhan1740" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="https://github.com/fahadkhan1740" target="_blank">
                                                    <i class="fa fa-github"></i>
                                                </a>
                                                <a href="https://in.linkedin.com/in/fahadkhan1740" target="_blank">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="container-sub">
                                <div class="row">
                                    <div class="contact-form">
                                        <h3>Drop Me a Line</h3>
                                        <form id="form1" name="form1" method="post">
                                            <input name="name" type="text" id="name" placeholder="Your Name..."/>
                                            <input name="email" type="text" id="email" placeholder="Your Email..."/>
                                            <textarea name="message" id="message" cols="45" rows="5"
                                                      placeholder="Your Message..."></textarea>
                                            <input type="submit" name="button" id="button" value="say hello!">
                                            <div id="successmsg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Introduction -->
                <article class="content introduction-end" id="chapterthankyou">
                    <div class="inner">
                        <div class="introduction-end-con margin-top50">
                            <h3><strong>Andrew Smith</strong></h3>
                            <div id="rotate" class="rotate">
                                <div><span>awesome.</span></div>
                                <div><span>invincible.</span></div>
                                <div><span>unbeatable.</span></div>
                                <div><span>indestructible.</span></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!-- content-wrapper -->
        </div>
        <!-- content-scroller -->
    </div>

@endsection
