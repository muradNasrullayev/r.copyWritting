@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blogs - create</h1>

</div>
<form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
    @csrf
    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">İcon Image</label>
        <input type="file" id="file-input" class="file-input" name="icon">
    </div>
   <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Sub Title</span>
        </div>
        <input type="text" class="form-control" name="subTitle" placeholder="Enter content">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Sub Description</span>
        </div>
        <input type="text" class="form-control" name="subDescription" placeholder="Enter description">
    </div>
    <br>

    <button type="submit" class="btn btn-success">Create</button>
</form>
<!-- /.container-fluid -->





@include('admin.layouts.footer')
