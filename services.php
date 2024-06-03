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
    <div class="banner bg-success d-flex align-items-center" style="height: 400px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h1>Investment<br>
                    Opportunities</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h1>Investment<br>
                    Opportunities</h1>
                <div class="bg-secondary mb-3" style="height: 15px;"></div>
                <p>We offer private investment opportunities to a select group of 50
                    individuals or legal entities. Available investment instruments
                    include Ordinary Shares and Preference Shares, all denominated
                    preferably in Rands and redeemable in the same currency.
                    Investors may also participate in debentures or notes with
                    maturity intervals of up to one year, with the possibility of
                    conversion to ordinary shares in our holding company within 3-5
                    years.</p>
            </div>
            <div class="col-6">picture</div>
        </div>
    </div>
</section>

<section class="bg-secondary">
    <div class="container py-5 bg-secondary">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <div class="text-end">
                    <h1>Get Started with Investing</h1>
                    <p>We are here to help you with securing your future</p>
                    <button class="btn btn-success">Reach Us</button>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <h1>Types Of<br>
                Investments</h1>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Ordinary Shares</th>
                        <th>Debentures</th>
                        <th>Preference Shares</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <th>
                            <p>Equity ownership in Teekay Investments,
                                providing shareholders with voting rights
                                and a share in the company's profits.</p>
                        </th>
                        <th>
                            <p>Equity shares with preferential rights
                                to dividends and assets upon
                                liquidation.</p>
                        </th>
                        <th>
                            <p>Fixed-income securities representing
                                a loan to the company.</p>
                        </th>
                    </tr>
                    <tr class="table-secondary">
                        <th>
                            <p>Dividends paid annually based on the
                                company's performance.</p>
                        </th>
                        <th>
                            <p>Fixed dividend rate, paid annually.</p>
                        </th>
                        <th>
                            <p>Fixed annual interest rate of 20%</p>
                        </th>
                    </tr>
                    <tr class="table-primary">
                        <th>
                            <p>Shares may be traded or sold, offering
                                potential capital gains..</p>
                        </th>
                        <th>
                            <p>Preference shareholders receive
                                dividends before ordinary
                                shareholders.</p>
                        </th>
                        <th>
                            <p>1-year maximum, with the option for
                                renewal.</p>
                        </th>
                    </tr>
                    <tr class="table-secondary">
                        <th>
                            <p>Subject to market fluctuations and company
                                performance.</p>
                        </th>
                        <th>
                            <p>Option to convert into ordinary shares
                                under certain conditions.</p>
                        </th>
                        <th>
                            <p>Option to convert into ordinary shares
                                within 3-5 years, providing potential
                                equity upside.</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-secondary">
    <div class="container py-5 bg-secondary">
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

<!-- <section>
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
</section> -->

<!-- <section>
    <div class="container py-5 bg-primary">
        <div class="row">
            <h1 class="text-center mb-3">Investment Opportunities</h1>
            <p class="text-center">At Teekey Investments, we offer exclusive investment opportunities designed to deliver exceptional returns and foster long-term growth. Below, we detail the different types of investments available, their benefits, and the financial prospects they offer.</p>
            <h3 class="text-center">Types of Shares</h3>
            <div class="col-4 border rounded p-4 d-flex justify-content-center">
                <div>
                    <h4>Ordinary Shares</h4>
                    <p>• Description: Equity ownership in Teekey Investments, providing shareholders with voting rights and a share in the company's profits.
                        • Returns: Dividends paid annually based on the company's performance.
                        • Liquidity: Shares may be traded or sold, offering potential capital gains.
                        • Risks: Subject to market fluctuations and company performance.
                    </p>
                </div>
            </div>
            <div class="col-4 border rounded p-4 d-flex justify-content-center">
                <div>
                    <h4>Preference Shares</h4>
                    <p>• Description: Equity shares with preferential rights to dividends and assets upon liquidation.
                        • Returns: Fixed dividend rate, paid annually.
                        • Priority: Preference shareholders receive dividends before ordinary shareholders.
                        • Conversion: Option to convert into ordinary shares under certain conditions.
                    </p>
                </div>
            </div>
            <div class="col-4 border rounded p-4 d-flex justify-content-center">
                <div>
                    <h4>Debentures</h4>
                    <p>• Description: Fixed-income securities representing a loan to the company.
                        • Returns: Fixed annual interest rate of 20%.
                        • Maturity Intervals: 1-year maximum, with the option for renewal.
                        • Convertible Debentures: Option to convert into ordinary shares within 3-5 years, providing potential equity upside.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>