<?php

$title="Portfolio";


include "header.php"; ?>

<div class="section section-six relative py-70 pt-40  bg-white text-center">
    <div class="section-wrapper">
        <div class="container">
            <div class="title-wrapper inline-block mb-6">
                <div class="title ">
                    <small class="text-base ">Portfolio</small>
                    <h1 class="text-base-black text-4xl lg:text-7xl font-bold leading-tight	">Featured Work</h1>
                </div>
            </div>
            <div class="mx-auto w-full lg:w-6/12">
                <div class="lets-wroktogather">
                    <p class="">Collection of my design, templates, design source files and Case studies. Every pixel is created by me for humans.</p>
                    <div class="flex my-5 items-center justify-center mx-auto space-x-5">
                        <a target="_blank" href="https://figma.com/" class=" p-2 rounded-md hover:shadow-lg transition duration-500 ease-in-out">
                            <img class="w-8 h-8" src="assets/img/figma-logo.svg" alt="Figma Logo">
                        </a>

                        <a target="_blank" href="https://www.sketch.com/" class=" p-2 rounded-md hover:shadow-lg transition duration-500 ease-in-out">
                            <img class="w-8 h-8" src="assets/img/sketch-logo.svg" alt="Sketch Logo">
                        </a>

                        <a target="_blank" href="https://www.adobe.com/products/xd.html" class=" p-2 rounded-md hover:shadow-lg transition duration-500 ease-in-out">
                            <img class="w-8 h-8" src="assets/img/adobe-experience-design-logo.svg" alt="Adobe XD Logo">
                        </a>

                        <a target="_blank" href="https://principleformac.com/" class=" p-2 rounded-md hover:shadow-lg transition duration-500 ease-in-out">
                            <img class="w-8 h-8" src="assets/img/principle-app-logo.svg" alt="Principle App Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section  bg-white py-70 relative">
<div class="container">
    <?php include "portfolio-items.php" ?>
</div>
</div>


<div class="section section-about-two  bg-white py-70 relative">
    <div class="section-wrapper">
        <div class="container relative">
            <div class="max-w-3xl mx-auto">
                <h6 class="text-2xl font-medium text-center mb-10">You can send me an <a
                            href="mailto:hello@iroshandezilva.com">email</a> or a <a target="_blank"
                                                                                     href="https://twitter.com/iroshandezilva">tweet</a>.
                </h6>
                <div class="flex justify-center">
                    <?php include "elements/social-links.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";
?>
