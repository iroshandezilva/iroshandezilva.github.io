<?php

if (!isset($home)) {
    $home = false;
}
$data = [
    array(
        'title' => 'Helakuru Keyboard Redesign',
        'tags' => 'UI Design / Redesign',
        'thumb' => 'https://cdn.dribbble.com/users/3609611/screenshots/14513813/media/ce4f5adf4dc1121e6bc25dad54eb60e0.png?compress=1&resize=1200x900',
        'alt' => 'Helakuru Keyboard Redesign',
        'link-text' => 'Dribbbble Shot',
        'link' => 'portfolio/helakuru-keyboard-redesign.php',
        'private' => false
    ),
];
?>

<div class="grid grid-cols-1 md:grid-cols-3  lg:gap-20  gap-10">
    <?php
    $i = 0;
    foreach ($data as $item) {
        ?>
        <div class="portfolio-thum-wrapper">
            <div class="portfolio-thum">
                <div class="portfolio-thum-img">
                    <div class="img-container relative overflow-hidden  invisible rounded-xl bg-base-primary-500 w-full h-full absolute top-0 left-0 z-10">
                        <div class="img-overlay object-contain"></div>
                        <img src="<?php echo $item['thumb'] ?>"
                             alt="<?php echo $item['alt'] ?>">

                    </div>
                </div>
            </div>

            <h5 class="mt-3 font-semibold text-black"><?php echo $item['title'] ?></h5>
            <div class="text-sm text-gray-400 font-light mb-3"><?php echo $item['tags'] ?></div>
            <a class="text-black text-base font-medium flex items-center group hover:text-base-primary-500"
               href="<?php echo $item['link'] ?>">

                <?php echo $item['link-text'] ?> <?php
                if ($item['private']) {
                    ?>
                    <i class="fas fa-lock-alt ml-3"></i>
                    <?php
                } else {
                    ?>
                    <i class="far fa-long-arrow-right ml-3"></i>
                    <?php
                } ?>
            </a>
        </div>
        <?php
        if ($i == 5 && $home == true) {
            break;
        }
        $i++;
    }
    ?>
</div>