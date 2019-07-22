<?php get_header(); ?>

<!--banner-->

<div class="blue-gradient h-48 -mb-24">
    <div class="container pt-12">
        <h1 class="text-xl">News & Events</h1>
    </div>
</div>

<div class="container flex pb-16">
    <?php
    while (have_posts())
    {
        the_post();
    ?>
    <article class="w-full md:w-2/3 md:pr-6">
        <figure class="h-64 w-full rounded-xl">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                 alt="" width="291" class="w-full h-full object-cover rounded-xl">
        </figure>

        <div class="mt-4">
            <h5 class="font-medium text-2xl leading-tight text-gray-800 mb-4">
            <?php the_title(); ?></h5>
            <p class="mt-auto text-gray-500 w-full mb-4"><?php the_time('F j, Y'); ?></p>
            <p class="text-gray-700">
            <?php the_content(); ?>
            </p>
        </div>
    </article>

    <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): 
    ?>

    <div class="w-full md:w-1/3 md:pl-6">
        <article class="w-full rounded-xl shadow bg-white hover:shadow-lg ">
            <a href="<?php echo $prev_post->guid ?>">
                <figure class="h-48 w-full rounded-t-xl">
                    <img src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>"
                         alt="" width="291" class="w-full h-48 object-cover rounded-t-xl">
                </figure>
                <h5 class="font-medium text-lg leading-tight text-gray-800 p-5">
                <?php echo $prev_post->post_title ?></h5>
                <p class="p-5 pt-0 text-gray-500"><?php echo get_the_date('F j, Y',$prev_post->ID ); ?></p>
            </article>
    </div>

    <?php endif ?>
    <?php 
    }
    wp_reset_query(); ?>

</div>


<?php get_footer(); ?>
