<?php include "header.php"?>

<nav class="main-navigation-wrapper bg-white lg:bg-transparent">
    <div class="container">
        <div class="main-navigation flex justify-between content-center items-center flex-wrap py-4">
            <div class="logo ">
                <img src="assets/img/iroshandezilva-logo.svg">
            </div>
            <button class="navbar-toggler menu ripplemenu block lg:hidden">
                <svg viewBox="0 0 64 48">
                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                </svg>
            </button>
            <div class="navigation-wrapper flex content-center flex-wrap hidden lg:block">
                <div class="navigation">
                    <div class="menu-wrapper flex">
                        <div class="menu-item active k-hover1"><a href="/">Home</a></div>
                        <div class="menu-item"><a href="#aboutme"> About Me</a></div>
                        <div class="menu-item"><a href="#portfolio">Portfolio</a></div>
                        <div class="menu-item"><a href="#contactme">Contact Me</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="mobilenav-overlay ">
    <div class="mobilenav-content container">
        <div class="mobilenav-wrapper">
            <div class="mobile-menu flex">
                <div class="mobile-menu-item"><a href="/">Home</a></div>
                <div class="mobile-menu-item"><a href="#aboutme"> About Me</a></div>
                <div class="mobile-menu-item"><a href="#portfolio">Portfolio</a></div>
                <div class="mobile-menu-item"><a href="#contactme">Contact Me</a></div>
            </div>
        </div>
        <div class="mobilenav-social text-center">
            <a class="btn " href="mailto:hello@iroshandezilva.com">hello@iroshandezilva.com</a>
            <div class="flex justify-center mt-5">
                <div class="social-item">
                    <a href="https://www.facebook.com/iroshandezilva/"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="social-item ">
                    <a href="https://www.instagram.com/iroshandezilva/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="social-item">
                    <a href="https://www.linkedin.com/in/iroshandezilva/"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="social-item ">
                    <a href="https://dribbble.com/iroshandezilva"><i class="fab fa-dribbble"></i></a>
                </div>
                <div class="social-item ">
                    <a href="https://www.behance.net/iroshandezilva"><i class="fab fa-behance"></i></a>
                </div>
                <div class="social-item ">
                    <a href="https://github.com/iroshandezilva/"><i class="fab fa-github-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-one relative ">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="w-full lg:w-7/12 mx-auto relative">
                <div class="landing-img-wrapper">
                    <div class="landing-img">
                        <img src="assets/img/iroshandezilva-img-1.webp">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="hi-wrapper">
                    <div class="hi-content card absolute w-10/12 xl:w-3/12 md:w-5/12  lg:w-4/12 flex top  items-center  justify-center">
                        <div class="w-3/12 mr-3">
                            <div class="text-6xl">👋🏻</div>
                        </div>
                        <div class="w-9/12">
                            <small>Hello, I am</small>
                            <h5 class="font-proxima-md size text-2xl">Iroshan De Zilva</h5>
                        </div>
                    </div>
                </div>
                <div claas="hi-discription-wrapper">
                    <div class="hi-discription card absolute w-11/12 lg:w-4/12 md:w-8/12">
                        <p>Reach your business goals with excellent user experience. Let’s start working on your awesome
                            web or iOS app.</p>
                    </div>
                </div>
            </div>
            <div class="landing-social-wrapper hidden lg:block">
                <div class="landing-social absolute top-0 right-0 h-full flex items-center">
                    <div class="landing-social-content relative  mr-8">
                        <div class="flex flex-col">
                            <div class="social-item">
                                <a href="https://www.facebook.com/iroshandezilva/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="social-item ">
                                <a href="https://www.instagram.com/iroshandezilva/"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="social-item">
                                <a href="https://www.linkedin.com/in/iroshandezilva/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="social-item ">
                                <a href="https://dribbble.com/iroshandezilva"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <div class="social-item ">
                                <a href="https://www.behance.net/iroshandezilva"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="social-item ">
                                <a href="https://github.com/iroshandezilva/"><i class="fab fa-github-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-two relative bg-white py-70">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title">
                    <small class="text-base ">How i work</small>
                    <h2 class="font-proxima-bl text-title mt-3">Design Process</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h4 class="font-proxima-md text-4xl mb-5">Strategy</h4>
                        <h6 class="font-proxima-md">Ask first.</h6>
                        <p>Before jumping into designing I always make sure that we’re asking the right questions and
                            trying to accomplish the right challenges. This stage includes market research, competitive
                            analyses, consulting and exploring possible solutions.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h4 class="font-proxima-md text-4xl mb-5">Design</h4>
                        <h6 class="font-proxima-md">Problem solving.</h6>
                        <p>At the end of this phase you’ll have a pixel perfect design for your app or website. During
                            the transition from wireframes into the final design I create prototypes simulating final
                            end results before development.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h4 class="font-proxima-md text-4xl mb-5">Development</h4>
                        <h6 class="font-proxima-md">Bringing designs to life.</h6>
                        <p>Since I’m a designer who can code too, I can easily work in close collaboration with
                            developers up until the finish line and beyond. In case of web projects I also do front-end
                            development.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h4 class="font-proxima-md text-4xl mb-5">Quality assurance</h4>
                        <h6 class="font-proxima-md">Transparent process.</h6>
                        <p>Complete overview of my design process through regular meetings. After the initial design
                            versions I’m happy to do user testing with customers to ensure the best possible solutions
                            for their needs.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="section section-three relative py-70" id="portfolio">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title">
                    <small class="text-base ">RECENT WORK</small>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  lg:gap-20  gap-10">
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%206.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%207.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%208.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%206.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%2010.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-thum-wrapper">
                    <div class="portfolio-thum">
                        <div class="portfolio-thum-img">
                            <div class="img-container">
                                <div class="img-overlay"></div>
                                <img src="assets/img/Rectangle%2011.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-four relative py-70 bg-white">
    <div class="section-wrapper">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2  lg:gap-20 gap-5 ">
                <div class="col ">
                    <div class="title-wrapper inline-block mb-10">
                        <div class="title">
                            <small class="text-base ">My Clients</small>
                            <h2 class="font-proxima-bl text-title mt-3">We’re going to became partners for the long
                                run.</h2>
                        </div>
                    </div>
                </div>
                <div class="col flex items-center justify-center">
                    <div class="grid grid-cols-3  gap-10">
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/afq-marketing.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/afq-records.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/cipm.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/cortex.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/costa.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/freshworks-studio.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/hunterslk.png">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/Attempt_Imposible_logo.webp">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/solar-digital.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-five relative py-70" id="aboutme">
    <div class="section-wrapper">
        <div class="container">
            <div class="lg:flex">
                <div class="w-full lg:w-7/12">
                    <div class="about-me-content-wrapper">
                        <div class="about-me-content">
                            <div class="title-wrapper inline-block mb-10">
                                <div class="title">
                                    <small class="text-base ">Nice to meet you</small>
                                    <h2 class="font-proxima-bl text-title mt-3">Hi there, I’m Iroshan</h2>
                                </div>
                            </div>
                            <h4 class="font-proxima-lt mb-4">My name is Iroshan De Zilva. I work as a User Interface &
                                User Experience designer in Sri Lanka.</h4>
                            <p class="mb-4">Currently, I’m designing thoughtful experiences at <a href="">Bhasha</a>
                                with an amazing team to help designers, product managers and engineers collaborate
                                better together.</p>
                            <p class="mb-4">Outside of my full-time commitments, I work with a selected freelance client
                                base to create amazing products and solutions.</p>
                            <p class="mb-4">I’m passionate about building & designing delightful experiences with the
                                combination of business, marketing and UX/UI design to make customers and users
                                satisfied when they’re using products and services online.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-5/12 lg:px-40 px-10 pt-10">
                    <div class="connect-withme">
                        <h5 class="">Stay up-to-date</h5>
                        <p class="mb-5"><b>Hint:</b>I’m especially active on Instagram and Twitter.</p>
                        <div class="social-media-wrapper">
                            <div class="social-item">
                                <a href="https://www.facebook.com/iroshandezilva/"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://www.instagram.com/iroshandezilva/"><i class="fab fa-instagram"></i> Instagram</a>
                            </div>
                            <div class="social-item">
                                <a href="https://www.linkedin.com/in/iroshandezilva/"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://dribbble.com/iroshandezilva"><i class="fab fa-dribbble"></i> Dribble</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://www.behance.net/iroshandezilva"><i class="fab fa-behance"></i> Behance</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://github.com/iroshandezilva/"><i class="fab fa-github-alt"></i> Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-six relative py-70 bg-white text-center" id="contactme">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title ">
                    <small class="text-base ">Get in touch</small>
                    <h2 class="font-proxima-bl text-title mt-3">Let’s work together</h2>
                </div>
            </div>
            <div class="lets-wroktogather-wrapper mx-auto w-full lg:w-8/12">
                <div class="lets-wroktogather">
                    <p class="font-proxima-lt">If you have a website or mobile app idea in mind or you need some advice about
                        product design, feel free to contact me. Currently my time books quickly, so the sooner you write, the
                        better it is for both of us.</p>
                    <div class="email-within flex my-5 items-center justify-center mx-auto">
                        <div class="">
                            <img src="assets/img/email-icon.svg">
                        </div>
                        <div class="">
                            <small><b>Reply time:</b>within 1-2 working days</small>
                        </div>
                    </div>
                    <a class="btn " href="mailto:hello@iroshandezilva.com">hello@iroshandezilva.com</a>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include "footer.php"?>

