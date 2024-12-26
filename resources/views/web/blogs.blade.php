@section('title', 'Blogs')
@include('web.layouts.header')
<section class="blogs-new-center">
    <div class="blogs-new-content">
        <h1 class="blogs-new-title">Sell Faster. Stand Out. Close More Deals.</h1>
        <p class="blogs-new-subtitle">In today’s competitive real estate market, your marketing must go beyond the basics. Our copywriting services are designed to help agents: <span class="blogs-new-highlight"></span> </p>

        <div class="blogs-new-grid">
            <div class="blogs-new-tool">
                <i class="fas fa-comments blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Craft Irresistible Property Listings</div>
                <p class="blogs-new-tool-description">Highlight features buyers love with descriptions that spark emotion and urgency.
                </p>
            </div>

            <div class="blogs-new-tool">
                <i class="fas fa-pencil-alt blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Generate Qualified Leads</div>
                <p class="blogs-new-tool-description">Persuasive landing pages and email campaigns convert browsers into serious inquiries.
                </p>
            </div>

            <div class="blogs-new-tool">
                <img src="https://placehold.co/24x24" alt="Figma logo icon" class="blogs-new-icon-img">
                <div class="blogs-new-tool-name">Rank in Local Searches</div>
                <p class="blogs-new-tool-description">SEO-optimized listings and blogs ensure your properties are seen by the right audience.</p>
            </div>

            <div class="blogs-new-tool">
                <i class="fas fa-code blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Persuasive Service Pages</div>
                <p class="blogs-new-tool-description">Clearly explain your offerings with SEO-optimized copy tailored for conversion.
                </p>
            </div>

            <div class="blogs-new-tool">
                <img src="https://placehold.co/24x24" alt="Asana logo icon" class="blogs-new-icon-img">
                <div class="blogs-new-tool-name">Email Campaigns</div>
                <p class="blogs-new-tool-description">Stay top-of-mind with newsletters and promotional emails that drive repeat business.
                </p>
            </div>
            <div class="blogs-new-tool">
                <img src="https://placehold.co/24x24" alt="Asana logo icon" class="blogs-new-icon-img">
                <div class="blogs-new-tool-name">Client Success Stories</div>
                <p class="blogs-new-tool-description"> Case studies that highlight your expertise and showcase measurable results.

                </p>
            </div>
        </div>
    </div>
</section>
<section class="contact-us-section">
    <div class="container">
        <div class="contact-text">
            <p class="highlighted-text">Want to see how we can </p>
            <p class="highlighted-text">transformyour marketing?</p>
        </div>
        <div class="btn-container">
            <a href="#contact" class="contact-btn">Get in touch today!</a>
        </div>
    </div>
</section>

@include('web.layouts.footer')
