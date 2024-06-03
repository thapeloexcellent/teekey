<?php /*Template Name: Contact */
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
                <h1>Contact<br>
                    us</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h1>Get In Touch</h1>
                <p>For any legal or regulatory inquiries, please contact our compliance team</p>
            </div>
            <div class="col-6">
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <div>Name</div>
                            <input name="name" type="text">
                        </div>
                        <div class="col-6">
                            <div>Surname</div>
                            <input name="surname" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div>Email</div>
                            <input name="email" type="email">
                        </div>
                        <div class="col-6">
                            <div>Contact Number</div>
                            <input name="number" type="number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>Date</div>
                            <input name="date" type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>Message</div>
                            <input name="message" type="textarea">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>