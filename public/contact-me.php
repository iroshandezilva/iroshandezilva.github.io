<?php

$title="Contact Me";


include "header.php"; ?>


<div class="section section-six relative py-70 pt-40  bg-white text-center">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-10">
                <div class="title ">
                    <small class="text-base ">What’s in your mind?</small>
                    <h1 class="text-base-black text-4xl lg:text-7xl font-bold leading-tight	">Let’s talk about you</h1>
                </div>
            </div>
            <div class="lets-wroktogather-wrapper mx-auto w-full lg:w-8/12">
                <div class="lets-wroktogather">
                    <p class="">If you have a project in mind or you just want to chat, feel free to get in touch.
                        Currently my time books quickly, so the sooner you write, the better it is for both of us.</p>
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

<div class="section section-about-two  bg-white py-70 relative">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="max-w-3xl mx-auto">
                <small class="text-center flex justify-center">How I work</small>
                <h4 class="text-4xl text-center mb-10 text-base-black font-bold">Profitable design</h4>
                <p class="mb-10">As a designer with business background I’m always focusing on creating experiences,
                    which are delightful and profitable at the same time. I start every job with detailed questions
                    about your business and customers before I even start thinking about any design solutions.</p>
                <p class="mb-10">I only work with a selected amount of clients at the same time in order to ensure high
                    quality and meaningful results. If I feel that I won’t be a good fit for your idea I’ll tell you so
                    and recommend you other solutions. I will only accept your project if I believe I can create value
                    for your business and the benefits will be greater than the money you spend.</p>
            </div>
        </div>
    </div>
</div>

<div class="section section-about-two  bg-white py-70 relative">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="transition duration-300 ease-in-out hover:shadow-xl rounded-lg p-12 bg-base-primary-500">
                    <h4 class="font-bold text-white mb-4">Web & Mobile Design</h4>
                    <p class="text-white mb-4">Start here if you have a great idea for a web or mobile app. This is
                        ideal for longer projects,
                        such as web & mobile design, prototyping or front-end development.</p>
                    <a href="https://form.typeform.com/to/zShilGyX" target="_blank"
                       class="flex text-white items-center font-medium">Start a project now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <div class="transition duration-300 ease-in-out hover:shadow-xl rounded-lg p-12 bg-base-primary-400">
                    <h4 class="font-bold text-white mb-4">General Consulting</h4>
                    <p class="text-white mb-4">If you need an outside overview of your project, want some feedback or
                        just want to chat in general, start here to find a good spot for a 15-min quick call.</p>
                    <a href="https://form.typeform.com/to/HzaeqRLn" target="_blank"
                       class="flex text-white items-center font-medium">Schedule now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-about-two  bg-white py-70 relative">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="max-w-3xl mx-auto">
                <h6 class="text-2xl font-medium text-center mb-10">You can also just send me an <a
                            href="mailto:hello@iroshandezilva.com">email</a> or a <a target="_blank"
                                                                                     href="https://twitter.com/iroshandezilva">tweet</a>.
                </h6>
                <div class="flex justify-center space-x-3">
                    <?php include "elements/social-links.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";
?>
