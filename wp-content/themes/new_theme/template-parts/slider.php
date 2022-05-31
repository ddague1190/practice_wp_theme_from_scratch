<div class="carousel slide container-xl p-0 " data-ride="carousel">

    <div class="carousel-inner" style='height: 50vw; max-height: 400px'>
        <div class="carousel_indicators"></div>

        <?php
        $iteration = 0;
        $slider_posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'slider',
            'order' => 'DESC',
        ));

        while ($slider_posts->have_posts()) {
            $slider_posts->the_post();
            $iteration++;

        ?>
            <div class="h-100 carousel-item <?php if ($iteration == 1) echo ' active' ?>">
                <img class="img-fluid" src="<?php the_post_thumbnail(); ?>">

                <div class="bg-dark carousel-caption d-none d-sm-block mx-auto">
                    <h2 class="text-light"><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php
        }
        ?>
        <?php wp_reset_query(); ?>

    </div>

</div>