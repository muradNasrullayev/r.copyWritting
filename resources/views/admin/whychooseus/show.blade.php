@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Why choose us?</h1>
</div>
<div class="input-group mb-3">

        <span class="input-group-text">Icon</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle" viewBox="0 0 16 16">
        {{$whyChooseUs->icon}}/>
    </svg>
    </div>

<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Title: {{$whyChooseUs->title}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Content: {{$whyChooseUs->content}}</span>
    </div>
</div>
<br>

@include('admin.layouts.footer')
