<?php /*Template Name: Services */
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    _e('Sorry, no posts matched your criteria.', 'textdomain');
}
?>

<section>
    <div class="container py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center mb-3">Services</h1>
            <div class="col-4 border rounded p-4">
                <h3>fuel transportation</h3>
                <p>We import high-quality fuel to meet the growing demands of our markets.</p>
            </div>
            <div class="col-4 border rounded p-4">
                <h3>Wholesale Distribution</h3>
                <p>We distribute fuel on a wholesale basis to various clients, including retail outlets and industrial consumers.</p>
            </div>
            <div class="col-4 border rounded p-4">
                <h3>Retail Operations</h3>
                <p>Our rebranded filling stations serve individual consumers across South Africa.</p>
            </div>
            <div class="col-4 border rounded p-4">
                <h3>Bulk Storage</h3>
                <p>We provide bulk storage solutions for large-scale fuel needs, ensuring reliable supply and distribution.</p>
            </div>
            <div class="col-4 border rounded p-4">
                <h3>Infrastructure Development</h3>
                <p>We invest in and develop key infrastructure projects such as airports and mixed-use estates.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>