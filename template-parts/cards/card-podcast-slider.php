<?php
$postID = get_the_ID();
$kicker = get_field('video_kicker', $postID);
$headline = get_the_title();
$subheadline = get_the_date();
$excerpt = get_the_excerpt();
$videoImage = get_field('video_image', $postID);
$videoLink = get_field('video_link', $postID);
$btnText = get_field('video_btn_text', $postID) ? get_field('video_btn_text', $postID) : 'Learn More';
?>
<div class="navigator__cell pos-rel item">
    <a class="podcast-grid__video fancybox" href="<?php echo $videoLink; ?>">
        <figure class="card-podcast-img mb-0 pos-rel nooverf mb-3 ">
            <div class="podcast-play__icon abs-centered z-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 84"><path fill="#fff" fill-rule="evenodd" d="M42,83.7C65,83.7,83.7,65,83.7,42S65,0.3,42,0.3C19,0.3,0.3,18.9,0.3,42S19,83.7,42,83.7z M32.7,24.6l26.6,18  l-26.6,18V24.6z" clip-rule="evenodd"/></svg>
            </div>
            <?php echo acfOutput($kicker, 'p', 'podcast-grid__kicker is-text--white mb-0 z-4'); ?>
            <?php echo acfImgOutput($videoImage, 'podcast-grid__image image-cover pos-rel z-2', ''); ?>
        </figure>
    </a>
    <a href="<?php the_permalink(); ?>">
        <?php echo acfOutput($headline, 'h3', 'podcast-grid__headline font-weight-bold text-lg-center'); ?>
        <?php echo acfOutput($subheadline, 'p', 'podcast-grid__subheadline kicker letter-sp-xs text-lg-center'); ?>
    </a>
</div>