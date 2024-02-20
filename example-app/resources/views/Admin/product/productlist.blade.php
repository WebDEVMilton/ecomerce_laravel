@extends("Admin.Admin_layout.MasterApp")
@section("title","Product List")

@section("content")
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                        <div id="table_id_filter" class="dataTables_filter">
                            <label>Search: 
                                <input type="search" name="search" id="search" class="" placeholder="" aria-controls="table_id" style="padding:7px 0px;margin-bottom:10px;margin-left:2px;">
                            </label>
                        </div>
                            <div class="card card-table search-data">
                                <div class="card-body">

                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Products List</h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">import</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Export</a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-solid" href="{{url('admin/addProduct')}}">Add Product</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                 
                                    <div>
                                        <div class="table-responsive table-data">
                                        
                                            <table class="table all-package theme-table table-product" id="table_id">
                                            @csrf
                                                <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Category</th>
                                                        <th>SubCategory</th>
                                                        <th>Current Qty</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($product as $products)
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                            <img src="{{asset('Admin/images/img/'.$products->ptumbnail)}}" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>{{$products->pname}}</td>
                                                    
                                                        <td>{{$products->category->catname}}</td>
                                                    
                                                        <td>{{$products->subcategory->subcatname}}</td>

                                                        <td>{{$products->quantity}}</td>

                                                        <td class="td-price">${{$products->price}}</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>
                                                            
                                                                <li>
                                                                    <a href="{{url('/admin/editproduct',$products->id)}}"

                                                                        id="update_product">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                     <!-- <a  href="javascript:void(0)"
                                                                        data-id="{{$products->id}}"
                                                                        
                                                                        class="delete_product"
                                                                    >
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a> -->
                                                                    <a  href="javascript:void(0)"
                                                                   
                                                                     data-url="{{ route('delete.product', $products->id) }}"
                                                                       class="delete-product"
                                                            
                                                                    >
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                   
                </div>
                {!! Toastr::message() !!}
                {{ $product->links() }} 
                <!-- Container-fluid Ends-->
                @include('Admin.product.addproductajax')
            </div>
            

@endsection
