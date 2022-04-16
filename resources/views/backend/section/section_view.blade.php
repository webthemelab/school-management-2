@extends('admin.admin_master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>View Section:</h2>
                <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>ClassName</th>
                        <th>Section Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row['classses']['class']}}</td>
                        <td>{{$row->section_name}}</td>
                        <td>
                            <a href="{{route('edit.section', $row->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete.section', $row->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?????');">Delete</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-md-4">
                <h2>Add Section:</h2>
                <form action="{{route('store.section')}}" method="POST">
                    @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">Class</label>
                      <select  name="class_id" class="form-select"  >
                          <option value="" selected disabled>Select</option>
                          @foreach ($classes as $row)
                            <option value={{$row->id}}>{{$row->class}}</option>

                          @endforeach
                      </select>
                     </div>


                     <div class="form-group">
                        <label for="exampleInputEmail1">Section</label>
                        <input type="text" name="section_name" class="form-control"  >


                       </div>


                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>
@endsection

