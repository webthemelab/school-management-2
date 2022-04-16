@extends('admin.admin_master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <h2>Edit Section:</h2>
                <form action="{{route('update.section')}}" method="POST">
                    @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">Class</label>
                      <select  name="class_id" class="form-select"  >
                          <option value="" selected disabled>Select</option>
                          @foreach ($classes as $row)
                            <option value={{$row->id}} {{$row->id==$section->class_id?'selected':''}}>{{$row->class}}</option>

                          @endforeach
                      </select>
                     </div>


                     <div class="form-group">
                        <label for="exampleInputEmail1">Section</label>
                        <input type="text" name="section_name" value="{{$section->section_name}}" class="form-control"  >
                        <input type="hidden" name="id" value="{{$section->id}}" class="form-control"  >


                       </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
@endsection

