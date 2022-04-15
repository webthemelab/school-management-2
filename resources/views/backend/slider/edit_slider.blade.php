@extends('admin.admin_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

              <form class="form-horizontal" action="{{route('update.slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$slider->id}}">

                <div class="card-body">
                  <h4 class="card-title">Edit Slider</h4>

                  <div class="form-group row">
                    <label  class="col-sm-3 text-end control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" name="title" value="{{$slider->title}}"  class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                    <input type="file" name="image" class="form-control">
                    <img src="{{asset($slider->image)}}" width="80" height="80" alt="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-3 text-end control-label col-form-label">Status</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="1" id="exampleRadios1" {{$slider->status==1?'checked':''}} >
                            <label class="form-check-label" for="exampleRadios1">
                              Active
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="0"  id="exampleRadios2" {{$slider->status==0?'checked':''}} value="option1">
                            <label class="form-check-label" for="exampleRadios2">
                              Deactive
                            </label>
                          </div>
                    </div>
                  </div>

                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="submit" class="btn btn-primary"  style="float: right;">
                      Update
                    </button>
                  </div>
                </div>
              </form>
            </div>



          </div>
    </div>{{--end row--}}
</div>
@endsection

