@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities - edit</h1>

</div>
<form method="POST" action="{{ route('admin.carts.update', $cart->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="file-upload">
        <span class="icon">📂</span>
        <label for="file-input" class="file-label">Icon</label>
        <br>
        <img src="{{ asset($cart->icon) }}" alt="Current Icon" height="75" width="75">
        <br>
        <input type="file" id="file-input" class="file-input" name="icon">
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter content" value="{{ $cart->title }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Amount</span>
        </div>
        <input type="text" class="form-control" name="amount" placeholder="Enter Amount" value="{{ $cart->amount }}" required>
    </div>
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Button text</span>
        </div>
        <input type="text" class="form-control" name="sub_title" placeholder="Enter Subtitle" value="{{ $cart->sub_title }}" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Plan Name</span>
        </div>
        <input type="text" class="form-control" name="plan_id" placeholder="Enter buttontext" value="{{ $cart->plan_id }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
