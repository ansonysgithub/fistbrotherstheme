<?php get_header() ?>

<?php

$args = array(
    'post__in' => get_option('sticky_posts'),
);

$sticky_posts = new WP_Query($args);

$args = array();

if (is_category()) {
    $category = get_queried_object();
    $category_id = $category->term_id;

    $args = array(
        "post_type" => array("post"),
        "cat" => $category_id
    );
} else {
    $args = array(
        "post_type" => array("post"),
    );
}

$posts = new WP_Query($args);
?>

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        if ($sticky_posts->have_posts()) {
                            $count = 0;
                            while ($sticky_posts->have_posts()) {
                                $sticky_posts->the_post();
                                $count++;

                                $categories = get_the_category();
                                $category_name = '';

                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                        $category_name = $category->name;
                                    }
                                }
                        ?>
                                <div class="carousel-item <?php echo $active = ($count == 1) ? "active" : ""; ?>">
                                    <img src="<?php the_post_thumbnail_url() ?>" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $category_name ?></h5>
                                        <p><?php the_excerpt(); ?></p>
                                        <a class="btn btn-outline-light" href="<?php the_permalink(); ?>">Learn more</a>
                                    </div>
                                </div>
                        <?
                            }
                        }
                        wp_reset_postdata()
                        ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="main-title">Welcome to Fist Brothers!</h1>
            </div>
            <div class="col-md-12">
                <p class="lead">Here you can find the latest articles from Fist Brothers Media</p>
            </div>
        </div>
        <div class="row lastests-news">
            <div class="card-columns">
                <?php
                if (have_posts()) {

                    while ($posts->have_posts()) {
                        $posts->the_post();

                        $categories = get_the_category();
                        $category_name = '';

                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                $category_name = $category->name;
                            }
                        }

                ?>
                        <div class="card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("thumbnail", ['class' => 'card-img-top']); ?></a>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <h6 class="card-subtitle text-muted"><?php echo $category_name ?></h6>
                                <p class="card-text"><?php the_excerpt() ?></p>
                                <a href="<?php the_permalink(); ?>" class="card-link">Learn more</a>
                                <small class="text-muted"><?php the_date(); ?></small>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="row" id="register">
            <div class="col-md-6">
                <h4>Register for our newsletter now</h4>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="newsletter-form needs-validation">
                    <input type="hidden" name="action" value="suscribe_form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" name="terms" id="terms" value="1" required>
                        <label for="terms">I agree to provide my data and consent to this website's <?php the_privacy_policy_link() ?>.</label>
                    </div>
                    <div class="validations"></div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <p class="lead">Subscribe to our newsletter now and stay informed! Get updates on the latest trends, discounts, and content. Don't miss out - sign up today!</p>
                    <hr class="my-4">
                    <p>We respect your privacy. Learn how we use and protect your data by reading our <?php the_privacy_policy_link() ?>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>