<?php
$previous_post = get_previous_post();
if ($previous_post) {
    $previous_thumbnail = get_the_post_thumbnail($previous_post->ID, 'thumbnail', array('class' => 'card-img-top'));
    $previous_title = get_the_title($previous_post->ID);
    $previous_excerpt = get_the_excerpt($previous_post->ID);
}

$next_post = get_next_post();
if ($next_post) {
    $next_thumbnail = get_the_post_thumbnail($next_post->ID, 'thumbnail', array('class' => 'card-img-top'));
    $next_title = get_the_title($next_post->ID);
    $next_excerpt = get_the_excerpt($next_post->ID);
}
?>

<div class="card-deck">
    <div class="card">
        <?php echo $previous_thumbnail; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $previous_title; ?></h5>
            <p class="card-text"><?php echo $previous_excerpt; ?></p>
            <?php next_post_link('%link', 'Learn more'); ?>
        </div>
    </div>

    <div class="card">
        <?php echo $next_thumbnail; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $next_title; ?></h5>
            <p class="card-text"><?php echo $next_excerpt; ?></p>
            <?php next_post_link('%link', 'Learn more'); ?>
        </div>
    </div>
</div>