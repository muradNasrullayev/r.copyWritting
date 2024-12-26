@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Plan - edit</h1>

</div>
<form method="POST" action="{{ route('admin.plans.update', $plan->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')




    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Plan Name</span>
        </div>
        <input type="text" class="form-control" name="plan_name" placeholder="Enter content" value="{{ $plan->plan_name }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
