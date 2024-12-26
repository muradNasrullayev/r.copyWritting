@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blogs - edit</h1>

</div>
<form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Background Image</label>
        <br>
        <img src="{{ asset($blog->icon) }}" alt="Current Icon" height="75" width="75">
        <br>
        <input type="file" id="file-input" class="file-input" name="icon">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="subTitle" placeholder="Enter content" value="{{ $blog->subTitle }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <input type="text" class="form-control" name="subDescription" placeholder="Enter description" value="{{ $blog->subDescription }}" required>
    </div>
    <br>


    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
