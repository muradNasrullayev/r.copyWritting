@section('title', 'Service  ')
@include('web.layouts.header')
<!-- Navigation Panel -->
<div class="service1-nav-panel">
    <button class="service1-nav-btn service1-active" data-plan="basic">Basic Plan</button>
    <button class="service1-nav-btn" data-plan="standard">Standard Plan</button>
    <button class="service1-nav-btn" data-plan="premium">Premium Plan</button>
</div>

<!-- Pricing Section -->
<div class="service1-pricing">
    <!-- Basic
    PlanController -->
    <div class="service1-pricing-cards" data-plan-group="basic" style="display: flex;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Basic Plan</div>
            </div>
            <div class="service1-price">$19<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>10GB Storage</li>
                <li><i class="fas fa-check"></i>1 User</li>
                <li><i class="fas fa-check"></i>Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="basic" style="display: flex;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Basic Plan</div>
            </div>
            <div class="service1-price">$19<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>10GB Storage</li>
                <li><i class="fas fa-check"></i>1 User</li>
                <li><i class="fas fa-check"></i>Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="basic" style="display: flex;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Basic Plan</div>
            </div>
            <div class="service1-price">$19<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>10GB Storage</li>
                <li><i class="fas fa-check"></i>1 User</li>
                <li><i class="fas fa-check"></i>Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="basic" style="display: flex;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Basic Plan</div>
            </div>
            <div class="service1-price">$19<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>10GB Storage</li>
                <li><i class="fas fa-check"></i>1 User</li>
                <li><i class="fas fa-check"></i>Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>



    <!-- Standard PlanController -->
    <div class="service1-pricing-cards" data-plan-group="standard" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Standard Plan</div>
            </div>
            <div class="service1-price">$49<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>100GB Storage</li>
                <li><i class="fas fa-check"></i>5 Users</li>
                <li><i class="fas fa-check"></i>Priority Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="standard" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Standard Plan</div>
            </div>
            <div class="service1-price">$49<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>100GB Storage</li>
                <li><i class="fas fa-check"></i>5 Users</li>
                <li><i class="fas fa-check"></i>Priority Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="standard" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Standard Plan</div>
            </div>
            <div class="service1-price">$49<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>100GB Storage</li>
                <li><i class="fas fa-check"></i>5 Users</li>
                <li><i class="fas fa-check"></i>Priority Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="standard" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Standard Plan</div>
            </div>
            <div class="service1-price">$49<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>100GB Storage</li>
                <li><i class="fas fa-check"></i>5 Users</li>
                <li><i class="fas fa-check"></i>Priority Email Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>


    <!-- Premium PlanController -->
    <div class="service1-pricing-cards" data-plan-group="premium" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Premium Plan</div>
            </div>
            <div class="service1-price">$99<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>Unlimited Storage</li>
                <li><i class="fas fa-check"></i>Unlimited Users</li>
                <li><i class="fas fa-check"></i>24/7 Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="premium" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Premium Plan</div>
            </div>
            <div class="service1-price">$99<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>Unlimited Storage</li>
                <li><i class="fas fa-check"></i>Unlimited Users</li>
                <li><i class="fas fa-check"></i>24/7 Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="premium" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Premium Plan</div>
            </div>
            <div class="service1-price">$99<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>Unlimited Storage</li>
                <li><i class="fas fa-check"></i>Unlimited Users</li>
                <li><i class="fas fa-check"></i>24/7 Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
    <div class="service1-pricing-cards" data-plan-group="premium" style="display: none;">
        <div class="service1-card">
            <div class="service1-card-header">
                <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="service1-plan-name">Premium Plan</div>
            </div>
            <div class="service1-price">$99<span class="service1-period">/month</span></div>
            <div class="service1-features-title">What's included</div>
            <ul class="service1-feature-list">
                <li><i class="fas fa-check"></i>Unlimited Storage</li>
                <li><i class="fas fa-check"></i>Unlimited Users</li>
                <li><i class="fas fa-check"></i>24/7 Support</li>
            </ul>
            <button class="service1-btn">Choose Plan</button>
        </div>
    </div>
</div>

<section class="service-2-container">
    <div class="service-2-wrapper">
        <h1 class="service-2-title">Easily grow your team</h1>
        <p class="service-2-subtitle">The Business plan allows you to mix Creator accounts with Creator Lite accounts –
            so you can easily introduce more of your team to Loom for free.</p>

        <div class="service-2-cards-container">
            <div class="service-2-card">
                <span class="service-2-badge service-2-free">ALWAYS FREE</span>
                <h2 class="service-2-card-title">Creator Lite Accounts</h2>
                <p class="service-2-card-description">Creator Lite members are free with limited video recording
                    capabilities, available on both Starter and Business.</p>
            </div>

            <div class="service-2-card">
                <span class="service-2-badge service-2-paid">PAID</span>
                <h2 class="service-2-card-title">Creator Accounts</h2>
                <p class="service-2-card-description">Creators are paid members with unlimited video recording
                    capabilities, available on Business. You pay per Creator.</p>
            </div>
        </div>
    </div>
</section>
@include('web.layouts.footer')
