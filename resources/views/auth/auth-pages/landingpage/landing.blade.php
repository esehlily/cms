@extends('auth.auth-layout.index')

@section('title')
    Landing
@endsection

@section('content')
    <div>
        <div class="row vh-100">
            <div class="col-lg-6 bg-white">
                <div class="overall">
                    <h1 class="text1" style="line-height: 60px">Welcome to the <br> Complaint Portal</h1>
                    <p class="pt-3" style="line-height: 30px">Lay your complaints here whether it is relating to personal concern, environmental concern or just any complaints</p>
                    <div class="pt-4">
                        <button class="login1">Login</button>
                        <button class="register1">Register</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bluey d-lg-block d-none">
                <img src="landing-assets\img\image.svg" alt="" class="picturey">
            </div>
        </div>
    </div>
@endsection
