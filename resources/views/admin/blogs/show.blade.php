@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blogs</h1>
</div>
<div class="input-group mb-3">

        <span class="input-group-text">Icon</span>
    <img src="{{asset($blog->icon)}}" height="100px" width="150px">
    </div>

<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Title: {{$blog->title}}</span>
    </div>
</div>
<br>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Description: {{$blog->description}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Sub Title: {{$blog->subTitle}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Sub Description: {{$blog->subDescription}}</span>
    </div>
</div>
<br>

@include('admin.layouts.footer')
