<?php /*Template Name: About */
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
            <div class="col-6">picture</div>
            <div class="col-6">
                <h1>about us</h1>
                <p>Teekey Investments, registered as Wheels of Teekey Investments (Pty) Ltd, is a proudly South African private company, 100% black-owned and dedicated to driving economic growth and empowerment. Established with a vision to revolutionize the fuel and infrastructure sectors in Southern Africa, we have quickly grown to become a key player in the industry.</p>
                <h1>History</h1>
                <p>Foundation: Teekey Investments was founded with the aim of transforming critical infrastructure sectors and fostering sustainable economic development.
                    Growth: From our initial operations in Gauteng and Kwa-Zulu Natal provinces, we have expanded our footprint across South Africa and into neighboring countries.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 bg-primary">
        <div class="row">
            <div class="col-6">
                <h1>Vision</h1>
                <p>To be a leading investment firm driving sustainable growth and prosperity in Southern Africa through strategic and impactful investments.</p>
            </div>
            <div class="col-6">
                <h1>Mission</h1>
                <p>To deliver exceptional value to our investors by investing in key infrastructure projects, fostering economic development, and empowering communities. We strive to achieve superior returns while adhering to the highest standards of integrity and excellence.</p>
            </div>
        </div>
        <div class="row">
            <h1>Values</h1>
            <div class="col-4 p-5 d-flex align-items-center justify-content-center border rounded">
                <h4>Integrity</h4>
            </div>
            <div class="col-4 p-5 d-flex align-items-center justify-content-center border rounded">
                <h4>Excellence</h4>
            </div>
            <div class="col-4 p-5 d-flex align-items-center justify-content-center border rounded">
                <h4>Sustainability</h4>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center mb-3">Areas Of Specialization</h1>
            <div class="col-6"></div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 bg-primary">
        <div class="row">
            <h1 class="text-center mb-3">Industries We Operate In</h1>
            <div class="col-6"></div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center mb-3">Geographic Regions Served</h1>
            <div class="col-6"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>