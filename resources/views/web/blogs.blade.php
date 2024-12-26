@section('title', 'Blogs')
@include('web.layouts.header')
<section class="blogs-new-center">
    <div class="blogs-new-content">
        <h1 class="blogs-new-title">{{$blogs_head->title}}</h1>
        <p class="blogs-new-subtitle">{{$blogs_head->description}}<span class="blogs-new-highlight"></span> </p>



        <div class="blogs-new-grid">
            @foreach($blogs as $key => $blog)
            <div class="blogs-new-tool">
                <img src="{{$blog->icon}}" alt="" class="fas fa-comments blogs-new-icon">
                <div class="blogs-new-tool-name">{{$blog->subTitle}}</div>
                <p class="blogs-new-tool-description">{{$blog->subDescription}}
                </p>
            </div>
            @endforeach
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
