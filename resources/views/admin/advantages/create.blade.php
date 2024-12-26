@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities - create</h1>

</div>
<form method="post" action="{{ route('admin.advantages.store') }}" enctype="multipart/form-data">
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
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter title">
    </div>
    <br>


    <div class="dropdown">
        <select name="cart_id" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           @foreach($carts as $cart)

                <option value="{{$cart->id}}">{{$cart->title}}</option>

            @endforeach

        </select>

    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
<!-- /.container-fluid -->





@include('admin.layouts.footer')
