@extends('admin.admin_master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>View Class:</h2>
                <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>ClassName</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($classses as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->class}}</td>
                        <td>
                            <a href="{{route('edit.class', $row->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete.class', $row->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?????');">Delete</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-md-4">
                <h2>Add Class:</h2>
                <form action="{{route('store.class')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">Class Name</label>
                      <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
