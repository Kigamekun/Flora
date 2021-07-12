@extends('template');
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <input type="name"  id="nama_user" name="nama_user" class="form-control form-control-user @error('nama_user') is-invalid @enderror"
                                            placeholder="Nama Lengkap">
                                            @error('nama_user')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" id="exampleInputEmail"
                                        placeholder="Username">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="akses" value="1" class="form-control">
                                    </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
