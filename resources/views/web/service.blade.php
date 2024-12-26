@section('title', 'Service')
@include('web.layouts.header')
<!-- Navigation Panel -->
@section('title', 'Service')
@include('web.layouts.header')
<!-- Navigation Panel -->
<div class="service1-nav-panel">
    @foreach($plans as $key => $plan)
        <button class="service1-nav-btn{{ $key == 0 ? ' service1-active' : '' }}" data-plan="{{$plan->plan_name}}">
            {{$plan->plan_name}}
        </button>
    @endforeach
</div>

<!-- Pricing Section -->
<div class="service1-pricing">
    @foreach($plans as $plan)
        @foreach($plan->cart as $cartKey => $cart)
            <div class="service1-pricing-cards" data-plan-group="{{ $plan->plan_name }}" style="display: {{ $plan->plan_name == 'basic' && $cartKey == 0 ? 'flex' : 'none' }};">
                <div class="service1-card">
                    <div class="service1-card-header">
                        <div class="service1-card-icon"><i class="fas fa-chart-pie"></i></div>
                        <div class="service1-plan-name">{{ $plan->plan_name }} Plan</div>
                    </div>
                    <div class="service1-price">{{ $cart->amount }}<span class="service1-period">/month</span></div>
                    <div class="service1-features-title">{{ $cart->sub_title }}</div>
                    <ul class="service1-feature-list">
                        @foreach($cart->advantage as $advantage)
                            <li><i class="fas fa-check"></i>{{ $advantage->name }}</li>
                        @endforeach
                    </ul>
                    <button class="service1-btn">Choose Plan</button>
                </div>
            </div>
        @endforeach
    @endforeach
</div>

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
@include('web.layouts.footer')

