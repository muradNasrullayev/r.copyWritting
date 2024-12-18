@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Testimonials</h1>
</div>
<div class="input-group mb-3">

        <span class="input-group-text">Image</span>
    <img src="{{asset($testimonial->image)}}" height="100px" width="150px">
    </div>

<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Name: {{$testimonial->name}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Title: {{$testimonial->title}}</span>
    </div>
</div>
<br>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Description: {{$testimonial->description}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Position: {{$testimonial->position}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Counts os stars: {{$testimonial->stars}}</span>
    </div>
</div>
<br>

@include('admin.layouts.footer')
