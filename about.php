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
    <div class="banner bg-success d-flex align-items-center" style="height: 400px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h1>About<br>
                    us</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h1>About Teekey<br>
                    Investments</h1>
                <p>Teekay Investments, registered as Wheels of Teekay Investments
                    (Pty) Ltd, Established with a vision to revolutionize the fuel and
                    infrastructure sectors in Southern Africa, we have quickly grown to
                    become a key player in the industry.</p>
                <div class="d-flex justify-content-start gap-3">
                    <p>Botswana</p>
                    <p>Botswana</p>
                    <p>Botswana</p>
                    <p>Botswana</p>
                    <p>Botswana</p>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</section>

<section class="bg-secondary">
    <div class="container py-5">
        <div class="row">
            <h1 class="mb-3">Core Activities</h1>
            <h5 class="mb-5">Teekey Investments specializes in:</h5>
            <div class="col-3 border rounded d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url'); ?>/img/frog.jpeg" class="card-img-top px-3" alt="...">
                    <div class="card-body bg-primary d-flex align-items-center justify-content-center">
                        <h5 class="card-title">Fuel
                            Importation</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 border rounded d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url'); ?>/img/frog.jpeg" class="card-img-top px-3" alt="...">
                    <div class="card-body bg-primary d-flex align-items-center justify-content-center">
                        <h5 class="card-title">Wholesale
                            Distribution</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 border rounded d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url'); ?>/img/frog.jpeg" class="card-img-top px-3" alt="...">
                    <div class="card-body bg-primary d-flex align-items-center justify-content-center">
                        <h5 class="card-title">Bulk
                            Storage</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 border rounded d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url'); ?>/img/frog.jpeg" class="card-img-top px-3" alt="...">
                    <div class="card-body bg-primary d-flex align-items-center justify-content-center">
                        <h5 class="card-title">Infrastructure
                            Development</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-5">picture</div>
            <div class="col-5">
                <div class="text-center">
                    <h1>Explore Investment<br>
                        Opportunities</h1>
                    <p>Our experts are ready to answer your questions</p>
                    <button class="btn btn-success">Book Consultant</button>
                </div>
            </div>
            <div class="col-2"></div>
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

<!-- <section>
    <div class="container py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center mb-3">Areas Of Specialization</h1>
            <div class="col-3 p-5 d-flex align-items-center justify-content-center border rounded">
                <div class="text-center">
                    <h4>New International Airport</h4>
                    <p>Development and management of fuel supply for a major new international airport.</p>
                </div>
            </div>
            <div class="col-3 p-5 d-flex align-items-center justify-content-center border rounded">
                <div class="text-center">
                    <h4>Mixed-Use Estates</h4>
                    <p>Investment in large-scale mixed-use developments that combine residential, commercial, and industrial spaces.</p>
                </div>
            </div>
            <div class="col-3 p-5 d-flex align-items-center justify-content-center border rounded">
                <div class="text-center">
                    <h4>Mining Sector</h4>
                    <p>Supply of bulk fuel to selected mines, supporting the mining industry's operational needs.</p>
                </div>
            </div>
            <div class="col-3 p-5 d-flex align-items-center justify-content-center border rounded">
                <div class="text-center">
                    <h4>Rebranded Filling Stations</h4>
                    <p>Revitalization and rebranding of old “white” site filling stations across the country.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>