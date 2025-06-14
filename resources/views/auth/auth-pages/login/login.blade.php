@extends('auth.auth-layout.index')

@section('title')
    Login
@endsection

@section('content')
    <div class="container-fluid overflow-y-hidden">
        <div class="row vh-100">
            <div class="col-lg-6 bg-white">
                <div class="overall1" data-aos="fade-right" data-aos-duration="2000">
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <h2 class="text1 mb-0">Login</h2>
                        <p class="parry1 mb-3">Login into your account</p>
                        <div class="mb-2">
                            <input type="text" class="mt-2" name="matric_number" placeholder="Matriculation Number" required>
                            @error('matric_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <input type="password" class="mt-2" name="password" placeholder="Password" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <p class="d-flex justify-content-end"><a href="" class="register2">Forgot Password?</a></p>
                        </div>
                        <button type="submit" class="loginbtn mb-4" name="login">Login</button>
                        <p>Don't have an account? <a href="{{ route('register') }}" class="register2">Register</a></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bluey d-lg-block d-none">
                <img src="landing-assets\img\image.svg" alt="" class="picturey" data-aos="fade-left" data-aos-duration="2000">
            </div>
        </div>
    </div>
@endsection
