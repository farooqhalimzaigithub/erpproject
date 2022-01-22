  @extends('layouts.main')
@section('content')


 <div class="card card-form" >
                                <div class="row no-gutters">
                                    <!-- <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Form Validation</strong></p>
                                        <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation. Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.</p>
                                    </div> -->
                                    <div class="col-lg-12 card-form__body card-body">
                                        <form action="{{route('companies.store')}}" method="POST">
                                          @csrf
                                            <div class="">
                                                <div class="form-row">
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label for="exampleInputEmail1">Name:</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="exampleInputEmail1" name="company_name">
                                                        
                                                    </div>
                                                   
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample03">Company Type</label>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="validationSample03"
                                                              name="company_type" 
                                                               required="">
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Official Email</label>
                                                        <input  type="email"
                                                               class="form-control"
                                                               id="validationSample02" name="official_email" required="">
                                                        
                                                    </div>
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Fax Number</label>
                                                        <input type="number"
                                                               class="form-control"
                                                               id="validationSample02" name="fax_num" required="">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-row">
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Official Phone</label>
                                                        <input type="number"
                                                               class="form-control"
                                                               id="validationSample02" name="official_phone" required="">
                                                        
                                                    </div>
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Official Mobile</label>
                                                        <input type="number"
                                                               class="form-control"
                                                               id="validationSample02" name="official_mobile" required="">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-row">
                                                     <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Description</label>
                                                        <textarea type="email"
                                                               class="form-control"
                                                               id="validationSample02" name="official_email" required=""></textarea>
                                                        
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label for="validationSample02">Website Address</label>
                                                        <textarea type="email"
                                                               class="form-control"
                                                               id="validationSample02" name="website_address" required=""></textarea>
                                                        
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