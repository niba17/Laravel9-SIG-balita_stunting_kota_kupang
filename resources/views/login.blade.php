@extends('layouts.main')

@section('title', 'SIG | Login')

@section('content')
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <section class="vh-100" style="background-color: #174A41;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    @if (Session::has('errMessage'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ Session::get('errMessage') }}
                        </div>
                    @endif
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-4">Login Admin</h3>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Username</label>
                                    <input type="text" name="name"
                                        class="form-control  @error('name') is-invalid @enderror form-control-lg" />
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('name') is-invalid @enderror form-control-lg" />
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-lg btn-block mb-4" type="submit">Login</button>
                                <a href="/"><i class="fa-solid fa-backward"></i> Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
