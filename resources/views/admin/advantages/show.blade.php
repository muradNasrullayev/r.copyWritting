@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities</h1>
</div>

<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Title: {{$advantage->name}}</span>
    </div>
</div>
<br>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Cart name : {{$advantage->cart->title}}</span>
    </div>
</div>
<br>

@include('admin.layouts.footer')
