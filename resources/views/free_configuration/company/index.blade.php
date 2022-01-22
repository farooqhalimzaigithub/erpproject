 @extends('layouts.main')
@section('content')

                        <!-- <div class="d-flex flex-column-fluid"> -->
                            <!--begin::Container-->
                            <div class="container">
                                <!--begin::Teachers-->
                                <!-- <div class="d-flex flex-row"> -->
                                    <!--begin::Aside-->
                                    
                                    <!--end::Aside-->
                                    <!--begin::Content-->
                                    <!-- <div class="flex-row-fluid ml-lg-12"> -->
                                        <!--begin::Card-->
                                        <!-- <div class="card card-custom col-lg-12"> -->
                                            <!--begin::Header-->
                                           <div class="container page__heading-container">
                            <div class="page__heading d-flex align-items-center">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <!-- <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li> -->
                                            <!-- <li class="breadcrumb-item active">Products</li> -->
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Detail</h1>
                                </div>
                                <a href="{{route('companies.create')}}"
                                   class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin: Search Form-->
                                                <!--begin::Search Form-->
                                                
                                                <table id="example" class="table table-striped table-bordered" >
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Type</th>
                                                            <th>Email</th>
                                                            <th>Fax Number</th>
                                                            <th>Phone</th>
                                                            <th>Mobile</th>
                                                            <th>Status</th>
                                                            <!-- <th>Route Name</th>
                                                            <th>Url</th> -->
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($companies as $company)
                                                        <tr data-id="{{$company->id}}">
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$company->company_name}}</td>
                                                        <td>{{$company->company_type}}</td>
                                                        <td>{{$company->official_email}}</td>
                                                        <td>{{$company->fax_num}}</td>
                                                        <td>{{$company->official_phone}}</td>
                                                        <td>{{$company->official_mobile}}</td>
                                                        <td>
                                                             @if($company->is_active==1)
                                    <span class="badge bg-success font-size-12"> Active</span> 
                                    @else
                                    <span class="badge bg-danger font-size-12"> InActive</span>
                                    @endif
                                                        </td>
                                                            <!-- <td>{{$company->route_name}}</td>
                                                            <td>{{$company->route_url}}</td> -->
                                                            <td>
                                                                          <!--   <a href="{{url('companies-delete',$company->id)}}" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                                                                <i class="fa fa-trash text-primary"></i>
                                                                            </a> -->
                                                                             <a href="{{route('companies.edit',$company->id)}}" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                                                                <i class="fa fa-edit text-primary"></i>
                                                                            </a>
                                                                             
                                                                            
                                                                            <form method="post" action='{{route("companies.destroy",$company->id) }}'>
                                                                                {{csrf_field()}}
                                                                                {{method_field('DELETE')}}
                                                                                <button type="submit" style="border: none;"><i class="fa fa-trash text-danger"></i></button>
                                                                            </form></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    
                                                </table>
                                                <!--begin: Datatable-->
                                                <div class="datatable datatable-bordered " id="">
                                                    
                                                </div>
                                                <!--end: Datatable-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    

@stop                    