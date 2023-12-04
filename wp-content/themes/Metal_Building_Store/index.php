<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <!-- Add your header content here -->
        <h1>Metal Building Store</h1>
    </header>

    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </main>

    <footer>
        <!-- Add your footer content here -->
        <p>&copy; <?php echo date('Y'); ?> Metal Building Store</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
