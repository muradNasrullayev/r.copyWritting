@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Testimonials - edit</h1>

</div>
<form method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Image</label>
        <br>
        <img src="{{ asset($testimonial->image) }}" alt="Current Icon" height="75" width="75">
        <br>
        <input type="file" id="file-input" class="file-input" name="image">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
        </div>
        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $testimonial->name }}" required>
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter content" value="{{ $testimonial->title }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{ $testimonial->description }}" required>
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Position</span>
        </div>
        <input type="text" class="form-control" name="position" placeholder="Enter position" value="{{ $testimonial->position }}" required>
    </div>
    <div class="input-group mb-3">
        <label for="options">Select stars count</label>
        <select id="options" name="stars">
            <option value="1" {{ $testimonial->stars == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $testimonial->stars == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ $testimonial->stars == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ $testimonial->stars == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ $testimonial->stars == 5 ? 'selected' : '' }}>5</option>
        </select>

    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
