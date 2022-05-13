<head>
    <style>
    </style>
</head>
@extends('master')
@section('content')
<div id="section-First" class="w100 mainDiv relative">
    <img src="{{url('pictures/slide.jpg')}}" width="100%" />
    <div class="absolute center-element w100 txt-center">
        <p class="txt-SubTitle txt-mainColor2"> Feel the Adrenaline &</p>
        <h1 class="txt-Title txt-mainColor3 bgColor-main2">
            Join our Free <span class="txt-mainColor">Live Workouts</span>
        </h1>
        <button class="btn btn-main txt-SectionText margin-top-15">
            Join Us
        </button>
    </div>
</div>
<div id="section-Second" class="w100 mainDiv relative">
    <img src="{{url('pictures/plates.jpg')}}" width="100%" />
    <div class="w50 h100 bgColor-transparent-main absolute table top-0">
        <div class="tableCell tableCell-middle">
            <h1 class="txt-mainColor2 txt-Sectiontitle txt-center">
                What Is Fitbook ?
            </h1>
            <div id="servicesDiv" class="w100">
                <ul class="txt-mainColor2 txt-sectiontext w90 margin-auto ul-pd-top-15">
                    <li>
                        Join our free live workouts through zoom application and get fit.
                    </li>
                    <li>
                        Share your photos, videos and your sport life with other athletes.
                    </li>
                    <li>
                        Become friends and Chat with athletes around the world.
                    </li>
                    <li>
                        Join our interesting coming events.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="section-Account" class="mainDiv bgColor-main2 pd-top-15 pd-bottom-15">
    <h1 class="txt-sectionTitle txt-mainColor3 txt-center">Welcome</h1>
    <div id="accountBtnDiv" class="w80 margin-auto txt-center">
        <button type="button" class="btn btn-main btn-radius txt-sectionText w40 openBtn btnMark uncheck-loginDiv_registerDiv" id="registerDiv_loginDiv">Register</button>
        <button type="button" class="btn btn-main btn-radius txt-sectionText w40 openBtn btnMark uncheck-registerDiv_loginDiv" id="loginDiv_registerDiv">Login</button>
    </div>
    <div class="w100 txt-center none accountDiv" id="registerDiv">
            <div id="reg-username" class="pd-top-25">
            <input type="text" name="username" class="username input txt-sectionText w60" placeholder="username">
        </div>
        <div id="reg-password" class="pd-top-25">
            <input type="password" name="password" class="password input txt-sectionText w60" placeholder="password">
        </div>
        <div id="reg-gender" class="pd-top-15 w60 margin-auto">
            <p class="txt-sectionText txt-mainColor3 txt-center w100">gender</p>
            <div id="genderButton" class="flex flex-alignMiddleItem flex-justifyCenter pd-top-10">
                <div class="flex flex-alignMiddleItem flex-05 flex-justifyCenter">
                    <input type="radio" name="gender" value="female"> Female
                </div>
                <div class="flex flex-alignMiddleItem flex-05 flex-justifyCenter">
                    <input type="radio" name="gender" value="male"> Male
                </div>
            </div>
        </div>
        <div id="reg-Button" class="pd-top-25">
            <button type="submit" class="register btn btn-main txt-sectionText w60">REGISTER</button>
        </div>
    </div>
    <div class="w100 txt-center accountDiv none" id="loginDiv">
    <div id="login-username" class="pd-top-25">
            <input type="text" class="input txt-sectionText w60" placeholder="username">
        </div>
        <div id="login-password" class="pd-top-25">
            <input type="password" class="input txt-sectionText w60" placeholder="password">
        </div>
        <div id="login-Button" class="pd-top-25">
            <button type="submit" class="btn btn-main txt-sectionText w60">LOGIN</button>
        </div>
    </div>
    <div class="alertContainer w100 txt-center">
    </div>
</div>
<div id="section-subscribe" class="mainDiv txt-center pd-top-25 pd-bottom-25">
    <h1 class="txt-sectionTitle txt-mainColor2">Wanna Join Our Workouts ?</h1>
    <div class="relative"> 
        <h3 class="txt-sectionText txt-mainColor">Subscribe</h3>
        <div class="pd-top-15">
            <input type="email" placeholder="email" class="input w60" id="sectionSubscribe-input">
        </div>
        <div class="pd-top-15">
            <p class="txt-sectionDesc txt-mainColor absolute left-20 top-15 alert none">Invalid Email Address</p>
            <button type="submit" class="subscribe btn btn-main w60 sectionSubscribe-input">SUBSCRIBE</button>
        </div>
    </div>
</div>
@endsection