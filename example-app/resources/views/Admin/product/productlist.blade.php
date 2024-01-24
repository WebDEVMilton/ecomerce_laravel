@extends("Admin.Admin_layout.MasterApp")
@section("title","Add Product")

@section("content")
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
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
                                        <div class="table-responsive">
                                            <table class="table all-package theme-table table-product" id="table_id">
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
                                                                <img src="" class="img-fluid"
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
                                                                    <a  href="javascript:void(0)"
                                                                        data-url="{{route('delete.product',$products->id)}}"
                                                                        class="deleteproduct"
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
                    @include('Admin.product.addproductajax')
                </div>
                <!-- Container-fluid Ends-->
            </div>
@endsection