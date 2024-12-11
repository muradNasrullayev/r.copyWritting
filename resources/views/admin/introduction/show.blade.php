@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Why choose us?</h1>
</div>
<div class="input-group mb-3">

        <span class="input-group-text">Icon</span>
    <img src="{{asset($whyChooseUs->icon)}}" height="75px" width="75px">
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
