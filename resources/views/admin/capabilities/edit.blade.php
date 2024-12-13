@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities - edit</h1>

</div>
<form method="POST" action="{{ route('admin.capabilities.update', $capabilities->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Background Image</label>
        <br>
        <img src="{{ asset($capabilities->background_image) }}" alt="Current Icon" height="75" width="75">
        <br>
        <input type="file" id="file-input" class="file-input" name="background_image">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter content" value="{{ $capabilities->title }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{ $capabilities->description }}" required>
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Button text</span>
        </div>
        <input type="text" class="form-control" name="button_text" placeholder="Enter buttontext" value="{{ $capabilities->button_text }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
