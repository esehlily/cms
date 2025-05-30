@extends('auth.auth-layout.index')

@section('title')
    Register
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-lg-6 bluey d-lg-block d-none">
                <img src="landing-assets\img\image.svg" alt="" class="picturey mt-4" data-aos="fade-left" data-aos-duration="2000">
            </div>
            <div class="col-lg-6 bg-white">
                <div class="overall1" data-aos="fade-right" data-aos-duration="2000">
                    <form action="{{ route('register.post')}}" method="POST">
                        @csrf
                        <h2 class="text1 mb-0">Create Account</h2>
                        <p class="parry1 mb-0">Create an account to get started!</p>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>There were some problems with your input:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="mb-3">
                            <input type="text" class="mt-3" name="name" placeholder="Name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="" name="matric_number" placeholder="Matriculation Number" required>
                            @error('matric_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="" name="password" placeholder="Password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="" name="password_confirmation" placeholder="Confirm Password" required>
                            @error('password_confirmation')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="registerbtn mb-4" name="register">Register</button>
                        <p>Already have an account? <a href="{{ route('login')}}" class="login2">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
