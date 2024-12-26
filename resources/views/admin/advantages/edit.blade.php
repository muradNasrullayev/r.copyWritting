@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Capabilities - edit</h1>

</div>
<form method="POST" action="{{ route('admin.advantages.update', $advantage->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" class="form-control" name="title" placeholder="Enter content" value="{{ $advantage->name }}" required>
    </div>
    <br>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Plan name</span>
        </div>

        <select name="cart_id" class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @foreach($carts as $cart)

                <option value="{{$cart->id}}">{{$cart->title}}</option>

            @endforeach

        </select>

    </div>
    <br>

    <button type="submit" class="btn btn-success">Update</button>
</form>





@include('admin.layouts.footer')
