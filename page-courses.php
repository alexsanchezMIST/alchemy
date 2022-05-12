<?php

$args = array(
    'post_type' => 'course',
    'post_status' => 'publish',
);

$context = Timber::context();
$context['courses'] = new Timber\PostQuery($args);

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'page.twig' ), $context );

?>