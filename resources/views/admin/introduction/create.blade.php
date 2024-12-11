@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Why choose us? - create</h1>

</div>
<form method="post" action="{{ route('admin.whychooseus.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Icon</label>
        <input type="file" id="file-input" class="file-input" name="icon">
    </div>
   <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter title">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Content</span>
        </div>
        <input type="text" class="form-control" name="content" placeholder="Enter content">
    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
<!-- /.container-fluid -->





@include('admin.layouts.footer')
