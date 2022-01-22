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
                                <a href="{{route('mas_address_types.create')}}"
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
                                                            <th>Short Name</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($mas_address_types as $address_type)
                                                        <tr data-id="{{$address_type->id}}">
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$address_type->address_type_name}}</td>
                                                        <td>{{$address_type->short_name}}</td>
                                                        <td>{{$address_type->description}}</td>
                                                        
                                                        <td>
                                                             @if($address_type->is_active==1)
                                    <span class="badge bg-success font-size-12"> Active</span> 
                                    @else
                                    <span class="badge bg-danger font-size-12"> InActive</span>
                                    @endif
                                                        </td>
                                                            <!-- <td>{{$address_type->route_name}}</td>
                                                            <td>{{$address_type->route_url}}</td> -->
                                                            <td>
                                                                          <!--   <a href="{{url('mas_address_types-delete',$address_type->id)}}" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                                                                <i class="fa fa-trash text-primary"></i>
                                                                            </a> -->
                                                                             <a href="{{route('mas_address_types.edit',$address_type->id)}}" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                                                                <i class="fa fa-edit text-primary"></i>
                                                                            </a>
                                                                             
                                                                            
                                                                            <form method="post" action='{{route("mas_address_types.destroy",$address_type->id) }}'>
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