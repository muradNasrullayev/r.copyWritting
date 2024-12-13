@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities</h1>
</div>
<div class="input-group mb-3">

        <span class="input-group-text">Background Image</span>
    <img src="{{asset($capabilities->background_image)}}" height="100px" width="150px">
    </div>

<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Title: {{$capabilities->title}}</span>
    </div>
</div>
<br>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Description: {{$capabilities->description}}</span>
    </div>
</div>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Button Text: {{$capabilities->button_text}}</span>
    </div>
</div>
<br>

@include('admin.layouts.footer')
