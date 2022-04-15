@extends('admin.admin_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>View Slider:</h2>
            <div class="card">

            <table class="table table-bordered">
                <thead>
                    <tr class="bg bg-warning" style="text-align: center;">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($sliders as $row)
                    <tr style="text-align: center;">

                         <td>{{$row->id}}</td>
                         <td>{{$row->title}}</td>
                         <td>
                             <img src="{{asset($row->image)}}" width="80" height="80" alt="">
                         </td>
                         <td>
                             @if ($row->status==1)
                             <a href="{{route('deactive.slider',$row->id)}}" class="btn btn-info">Deactive</a>

                             @else
                             <a href="{{route('active.slider', $row->id)}}" class="btn btn-primary">Active</a>

                             @endif
                         </td>


                        <td width="15%">
                            <a href="{{route('edit.slider', $row->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete.slider', $row->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?????');">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>



          </div>
    </div>{{--end row--}}
</div>
@endsection
