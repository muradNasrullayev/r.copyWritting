@section('title', 'Booking')
@include('web.layouts.header')
<div class="ytviews-booking-container">
    <section class="left-section">
        <div class="brand">YTVIEWS.in</div>
        <h1>Keep in touch</h1>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
    </section>

    <section class="right-section">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="tel">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email">
            </div>
            <div class="form-group">
                <label>What support you need regarding*</label>
                <select>
                    <option value="" disabled selected></option>
                </select>
            </div>
            <div class="form-group">
                <label>Support Category*</label>
                <select>
                    <option value="" disabled selected></option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
</div>

@include('web.layouts.footer')
