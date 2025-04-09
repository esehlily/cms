@extends('auth.auth-layout.index')

@section('title')
    Landing
@endsection

@section('content')
    <div>
        <div class="row vh-100">
            <div class="d-lg-none" style="width: 350px; margin: 0 auto; height: 300px;  ">
                <img src="landing-assets\img\welcome image.svg" alt="" width="300px" height="350px">
            </div>
            <div class="col-lg-6 bg-white">
                <div class="overall">
                    <h1 class="text1 mb-0">Welcome to the <br> Complaint Portal</h1>
                    <p class="parry mb-0">Lay your complaints here whether it is relating to personal concern, environmental concern or just any complaints</p>
                    <div class="buttony">
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
