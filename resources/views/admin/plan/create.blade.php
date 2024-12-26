@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Introduction - create</h1>

</div>
<form method="post" action="{{ route('admin.plans.store') }}" enctype="multipart/form-data">
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



    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Plan Name</span>
        </div>
        <input type="text" class="form-control" name="plan_name" placeholder="Enter plan name">
    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
<!-- /.container-fluid -->





@include('admin.layouts.footer')
