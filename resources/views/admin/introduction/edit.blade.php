@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Why choose us? - edit</h1>

</div>
<form method="POST" action="{{ route('admin.whychooseus.update', $whyChooseUs->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Icon</label>
        <br>
        <img src="{{ asset($whyChooseUs->icon) }}" alt="Current Icon" height="75" width="75">
        <br>
        <input type="file" id="file-input" class="file-input" name="icon">
    </div>
    <br>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{ $whyChooseUs->title }}" required>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Content</span>
        </div>
        <input type="text" class="form-control" name="content" placeholder="Enter content" value="{{ $whyChooseUs->content }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
