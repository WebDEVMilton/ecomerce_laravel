
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
                                 