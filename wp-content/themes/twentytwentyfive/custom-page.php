<?php
/**
 * Template Name: Custom Page
 * Description: A custom page template for displaying specific content.
 */

// Load the WordPress header.
get_header();
?>

<div class="custom-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Welcome to your custom WordPress page!</p>

        <div class="custom-content">
            <p>This is a custom page template where you can add your content or custom HTML. Edit this file to change the layout.</p>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
            </ul>
        </div>
    </div>
</div>

<?php
// Load the WordPress footer.
get_footer();
?>

