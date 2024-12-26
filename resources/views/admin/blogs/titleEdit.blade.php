@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blogs - edit</h1>

</div>
<form method="POST" action="{{ route('admin.blogs.update', 1) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter content" value="{{ $blog->title }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{ $blog->description }}" required>
    </div>
    <br>


    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
