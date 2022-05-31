

<div class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <div class=" text-center">
                    <h4 class="my-3">Check what our customers are saying</h4>
                </div>
            </div>
        </div>
        <div class="row">

        <?php
        $iteration = 0;
        $review_posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'reviews',
            'order' => 'DESC',
        ));

        while ($review_posts->have_posts()) {
            $review_posts->the_post();
        ?>
            <div class="card col-12 col-md-6">
                <div class="card-body">
                    <blockquote class="card-text">
                        <?php the_content(); ?>
                    </blockquote>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </h6>

                </div>
            </div>
            <?php
        }
        ?>
        <?php wp_reset_query(); ?>
        </div>
    </div>
</div>