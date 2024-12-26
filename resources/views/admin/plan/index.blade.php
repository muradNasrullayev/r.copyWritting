@section('title','Dashboard')
@include('admin.layouts.header')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Plan</h1>

</div>
<a type="button" class="btn btn-success" href="{{route('admin.plans.create')}}">Add new item</a>
<!-- /.container-fluid -->

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Plan name</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($plans as $plan)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$plan->plan_name}}</td>

        <td>
            <div class="btn-group" role="group" style="gap: 2px;">
                <a href="{{ route('admin.plans.edit', $plan->id)}}"
                   class="btn btn-warning mt-3">Edit</a> <br>
                <form action="{{route('admin.plans.destroy',$plan->id)}}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-3">Delete</button> <br>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>



@include('admin.layouts.footer')
