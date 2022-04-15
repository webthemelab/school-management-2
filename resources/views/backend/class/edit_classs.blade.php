@extends('admin.admin_master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Edit Class:</h2>
                <form action="{{route('update.class')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$class->id}}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Class Name</label>
                      <input type="text" name="class" value="{{$class->class}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                    <button type="submit" class="btn btn-primary">update</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
