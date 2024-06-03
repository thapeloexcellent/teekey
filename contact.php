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
<div class="container my-5">
    <div class="row">
        <div class="col-md-12" style="min-height: 700px">
            <iframe
                src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1pha2ZNu5nj9m5Gl63Ok7MnCYoCHoYqKRqrQLNttSk5S5rxfJxeLAjdtA5qr-AmmeA5d5we-fR?gv=true"
                style="border: 0" width="100%" height="150%" frameborder="0"></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>