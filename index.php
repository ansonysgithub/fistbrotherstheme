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
    </div>
</div>
<?php get_footer() ?>