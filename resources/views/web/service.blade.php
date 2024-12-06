@include('layouts.header')
<section class="service1-pricing">
    <div class="service1-container">
        <div class="service1-pricing-header">
            <div class="service1-pricing-label">PRICING</div>
            <h1>Simple, transparent pricing</h1>
            <p class="service1-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor possure vel venenatis eu sit massa volutpat.</p>
            <div class="service1-toggle-container">
                <span>Monthly</span>
                <div class="service1-toggle"></div>
                <span>Annually</span>
            </div>
        </div>

        <div class="service1-pricing-cards">
            <div class="service1-card">
                <div class="service1-card-header">
                    <div class="service1-card-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div>
                        <div class="service1-plan-name">For individuals</div>
                        <div class="service1-plan-type">Basic</div>
                    </div>
                </div>
                <div class="service1-price">$99<span class="service1-period">/monthly</span></div>
                <div class="service1-features-title">What's included</div>
                <ul class="service1-feature-list">
                    <li><i class="fas fa-check"></i>All analytics features</li>
                    <li><i class="fas fa-check"></i>Up to 250,000 tracked visits</li>
                    <li><i class="fas fa-check"></i>Normal support</li>
                    <li><i class="fas fa-check"></i>Up to 3 team members</li>
                </ul>
                <button class="service1-btn">Get started</button>
            </div>

            <div class="service1-card service1-popular">
                <div class="service1-card-header">
                    <div class="service1-card-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div>
                        <div class="service1-plan-name">For startups</div>
                        <div class="service1-plan-type">Pro</div>
                    </div>
                    <span class="service1-popular-tag">Popular</span>
                </div>
                <div class="service1-price">$199<span class="service1-period">/monthly</span></div>
                <div class="service1-features-title">What's included</div>
                <ul class="service1-feature-list">
                    <li><i class="fas fa-check"></i>All analytics features</li>
                    <li><i class="fas fa-check"></i>Up to 1,000,000 tracked visits</li>
                    <li><i class="fas fa-check"></i>Premium support</li>
                    <li><i class="fas fa-check"></i>Up to 10 team members</li>
                </ul>
                <button class="service1-btn">Get started</button>
            </div>

            <div class="service1-card">
                <div class="service1-card-header">
                    <div class="service1-card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <div class="service1-plan-name">For big companies</div>
                        <div class="service1-plan-type">Enterprise</div>
                    </div>
                </div>
                <div class="service1-price">$399<span class="service1-period">/monthly</span></div>
                <div class="service1-features-title">What's included</div>
                <ul class="service1-feature-list">
                    <li><i class="fas fa-check"></i>All analytics features</li>
                    <li><i class="fas fa-check"></i>Up to 5,000,000 tracked visits</li>
                    <li><i class="fas fa-check"></i>Dedicated support</li>
                    <li><i class="fas fa-check"></i>Up to 50 team members</li>
                </ul>
                <button class="service1-btn">Get started</button>
            </div>
        </div>
    </div>
</section>
<section class="service-2-container">
    <div class="service-2-wrapper">
        <h1 class="service-2-title">Easily grow your team</h1>
        <p class="service-2-subtitle">The Business plan allows you to mix Creator accounts with Creator Lite accounts – so you can easily introduce more of your team to Loom for free.</p>

        <div class="service-2-cards-container">
            <div class="service-2-card">
                <span class="service-2-badge service-2-free">ALWAYS FREE</span>
                <h2 class="service-2-card-title">Creator Lite Accounts</h2>
                <p class="service-2-card-description">Creator Lite members are free with limited video recording capabilities, available on both Starter and Business.</p>
            </div>

            <div class="service-2-card">
                <span class="service-2-badge service-2-paid">PAID</span>
                <h2 class="service-2-card-title">Creator Accounts</h2>
                <p class="service-2-card-description">Creators are paid members with unlimited video recording capabilities, available on Business. You pay per Creator.</p>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
