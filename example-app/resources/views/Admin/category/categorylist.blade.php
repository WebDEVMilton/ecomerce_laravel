@extends("Admin.Admin_layout.MasterApp")
@section("title","Category list")

@section("content")
            <!-- Container-fluid starts-->
            <div class="page-body">
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Category</h5>
                                        <form class="d-inline-flex">
                                            <a href="add-new-category.html"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Sub Category</th>
                                                        <th>Date</th>
                                                        <th>Option</th>
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                @foreach($getcategory as $getcategorys)
                                                    <tr>
                                                        <td>{{$getcategorys->category->catname}}</td>

                                                        <td>{{$getcategorys->subcatname}}</td>

                                                        <td>{{$getcategorys->created_at}}</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                <a href="" 
                                                        class="delete_cat"
                                                        data-id="{{$getcategorys->id}}">
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
                <!-- All User Table Ends-->

            @include('Admin.category.categoryajax')

            </div>
            <!-- Container-fluid end -->
@endsection