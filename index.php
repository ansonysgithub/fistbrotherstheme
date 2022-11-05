<?php get_header() ?>

<?php
$args = array(
    "post_type" => array("post"),
    "posts_per_page" => 3
);
$slides = new WP_Query($args);

$args = array(
    "post_type" => array("post"),
);
$posts = new WP_Query($args);
?>

<div class="main-container">
    <!-- Homepage carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">
            <?php
            $active = 0;

            if ($slides->have_posts()) {

                while ($slides->have_posts()) {
                    $slides->the_post();
                    $active++;

            ?>

                    <div class="carousel-item <?php echo ($active == 1) ? 'active first-slide' : '' ?>">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("medium_large", ['class' => 'img-fluid d-block w-100 responsive']); ?></a>
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="container" <!-- Articules callouts -->
        <div class="row lastests-news">
            <div class="col-md-12">
                <h3>Top Articles</h3>
            </div>

            <?php
            if (have_posts()) {

                while ($posts->have_posts()) {
                    $posts->the_post();

            ?>
                    <div class="callouts col-sm-12 col-md-4">
                        <div class="card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("thumbnail", ['class' => 'card-img border-0']); ?></a>
                            <div class="card-body">
                                <h3><?php the_title(); ?></h3>
                                <p class="card-text"><?php the_excerpt() ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">Learn more</a>
                                    <small class="text-muted"><?php the_date(); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Suscribe to Fist Brothers Media</h3>
            </div>
            <div class="col-md-12 suscribe-form">
                <form action="<?php echo get_template_directory_uri() . '/newsletter.php' ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" name="terms" id="terms" value="1">
                        <label for="terms">Receive updates about articules, game launches, promotions and more. <?php the_privacy_policy_link() ?> </label>
                    </div>
                    <button type="submit" class="btn btn-primary" disabled>Register</button>
                </form>
            </div>
        </div>

        <!-- Fist Brothers TV -->
        <div class="row">
            <div class="col-md-6">
                <h2>Fist Brothers TV</h2>
                <p>Do you prefer to ear and see our content? Suscribe to our YouTube channel and follow the lastest updates about video games launches, promotions, analysis and more.</p>
                <a class="btn btn-outline-success read-more" href="http://www.youtube.com/channel/UCGYN6H0z2o2IGWY6PU88eVQ?sub_confirmation=1" target="_blank">Read more</a>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NEo6K8_GBVY" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>