<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body> -->
@extends("Admin.Admin_layout.BasicApp")
@section("title","login")

@section("contents")
    <div class="page-body">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" width="500px">
                        <div class="card-header">
                            <h3 class="text-center fw-bold fs-1 mb-3"><span class="text-success">Fixed</span>Kart</h3>
                        </div>
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Session::has('err'))
                                <p class="class-danger">{{Session::get('err')}}</p>
                            @endif
                        <div class="card-body">
                            
                            <form action="{{route('admin.login')}}" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection









