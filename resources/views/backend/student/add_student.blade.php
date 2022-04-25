@extends('admin.admin_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

              <form class="form-horizontal" action="{{route('store.student')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <h2 class="card-title">Add Student:</h2>

                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group row">
                        <label  class="col-sm-3 text-end control-label col-form-label">Roll</label>
                        <div class="col-sm-9">
                          <input type="text" name="roll" class="form-control" required>
                        </div>
                      </div>
                   </div>{{--col md 6--}}

                   <div class="col-md-6">
                    <div class="form-group row">
                        <label  class="col-sm-3 text-end control-label col-form-label">Registration</label>
                        <div class="col-sm-9">
                          <input type="text" name="registration" class="form-control">

                          @error('registration')
                          <span style="color:rgb(204, 39, 39);">{{$message}}</span>

                          @enderror
                        </div>
                      </div>
                   </div>{{--col md 6--}}
                 </div>{{--row--}}


                 <div class="row">
                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Class</label>
                         <div class="col-sm-9">
                           <select  name="class_id" class="form-select" required>
                               <option value="" selected disabled>Select</option>
                                @foreach ($classses as $row)
                                    <option value="{{$row->id}}">{{$row->class}}</option>
                                @endforeach
                           </select>
                         </div>
                       </div>
                    </div>{{--col md 6--}}

                       <div class="col-md-6">
                         <div class="form-group row">
                            <label  class="col-sm-3 text-end control-label col-form-label">Section</label>
                            <div class="col-sm-9">
                              <select  name="section_id" class="form-select" required>
                                  <option value="" selected disabled>Select</option>
                                 @foreach ($sections as $row )
                                     <option value="{{$row->id}}">{{$row->section_name}}</option>
                                 @endforeach

                              </select>
                            </div>
                          </div>
                       </div>{{--col md 6--}}


                  </div>{{--row--}}


                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Year</label>
                         <div class="col-sm-9">
                           <select  name="student_year" class="form-select" required>
                               <option value="" selected disabled>Select</option>
                               <option>2022</option>
                               <option>2023</option>
                               <option>2024</option>
                               <option>2025</option>
                               <option>2026</option>
                               <option>2027</option>
                               <option>2028</option>
                               <option>2029</option>
                               <option>2030</option>
                           </select>
                         </div>
                       </div>
                    </div>{{--col md 6--}}

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label  class="col-sm-3 text-end control-label col-form-label">Student Name</label>
                            <div class="col-sm-9">
                              <input type="text"  name="student_name" class="form-control" required>

                            </div>
                          </div>
                       </div>{{--col md 6--}}


                  </div>{{--row--}}


                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Father Name</label>
                         <div class="col-sm-9">
                           <input type="text" name="father_name" class="form-control" required>
                         </div>
                       </div>
                    </div>{{--col md 6--}}

                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Mother Name</label>
                         <div class="col-sm-9">
                           <input type="text" name="mother_name" class="form-control" required>
                         </div>
                       </div>
                    </div>{{--col md 6--}}
                  </div>{{--row--}}


                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Email</label>
                         <div class="col-sm-9">
                           <input type="email" name="email" class="form-control" required>
                         </div>
                       </div>
                    </div>{{--col md 6--}}

                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Guardian Phone</label>
                         <div class="col-sm-9">
                           <input type="text" name="guardian_phone" class="form-control" required>
                         </div>
                       </div>
                    </div>{{--col md 6--}}
                  </div>{{--row--}}

                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Date of Birth</label>
                         <div class="col-sm-9">
                           <input type="date" name="dob" class="form-control" required>
                         </div>
                       </div>
                    </div>{{--col md 6--}}
                  </div>{{--row--}}


                  <div class="row">
                    <div class="col-md-6">
                        <h2>Present Address:</h2>
                     <div class="form-group row">
                         <label  class="col-sm-3 text-end control-label col-form-label">Village</label>
                         <div class="col-sm-9">
                           <input type="text" name="present_vill" class="form-control" required>
                         </div>
                       </div>

                       <div class="form-group row">
                        <label  class="col-sm-3 text-end control-label col-form-label">Post</label>
                        <div class="col-sm-9">
                          <input type="text" name="present_post" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-sm-3 text-end control-label col-form-label">Thana</label>
                        <div class="col-sm-9">
                          <input type="text" name="present_thana" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-sm-3 text-end control-label col-form-label">District</label>
                        <div class="col-sm-9">
                          <input type="text" name="present_dist" class="form-control" required>
                        </div>
                      </div>
                    </div>{{--col md 6--}}

                    <div class="col-md-6">
                        <h2>Permanent Address:</h2>
                        <div class="form-group row">
                            <label  class="col-sm-3 text-end control-label col-form-label">Village</label>
                            <div class="col-sm-9">
                              <input type="text" name="perma_vill" class="form-control" required>
                            </div>
                          </div>

                          <div class="form-group row">
                           <label  class="col-sm-3 text-end control-label col-form-label">Post</label>
                           <div class="col-sm-9">
                             <input type="text" name="perma_post" class="form-control" required>
                           </div>
                         </div>

                         <div class="form-group row">
                           <label  class="col-sm-3 text-end control-label col-form-label">Thana</label>
                           <div class="col-sm-9">
                             <input type="text" name="perma_thana" class="form-control" required>
                           </div>
                         </div>

                         <div class="form-group row">
                           <label  class="col-sm-3 text-end control-label col-form-label">District</label>
                           <div class="col-sm-9">
                             <input type="text" name="perma_dist" class="form-control" required>
                           </div>
                         </div>
                    </div>{{--col md 6--}}
                  </div>{{--row--}}


                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label  class="col-sm-3 text-end control-label col-form-label">Student Photo</label>
                            <div class="col-sm-9">
                              <input type="file" name="image" class="form-control" required>
                            </div>
                          </div>
                    </div>{{--col md-6--}}

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label  class="col-sm-3 text-end control-label col-form-label">Student Signature</label>
                            <div class="col-sm-9">
                              <input type="file" name="signature" class="form-control" required>
                            </div>
                          </div>
                    </div>{{--col md-6--}}
                  </div>{{--end row--}}


                  <div class="row">
                   <div class="col-md-12">
                      <input type="submit" name="btn" value="Add" class="btn btn-success" style="float: right;">
                   </div>
                 </div>{{--row--}}




                </div>

              </form>
            </div>



          </div>
    </div>{{--end row--}}
</div>
@endsection

