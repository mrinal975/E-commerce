@extends('frontEnd.profile.profilelayout')
@section('mainContent')
    <br>
    <br>
    <div class="container">
        <div class="col-md-12" style="min-height: 80vh;">
            <div class="row">
                <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                <div class="col-md-3 col-sm-12 offset-md-1" style="min-height: 80vh;background-color: #edecec;">
                    <div class="pub_pro_pic">
                        <br>
                        @if(($profilepicture->image)!==null &&($profilepicture->image)!=='')
                            <img src="{{asset($profilepicture->image)}}" alt="Databases avater1" class="profilepicturecss">
                        @else
                            <img src="{{asset('profile.png')}}" alt="Profile avater1" class="profilepicturecss">
                            @endif

                    </div>
                </div>

                <div class="col-md-7 col-sm-12" style="background-color: #edecec; min-height: 80vh; border-left: 2px solid #cccccc82;">
                    <div style="background-color: #edecec; padding-top: 25px;">

                        <div class="col-md-12 text-center" style="padding-bottom: 15px; padding-top: 10px;">
                                <h1 class="head-tag">Profile</h1>
                            <hr style="height: 2px;background: #128b86;">
                        </div>
                            <div class="col-md-12 " style="border-bottom: 2px dashed; padding-bottom: 11px; padding-top: 10px;">
                                <div class="col-sm-6">
                                    <p>Name</p>
                                </div>
                                <div class="col-sm-6 ">
                                    <p>{{$profiles->firstname.' '.$profiles->lastname}}</p>
                                </div>
                            </div>
                        <div class="col-md-12 " style="border-bottom: 2px dashed; padding-bottom: 11px; padding-top: 10px;">
                            <div class="col-sm-6">
                                <p>E-mail</p>
                            </div>
                            <div class="col-sm-6 ">
                                <p>{{$profiles->email}}</p>
                            </div>
                        </div>
                        <div class="col-md-12 " style="border-bottom: 2px dashed; padding-bottom: 11px; padding-top: 10px;">
                            <div class="col-sm-6">
                                <p>Contact Number</p>
                            </div>
                            <div class="col-sm-6 ">
                                <p>{{$profiles->phonenumber}}</p>
                            </div>
                        </div>
                        <div class="col-md-12 " style="border-bottom: 2px dashed; padding-bottom: 11px; padding-top: 10px;">
                            <div class="col-sm-6">
                                <p>Address</p>
                            </div>
                            <div class="col-sm-6 ">
                                <p>{{$profiles->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-sm-12 text-center" style="padding-top: 15px; padding-bottom: 15px;">
                    <a href="{{url('/edit/profile')}}" class="btn btn-info text-center">Edit Profile</a>
                </div>
                <br>
            </div>
        </div>
    </div>
    @endsection