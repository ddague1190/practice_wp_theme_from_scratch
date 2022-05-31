<?php get_header();

get_template_part('template-parts/slider', '');
?>

<p class="container-lg fs-4 m-5">Westside Scooters is your #1 source for scooter sales, service, and parts in Asheville. We have new and pre-owned units.</p>
<p class="container-lg fs-4 m-5">Satisfaction gauranteed.</p>

<?php
get_template_part('template-parts/reviews', '');
?>


<div class='position-relative'>

<h1 class="text-center top-50 start-50 translate-middle position-absolute text-light">Enjoy the ride</h1>
<img class='img-fluid' src='<?php echo get_theme_file_uri('/images/scooter.png'); ?>'>
</div>


<?php get_footer(); ?>