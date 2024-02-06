@extends("Admin.Admin_layout.MasterApp")
@section("title","Add Product")

@section("content")
<div class="page-body">

<!-- New Product Add Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                  
                 <form action="{{route('add.productdata')}}"  class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data" id="Addproductform">
                    @csrf  
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Information</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Product
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="pname" id="pname"
                                            placeholder="Product Name">
                                    </div>
                                </div>

                                <!-- <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Product
                                        Type</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option disabled>Static Menu</option>
                                            <option>Simple</option>
                                            <option>Classified</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100 " name="cat_id" id="cat_id">
                                            <option disabled>Category Menu</option>
                                            @foreach($catdata as $catdatas)
                                            <option value="{{$catdatas->id}}">{{$catdatas->catname}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="subcat_id" id="subcat_id">

                                            <option value=""></option>
                                            @foreach($subcat as $subcatdatas)
                                            <option value="{{$subcatdatas->id}}">{{$subcatdatas->subcatname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Brand</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option disabled>Brand Menu</option>
                                            <option value="puma">Puma</option>
                                            <option value="hrx">HRX</option>
                                            <option value="roadster">Roadster</option>
                                            <option value="zara">Zara</option>
                                        </select>
                                    </div>
                                </div> -->

                                <!-- <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option disabled>Unit Menu</option>
                                            <option>Kilogram</option>
                                            <option>Pieces</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Tags</label>
                                    <div class="col-sm-9">
                                        <div class="bs-example">
                                            <input type="text" class="form-control"
                                                placeholder="Type tag & hit enter" id="tags" name="tags"
                                                data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                    <div class="col-sm-9">
                                        <label class="switch">
                                            <input type="checkbox" value="1" name="exchange" id="exchange"><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                    <div class="col-sm-9">
                                        <label class="switch">
                                            <input type="checkbox" value="1"  name="refund" id="refund"><span
                                                class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Description</h5>
                            </div>

                            <form class="theme-form theme-form-2 mega-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                Description</label>
                                            <div class="col-sm-9">
                                                <div id="editor"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Images</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Images</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-choose" type="file" name="pimage"
                                             id="pimage" multiple>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                        Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-choose" type="file" name="ptumbnail" id="ptumbnail"
                                            multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Videos</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <!-- <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Video
                                        Provider</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option>Vimeo</option>
                                            <option>Youtube</option>
                                            <option>Dailymotion</option>
                                            <option>Vimeo</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Video
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="pvideo" id="pvideo"
                                            placeholder="Video Link">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product variations</h5>
                            </div>

                            <form class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Option
                                        Name</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option>Color</option>
                                            <option>Size</option>
                                            <option>Material</option>
                                            <option>Style</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Option
                                        Value</label>
                                    <div class="col-sm-9">
                                        <div class="bs-example">
                                            <input type="text" class="form-control"
                                                placeholder="Type tag & hit enter" id="#inputTag"
                                                data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <a href="#" class="add-option"><i class="ri-add-line me-2"></i> Add Another
                                Option</a>
                        </div>
                    </div> -->

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Shipping</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Weight
                                        (kg)</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="shipweight" id="shipweight" placeholder="Weight">
                                    </div>
                                </div>

                                <!-- <div class="row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Dimensions
                                        (cm)</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option>Length</option>
                                            <option>Width</option>
                                            <option>Height</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Price</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="price" id="price" placeholder="0">
                                    </div>
                                </div>
                                <!-- <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">Compare at
                                        price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" placeholder="0">
                                    </div>
                                </div> -->
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">Cost per item</label>
                                    <!-- <div class="col-sm-5">
                                        <input class="form-control" type="number" placeholder="0">
                                    </div> -->
                                    <div class="col-sm-2">
                                        <label>Margin:</label>
                                        <span>25%</span>
                                    </div>
                                    <div class="col-sm-2">
                                        <label>Profit:</label>
                                        <span>$5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Inventory</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <!-- <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text">
                                    </div>
                                </div> -->
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Stock
                                        Status</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="stock" id="stock">
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out Of Stock">Out Of Stock</option>
                                            <option value="On Backorder">On Backorder</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="quantity" id="quantity">
                                    </div>
                                </div>
                            </div>
                            <!-- <table class="table variation-table table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Variant</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Red</td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <ul class="order-option">
                                                <li><a href="javascript:void(0)" data-toggle="modal"
                                                        data-target="#deleteModal"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" placeholder="0">
                                        </td>
                                        <td>
                                            <ul class="order-option">
                                                <li><a href="javascript:void(0)" data-toggle="modal"
                                                        data-target="#deleteModal"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Link Products</h5>
                            </div>

                            <form class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Upsells</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="search">
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Cross-Sells</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Search engine listing</h5>
                            </div>

                            <div class="seo-view">
                                <span class="link">https://fastkart.com</span>
                                <h5>Buy fresh vegetables & Fruits online at best price</h5>
                                <p>Online Vegetable Store - Buy fresh vegetables & Fruits online at best
                                    prices. Order online and get free delivery.</p>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Page title</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="search" name="pagetitle" id="pagetitle"
                                            placeholder="Fresh Fruits">
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label class="form-label-title col-sm-3 mb-0">Meta
                                        description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" name="metadesc" id="metadesc"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="form-label-title col-sm-3 mb-0">URL handle</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="search" name="meta_url" id="meta_url"
                                            placeholder="https://fastkart.com/fresh-veggies">
                                    </div>
                                </div>

                                 <button  class="btn btn-primary " type="submit">Save product</button>
                            </div> 
                        </div>
                    </div>
                 
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- New Product Add End -->

</div>

    
@include('Admin.product.addproductajax')
<!-- Container-fluid End -->

{!! Toastr::message() !!}
</div>
<!-- Page Body End -->


@endsection