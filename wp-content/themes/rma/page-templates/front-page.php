<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<div class="expertise">
    <!-- <h1><?php the_title(); ?></h1> -->

    <div class="expertise_text">
        <div class="expertise_text_left">
            <?php if (get_field('expertise_name')): ?>
                <p class="expertise_name subtitle"><?php echo esc_html(get_field('expertise_name')); ?></p>
            <?php endif; ?>

            <?php if (get_field('expertise_title')): ?>
                <h2 class="expertise_title"><?php echo esc_html(get_field('expertise_title')); ?></h2>
            <?php endif; ?>
        </div>

        <div class="expertise_text_left">
            <?php if (get_field('expertise_description')): ?>
                <p class="expertise_description"><?php echo esc_html(get_field('expertise_description')); ?></p>
            <?php endif; ?>
        </div>

    </div>

    <!-- <div class="hero">
        <?php $image = get_field('hero_image'); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div> -->

    <?php

    // The Query.
    $the_query = new WP_Query(array(
        'post_type' => 'rma_expertise',
        'orderby' => 'date',
        'order' => 'ASC'
    ));
    // The Loop.
    if ($the_query->have_posts()) : ?>
        <div class="expertise-posts">
            <?php while ($the_query->have_posts()) :

                $the_query->the_post(); ?>
                <?php
                $id = get_the_ID();
                switch ($id) {
                    case 11:
                        $color = '#002E6E';
                        break;
                    case 12:
                        $color = '#F1A31F';
                        break;
                    case 13:
                        $color = '#93B455';
                        break;
                    case 14:
                        $color = '#84517F';
                        break;
                    case 15:
                        $color = '#EE2B52';
                        break;
                    default:
                        $color = '#fff';
                }
                ?>
                <div class="expertise-post" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')); ?>); color: <?php echo esc_attr($color); ?>;">
                    <div class="expertise-wrapper">
                        <!-- <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')); ?>" /> -->
                        <div class="id-title">
                            <p class="expertise-id"><?php echo '0' . $id - 10; ?></p>
                            <p class="expertise-title"><?php echo esc_html(get_the_title()); ?></p>
                        </div>

                        <div class="expertise-content"><?php echo get_the_content(); ?></div>
                        <!-- <div class="after"></div> -->
                        <a class="rma-link link explore" href="#" target="_blank">Explore More</a>
                    </div>

                </div>
            <?php endwhile; ?>

        </div>
        <div class="expertise-pagination">
            <button class="expertise-pagination-prev expertise-pagination-arrow"></button>
            <div class="expertise-pagination-dots"></div>
            <button class="expertise-pagination-next expertise-pagination-arrow"></button>
        </div>
    <?php else :
        esc_html_e('Sorry, no posts matched your criteria.');
    endif;

    // Restore original Post Data.
    wp_reset_postdata();
    ?>

</div>

<div class="cases">
    <div class="cases-upper">
        <div class="cases_text">
            <?php if (get_field('case_name')): ?>
                <p class="case_name subtitle"><?php echo esc_html(get_field('case_name')); ?></p>
            <?php endif; ?>

            <?php if (get_field('case_title')): ?>
                <h2><?php echo esc_html(get_field('case_title')); ?></h2>
            <?php endif; ?>

            <?php if (get_field('case_description')): ?>
                <p><?php echo esc_html(get_field('case_description')); ?></p>
            <?php endif; ?>

            <a class="rma-link link" href="#" target="_blank">Explore More</a>

        </div>

        <?php

        // The Query.
        $the_query = new WP_Query(array(
            'post_type' => 'rma_cases',
            'orderby' => 'date',
            'order' => 'ASC'
        ));
        // The Loop.
        if ($the_query->have_posts()) : ?>
            <div class="cases-posts">
                <?php while ($the_query->have_posts()) :

                    $the_query->the_post(); ?>
                    <?php
                    $id = get_the_ID();
                    ?>
                    <div class="cases-post">
                        <!-- style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')); ?>);"> -->
                        <div class="cases-wrapper">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')); ?>" />

                            <div class="cases-text">

                                <div class="case-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/case-icon.png" alt="" />
                                </div>

                                <?php $categories = get_the_category();

                                if (! empty($categories)) : ?>
                                    <div class="cases-category"><?php echo esc_html($categories[0]->name); ?></div>

                                <?php endif; ?>
                                <div class="cases-id-title">
                                    <p class="cases-title"><?php echo esc_html(get_the_title()); ?></p>
                                </div>

                                <div class="cases-content"><?php echo get_the_content(); ?></div>
                                <a class="rma-link link" href="#" target="_blank">Explore More</a>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </div>

    <div class="cases-pagination">
        <button class="cases-pagination-prev cases-pagination-arrow"></button>
        <div class="cases-pagination-dots"></div>
        <button class="cases-pagination-next cases-pagination-arrow"></button>
    </div>
<?php else :
            esc_html_e('Sorry, no posts matched your criteria.');
        endif;

        // Restore original Post Data.
        wp_reset_postdata();
?>

</div>

<div class="sustainability">
    <!-- <h1><?php the_title(); ?></h1> -->

    <div class="sustainability-text">
        <?php if (get_field('sustainability_name')): ?>
            <p class="sustainability_name subtitle"><?php echo esc_html(get_field('sustainability_name')); ?></p>
        <?php endif; ?>

        <?php if (get_field('sustainability_title')): ?>
            <h2 class="sustainability_title"><?php echo esc_html(get_field('sustainability_title')); ?></h2>
        <?php endif; ?>

    </div>

    <?php

    // The Query.
    $the_query = new WP_Query(array(
        'post_type' => 'rma_sustainability',
        'orderby' => 'date',
        'order' => 'ASC'
    ));
    // The Loop.
    if ($the_query->have_posts()) :
        $i = 0;
    ?>
        <div class="sustainability-posts">

            <?php while ($the_query->have_posts()) :

                $the_query->the_post(); ?>
                <?php
                $id = get_the_ID();
                $i++;
                ?>
                <div class="sustainability-post">
                    <div class="sustainability-wrapper">
                        <figure>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'full')); ?>" />
                        </figure>
                        <div class="sustainability-detail">
                            <p class="sustainability-id"><?php echo '0' . $i; ?></p>
                            <p class="sustainability-title"><?php echo esc_html(get_the_title()); ?></p>
                            <div class="sustainability-content"><?php echo get_the_content(); ?></div>
                            <a class="rma-link link" href="#" target="_blank">Explore More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="sustainability-pagination rma-pagination">
            <button class="sustainability-pagination-prev sustainability-pagination-arrow rma-prev rma-arrow"></button>
            <div class="sustainability-pagination-dots rma-dots"></div>
            <button class="sustainability-pagination-next sustainability-pagination-arrow rma-next rma-arrow"></button>
        </div>
    <?php else :
        esc_html_e('Sorry, no posts matched your criteria.');
    endif;

    // Restore original Post Data.
    wp_reset_postdata();
    ?>

</div>

<?php get_footer(); ?>