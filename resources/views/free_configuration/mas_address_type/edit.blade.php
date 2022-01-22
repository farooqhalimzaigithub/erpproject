@extends('layouts.main')
@section('content')


<div class="card card-form" >
  <div class="row no-gutters">
              <!-- <div class="col-lg-4 card-body">
                  <p><strong class="headings-color">Form Validation</strong></p>
                  <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation. Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.</p>
                </div> -->
                <div class="col-lg-12 card-form__body card-body">
                  <form action="{{route('mas_address_types.update',$mas_address_type->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="">
                      <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                          <label for="exampleInputEmail1">Name:</label>
                          <input type="text"
                          class="form-control"
                          id="exampleInputEmail1" value="{{$mas_address_type->address_type_name}}" name="address_type_name">

                        </div>

                        <div class="col-12 col-md-6 mb-3">
                          <label for="validationSample03">Short Name</label>
                          <input type="text" class="form-control" id="validationSample03" name="short_name" value="{{$mas_address_type->short_name}}"  required="">

                        </div>
                      </div>
                      <div class="form-row">
                       <div class="col-12 col-md-6 mb-3">
                        <label for="validationSample02">Description</label>
                        <textarea type="text" class="form-control" id="validationSample02" name="description" required="" value="{{$mas_address_type->description}}">{{$mas_address_type->description}}</textarea>

                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                         
                          </div>
                          <button class="btn btn-primary"
                          type="submit">Update</button>
                        </form>
                      </div>
                    </div>
                  </div>

                  @stop 