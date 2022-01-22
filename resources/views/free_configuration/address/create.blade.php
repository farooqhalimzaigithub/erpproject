  @extends('layouts.main')
@section('content')


 <div class="card card-form" >
                                <div class="row no-gutters">
                                    <!-- <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Form Validation</strong></p>
                                        <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation. Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.</p>
                                    </div> -->
                                    <div class="col-lg-12 card-form__body card-body">
                                        <form action="{{route('branches.store')}}" method="POST">
                                          @csrf
                                            <div class="">
                                                <div class="form-row">
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label for="exampleInputEmail1">Name:</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleInputEmail1" name="branch_name">
                                                        
                                                    </div>
                                                   
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample03">Phone Number</label>
                                                        <input type="number"
                                                               class="form-control"
                                                               id="validationSample03"
                                                              name="phone_number" 
                                                               required="">
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Address</label>
                                                        <textarea type="text"
                                                               class="form-control"
                                                               id="validationSample02" name="address" required=""></textarea>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input"
                                                           type="checkbox"
                                                           value=""
                                                           id="invalidCheck01"
                                                           required=""
                                                           checked="">
                                                    <label class="custom-control-label"
                                                           for="invalidCheck01">
                                                        Agree to terms and conditions
                                                    </label>
                                                </div> -->
                                            </div>
                                            <button class="btn btn-primary"
                                                    type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($errors->any())
<!-- errors is called errorsbag -->
 <!-- any for used everytype of error -->
 <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
   @endforeach
 </ul>
@endif

                            @stop 