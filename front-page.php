<?php /*Template Name: Home */
get_header();
// require('carousel-temp1.php');
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
    <div class="banner bg-success" style="height: 600px;"></div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">picture</div>
            <div class="col-6">
                <h1>Investment<br>
                    Opportunities</h1>
                <div class="bg-secondary mb-3" style="height: 15px;"></div>
                <p>Available investment instruments include Ordinary Shares and
                    Preference Shares, all denominated preferably in Rands and
                    redeemable in the same currency. Investors may also participate
                    in debentures or notes with maturity intervals of up to one year</p>
            </div>
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
</section>

<section>
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
</section>

<section>
    <div class="container py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center mb-3">Why Invest with Us</h1>
            <p class="text-center">Investing with Teekey Investments offers unparalleled opportunities for high returns, strategic growth, and positive social impact. Here’s why you should consider partnering with us:</p>
            <div>
                <h4>high returns</h4>
                <p>
                    • Our projects are strategically designed to deliver substantial returns. With an Internal Rate of Return (IROR) exceeding 36% per annum, investors can expect impressive financial growth.
                    • Fixed annual returns of 20% on debentures ensure a secure and predictable income stream.
                </p>
            </div>
            <div>
                <h4>Strategic Partnerships</h4>
                <p>
                    • We have established robust partnerships with key stakeholders, including government bodies, private enterprises, and international investors. These collaborations provide a strong foundation for our projects and ensure their success.
                    • Our exclusive supply agreements, such as those with major ports and airports, create stable and lucrative revenue streams.
                </p>
            </div>
            <div>
                <h4>Diverse Portfolio</h4>
                <p>
                    • Our investment portfolio spans multiple sectors, including energy, infrastructure, retail, and mining. This diversification mitigates risk and enhances overall portfolio stability and growth potential.
                    • We operate in high-growth regions, including South Africa, Mozambique, Tanzania, Zambia, and Botswana, with potential expansion into Zimbabwe.
                </p>
            </div>
            <div>
                <h4>Sustainable Impact</h4>
                <p>
                    • We are committed to sustainable development and social responsibility. Our projects create jobs, improve infrastructure, and contribute to the economic development of the communities we serve.
                    • By investing in critical infrastructure, we support long-term economic growth and stability in Southern Africa.
                </p>
            </div>
            <div>
                <h4>Empowerment and Inclusion</h4>
                <p>
                    • As a 100% black-owned company, we prioritize empowerment and inclusive growth, aligning our business practices with national development goals.
                </p>
            </div>
            <div>
            </div>
        </div>
</section> -->


<?php
get_footer();
?>