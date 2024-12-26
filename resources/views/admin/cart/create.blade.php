@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities - create</h1>

</div>
<form method="post" action="{{ route('admin.carts.store') }}" enctype="multipart/form-data">
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
    <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Amount</span>
        </div>
        <input type="text" class="form-control" name="amount" placeholder="Enter amount">
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Sub Title</span>
        </div>
        <input type="text" class="form-control" name="sub_title" placeholder="Enter Sub title">
    </div>


    <div class="dropdown">
        <select name="plan_id" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           @foreach($plans as $plan)

                <option value="{{$plan->id}}">{{$plan->plan_name}}</option>

            @endforeach

        </select>

    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
<!-- /.container-fluid -->





@include('admin.layouts.footer')
