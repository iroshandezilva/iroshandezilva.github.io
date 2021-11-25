<?php include "header.php" ?>


<div class="section section-one relative ">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="w-full lg:w-7/12 mx-auto relative">
                <div class="landing-img-wrapper">
                    <div class="landing-img">
                        <img src="assets/img/iroshandezilva-img-3.webp" alt="Iroshan De Zilva Cover Image">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="hi-wrapper">
                    <div class="hi-content shadow-card  rounded-2xl absolute w-10/12 xl:w-3/12 md:w-5/12  lg:w-4/12 flex top  items-center  justify-center">
                       <div class="relative w-full">
                           <div class="flex relative z-10 items-center bg-white p-4 lg:p-8 rounded-2xl">
                               <div class="lg:w-3/12 w-2/12 mr-3">
                                   <img src="assets/img/hi-emoji.svg" alt="Hi Emoji">
                               </div>
                               <div class="lh:w-9/12 w-10/12">
                                   <small>Hello, I am</small>
                                   <h1 class=" size text-xl lg:text-2xl font-bold text-black">Iroshan De Zilva</h1>
                               </div>
                           </div>
                           <div class="absolute h-full rounded-2xl  w-full -bottom-1 left-0  bg-base-primary-200"></div>
                       </div>
                    </div>
                </div>
                <div claas="hi-discription-wrapper">
                    <div class="hi-discription p-4 md:p-6  lg:p-8 rounded-2xl shadow-card bg-white  absolute w-11/12 lg:w-4/12 md:w-8/12">
                        <p class="text-sm text-base">Reach your business goals with excellent user experience. Let’s start working on your awesome
                            web or iOS app.</p>
                    </div>
                </div>
            </div>
            <div class="landing-social-wrapper hidden lg:block">
                <div class="landing-social absolute top-0 right-0 h-full flex items-center">
                    <div class="landing-social-content relative  mr-8">
                        <div class="flex flex-col">
                            <?php include "elements/social-links.php"?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-two relative bg-white py-28 lg:py-32 xl:py-56">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title">
                    <small class="text-base ">How i work</small>
                    <h2 class="text-2xl lg:text-7xl">Design Process</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-9 mt-8">
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h3 class="ttext-4xl mb-5">Strategy</h3>
                        <h6 class="font-medium text-base-black">Ask first.</h6>
                        <p>Before jumping into designing I always make sure that we’re asking the right questions and
                            trying to accomplish the right challenges. This stage includes market research, competitive
                            analyses, consulting and exploring possible solutions.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h3 class="ttext-4xl mb-5">Design</h3>
                        <h6 class="font-medium text-base-black">Problem solving.</h6>
                        <p>At the end of this phase you’ll have a pixel perfect design for your app or website. During
                            the transition from wireframes into the final design I create prototypes simulating final
                            end results before development.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h3 class="ttext-4xl mb-5">Development</h3>
                        <h6 class="font-medium text-base-black">Bringing designs to life.</h6>
                        <p>Since I’m a designer who can code too, I can easily work in close collaboration with
                            developers up until the finish line and beyond. In case of web projects I also do front-end
                            development.</p>
                    </div>
                </div>
                <div class="process-wrapper mb-8">
                    <div class="process-content">
                        <h3 class="ttext-4xl mb-5">Quality assurance</h3>
                        <h6 class="font-medium text-base-black">Transparent process.</h6>
                        <p>Complete overview of my design process through regular meetings. After the initial design
                            versions I’m happy to do user testing with customers to ensure the best possible solutions
                            for their needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-three relative py-28 lg:py-32 xl:py-56" id="portfolio">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title">
                    <h2 class=" text-4xl lg:text-7xl">Recent Work</h2>
                </div>
            </div>
            <?php
            $home=true;
            include "portfolio-items.php" ?>

        </div>
    </div>
</div>

<div class="section section-four relative py-28 lg:py-32 xl:py-56 bg-white">
    <div class="section-wrapper">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2  lg:gap-20 gap-5 ">
                <div class="col flex items-center">
                    <div class="title-wrapper inline-block mb-10">
                        <div class="title">
                            <small class="text-base ">My Clients</small>
                            <h2 class=" text-4xl lg:text-7xl ">We’re going to became partners for the long
                                run.</h2>
                        </div>
                    </div>
                </div>
                <div class="col flex items-center justify-center">
                    <div class="grid grid-cols-3  gap-10">
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/cipm.webp" alt="Chartered Institute of Personnel Management">
                            </div>
                        </div>

                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/costa.webp" alt="Costa Marly">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/hunterslk.png" alt="Hunterslk Photography">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/Attempt_Imposible_logo.webp" alt="Attempt Imposible">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/sneakertub-logo.png" alt="Solar Digital">
                            </div>
                        </div>
                        <div class="client-wrapper">
                            <div class="client">
                                <img src="assets/img/clients/leavedates.png" alt="LeaveDates">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-five relative py-28 lg:py-32 xl:py-56" id="aboutme">
    <div class="section-wrapper">
        <div class="container">
            <div class="lg:flex">
                <div class="w-full lg:w-7/12">
                    <div class="about-me-content-wrapper">
                        <div class="about-me-content">
                            <div class="title-wrapper inline-block mb-10">
                                <div class="title">
                                    <small class="text-base ">Nice to meet you</small>
                                    <h2 class=" text-4xl lg:text-7xl ">Hi there, I’m Iroshan</h2>
                                </div>
                            </div>
                            <h3 class=" mb-4">My name is Iroshan De Zilva. I work as a User Interface &
                                User Experience designer in Sri Lanka.</h3>
                            <p class="mb-4">I was designing thoughtful experiences at <a target="_blank"
                                                                                         href="https://www.bhasha.lk/">Bhasha.</a>
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
                        <h5 class="font-bold">Stay up-to-date</h5>
                        <p class="mb-5"><b>Hint:</b>I’m especially active on Instagram and Twitter.</p>
                        <div class="social-media-wrapper">
                            <div class="social-item">
                                <a href="https://www.facebook.com/iroshandezilva/"><i class="fab fa-facebook-f"></i>
                                    Facebook</a>
                            </div>
                            <div class="social-item">
                                <a href="https://www.linkedin.com/in/iroshandezilva/"><i class="fab fa-linkedin-in"></i>
                                    Linkedin</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://dribbble.com/iroshandezilva"><i class="fab fa-dribbble"></i>
                                    Dribble</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://www.behance.net/iroshandezilva"><i class="fab fa-behance"></i> Behance</a>
                            </div>
                            <div class="social-item ">
                                <a href="https://iroshandezilva.medium.com/"><i class="fab fa-medium-m"></i> Medium</a>
                            </div>

                            <div class="social-item ">
                                <a href="https://github.com/iroshandezilva/"><i class="fab fa-github-alt"></i>
                                    Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-six relative py-28 lg:py-32 xl:py-56 bg-white text-center" id="contactme">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title ">
                    <small class="text-base ">Get in touch</small>
                    <h2 class=" text-4xl lg:text-7xl ">Let’s work together</h2>
                </div>
            </div>
            <div class="lets-wroktogather-wrapper mx-auto w-full lg:w-8/12">
                <div class="lets-wroktogather">
                    <p class="">If you have a website or mobile app idea in mind or you need some advice
                        about
                        product design, feel free to contact me. Currently my time books quickly, so the sooner you
                        write, the
                        better it is for both of us.</p>
                    <div class="email-within flex my-5 items-center justify-center mx-auto">
                        <div class="">
                            <img src="assets/img/email-icon.svg" alt="Email Icon">
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

<?php include "footer.php" ?>

