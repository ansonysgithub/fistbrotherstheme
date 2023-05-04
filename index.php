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

    <!-- Fist Brothers Articles -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="main-title">Fist Brothers: Newer articles from our writes.</h1>
            </div>
            <div class="col-md-12">
                <p>Here you can find the latest articles from Fist Brothers Media</p>
            </div>
        </div>
        <div class="row lastests-news">
            <?php
            if (have_posts()) {

                while ($posts->have_posts()) {
                    $posts->the_post();

            ?>
                    <div class="callouts col-sm-12 col-md-4">
                        <div class="card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large", ['class' => 'card-img border-0']); ?></a>
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

        <!-- Fist Brothers Media Form -->
        <!--
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
        -->

        <!-- Fist Brothers TV -->
        <!--
        <div class="row">
            <div class="col-md-6">
                <h2>Fist Brothers TV</h2>
                <p>Do you prefer to ear and see our content? Suscribe to our YouTube channel and follow the lastest updates about video games launches, promotions, analysis and more.</p>
                <a class="btn btn-outline-success read-more" href="http://www.youtube.com/channel/UCGYN6H0z2o2IGWY6PU88eVQ?sub_confirmation=1" target="_blank">Read more</a>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NEo6K8_GBVY" allowfullscreen></iframe>
                </div>
            </div>
        </div>
                    -->
    </div>
</div>
<?php get_footer() ?>
