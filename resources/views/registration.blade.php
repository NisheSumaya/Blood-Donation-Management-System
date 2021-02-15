<!DOCTYPE html>
<html lang="en">
<head>

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
  body {
    margin: 0;
    color: #f1f2f7;
    background-image: url({{asset('/assets/img/reg.jpg')}});
    background-position:center;
    background-repeat: no-repeat;
    background-size:cover;


    font: 600 16px/18px 'Open Sans', sans-serif;
    height:100vh;
    width:100vw;
    display:flex;
    justify-content:center;
}

.login-box {
    width: 100%;
    margin: auto;
    max-width: 525px;
    min-height: 670px;
    position: relative;
    background: url('{{asset("login.jpg")}}') no-repeat center center;
    background-size: cover;
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
}

.login-snip {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 20px 10px;
    background: rgb(150 39 14 / 90%);
}

.login-snip .login,
.login-snip .sign-up-form {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear
}

.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check {
    display: none
}

.login-snip .tab,
.login-space .group .label,
.login-space .group .button {
    text-transform: uppercase
}

.login-snip .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
    color: #fff;
    border-color: #1161ee
}

.login-space {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d
}

.login-space .group {
    margin-bottom: 15px
}

.login-space .group .label,
.login-space .group .input,
.login-space .group .button {
    width: 100%;
    color: #fff;
    display: block
}

.login-space .group .input,
.login-space .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
}

.login-space .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle
}

.login-space .group .label {
    color: #f5ecec;
    font-size: 12px
}

.login-space .group .button {
    background: #fbf1f1
}

.login-space .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255, .1)
}

.login-space .group label .icon:before,
.login-space .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s
}

.login-space .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0)
}

.login-space .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0)
}

.login-space .group .check:checked+label {
    color: #fff
}

.login-space .group .check:checked+label .icon {
    background: #1161ee
}

.login-space .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg)
}

.login-space .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg)
}

.login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
    transform: rotate(0)
}

.login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
    transform: rotate(0)
}

*,
:after,
:before {
    box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
    content: '';
    display: table
}

.clearfix:after {
    clear: both;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}

.hr {
    height: 2px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, .2)
}

.foot {
    text-align: center
}

.card {
    width: 500px;
    left: 100px
}

::placeholder {
    color: #b3b3b3
}
    </style>
</head>
<body >


<form method="post" action="{{route('registration.store')}}">

@csrf
<div class="row">
<div>@if ($errors->any())
    <div>
        
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        
    </div>
@endif
</div>
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip">
                
@if(session()->has('msg'))

<p style="color:#2ecc71">{{session()->get('msg')}}</p>

@endif
                     <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                     <label  for="tab-1" class="tab" >Registration</label> 
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group">
                                 <label for="username" class="label">Username</label>
                                  <input id="username" data-type="text" class="input" name="username" placeholder="Enter your username">
                                 </div>
                            
                                 <div class="group">
                                 <label for="password" class="label">Password</label>
                                  <input id="password" type="password" class="input" name="password" placeholder="Enter your password">
                                 </div>
                            
                            <div class="group"> <label for="email" class="label">Email</label> <input id="email" name="email" type="email" class="input" data-type="email" placeholder="Enter your Email address"> </div>
                            
                            <div class="group"> <label for="contact" class="label">Contact</label> <input min="0" oninput="this.value = Math.abs(this.value)" id="contact" type="number" name="contact" class="input" data-type="number" placeholder="Enter your Phone Number"> </div>
                            <div class="form-group">
                             <label for="">Blood Group</label>
                             <select name="category_id" id=""class="form-control">
                             @foreach($seekers as $seeker)
                     <option value="{{$seeker->id}}">{{ $seeker->name}}</option>
                            @endforeach
                              </select>
                               </div>   
 
                            <div class="group"> 
                            <label for="address" class="label">Address</label>
                             <input id="address" type="textarea" class="input" name="address" data-type="textarea" placeholder="Enter your valid Address"> 
                             </div>
                            <div style="
                            margin-bottom: 10px;
                            color: #b7b4b4;
                            font-weight: 100;
                            font-size: 15px;
                            ">
                            <input type="radio" name="role" value="seeker"> Seeker
                            <input type="radio" name="role" value="donor"> Donor
                            </div>
                            <div class="group"> <button type="submit" style="background:#1161ee;border: none;
    padding: 15px 20px;
    border-radius: 25px;color:#fff;width:100%;display:flex;justify-content:center;">Submit</a></div>
                           
                            <div class="group"> <a href="{{route('login.user.form')}}" style="background:#1161ee;border: none;
    padding: 15px 20px;
    border-radius: 25px;color:#fff;width:100%;display:flex;justify-content:center;">Sign In</a></div>
                           
                            <div class="hr"></div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>

    </form>   
</body>
</html>