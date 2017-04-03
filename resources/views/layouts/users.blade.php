<!DOCTYPE html>
<?php

        ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
    <script src="{{asset('js/bootbox.min.js')}}"> </script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--        <link rel="stylesheet" href="..js/Countdown/demo/css/demo.css">-->
    {{--<link href="{{asset('css/userprofile.css')}}" rel="stylesheet">--}}
    {!! Html::style( asset('css/userprofile.css')) !!}



</head>

<body>
<header>


    <nav class="navbar  navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Link</a>
                </li>


            </ul>
            {{--<form class="form-inline my-2 my-lg-0">--}}
                {{--<input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
            {{----}}
            <ul class=" form-inline my-2 my-lg-0" style="list-style: none" >
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu"style="margin-left: -25px" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out" style="margin-left: 6px"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

{{--**********************************************************************************************************************************--}}

    <div class="col-2 sidebar" id="sidebar">
        <ul class="sidebarmanu">
            <li class="" id="">
                <div class="card">
                    <a href="{{url('/profile')}}">
                        <div class="cardimg"><img class="card-img-top" src="{{asset(Auth::User()->photo ? ("images/".(Auth::User()->photo->file)):(Auth::User()->profile->gender=="Male"?"images/2.png":"images/1.png"))}}" alt="{{Auth::User()->name}}"></div>
                    </a>

                </div>

                {{--<ul class="sub-menu" id="submanu">--}}
                    {{--<li><a href="{{url('/profile')}}">View Profile</a></li>--}}
                    {{--<li><a href="{{url('/users/'.Auth::id().'/edit')}}">Edit Profile</a></li>--}}

                {{--</ul>--}}
            </li>



            <li class="submanu" id="">
                <a href="{{url('/profile')}}"><i class="fa  fa-user-circle" aria-hidden="true"></i><span>&nbsp;{{ Auth::user()->name }}</span></a>
                <ul class="sub-menu" id="submanu">
                    <li><a href="{{url('/profile')}}"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;View Profile</a></li>
                    <li><a href="{{url('/users/'.Auth::id().'/edit')}}"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Edit Profile</a></li>

                </ul>

            </li>


            <li id=""><a href="{{url('/profile#chat')}}"><i class="fa fa-comments-o" aria-hidden="true"></i><span>&nbsp;Check Message &nbsp;</span></a></li>
            <li><a href="{{url('/members')}}"><i class="fa fa-users" aria-hidden="true"></i><span>&nbsp;Group Members</span></a></li>
            <li><a href="{{url('/task')}}"><i class="fa fa-thumb-tack" aria-hidden="true"></i><span>&nbsp;Works todo &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</span></a></li>

            {{--<li class=""><a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>--}}
                    {{--<span>Account Setting</span>   </a>--}}

                {{--<ul class="sub-menu" id="">--}}
                    {{--<li><a href="#">Submenu item</a></li>--}}
                    {{--<li><a href="#">Submenu item</a></li>--}}
                    {{--<li><a href="#">Submenu item</a></li>--}}
                {{--</ul>--}}

            </li>

            <li><a href="{{url('/payment')}}"><i class="fa fa-credit-card-alt" aria-hidden="true"></i><span>&nbsp;Payments &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></a></li>







        </ul>
    </div>

    <div class="" id="anm">
        <a>&nbsp;</a>
    </div>


</header>




<div class="container">
    {{--<div class="row userprofile">--}}
    @yield('userSummery')
    @include('users.userSummery')
        <div class="col-lg-9 col-md-8 col-12" id="usercotent">
            <div class="spacer">
                <div id="tabs">
                    {{--<style>--}}
                        {{--span.none {--}}
                            {{--display: none;--}}
                        {{--}--}}
                        {{--.tabmanu li a:active{--}}
                            {{--color: black !important;--}}
                        {{--}--}}

                    {{--</style>--}}
                    <style>
                        .none{
                            display: none;
                        }
                    </style>
                    <ul class="tabmanu">
                        <li><a href="{{url('/home')}}"class="manuoption dash">Dashbord<span id="dash" class="menu-active none"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/profile')}}"class="manuoption pro">Profile<span id="pro"  class="menu-active none"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/task')}}"class="manuoption task">Tasks<span id="task" class="menu-active none"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/members')}}" class="manuoption mem">Membes<span id="mem" class="menu-active none"><i class="fa fa-caret-up"></i></span></a></li>
                        <li><a href="{{url('/payment')}}"class="manuoption pay">Payment Hisory<span id="pay" class="menu-active none"><i class="fa fa-caret-up"></i></span></a></li>
                    </ul>

                    @yield('tabs1')


                </div>
            </div>
        </div>
    </div>
</div>




<script>
    $(".sidebartog").click(function (e) {
        e.preventDefault;
        $('.wrapper').toggleClass('none');
    });


    $('.submanu > .sub-menu').parent().hover(function () {
        var submenu = $(this).children('.sub-menu');
        if ($(submenu).is(':hidden')) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
</script>



{{--<script>--}}
    {{--$(function () {--}}
        {{--var $tabs = $("#tabs").tabs();--}}

        {{--$tabs.tabs({--}}
            {{--hide: {--}}
                {{--effect: "slide",--}}
                {{--direction: "down",--}}
                {{--duration: 500--}}
            {{--},--}}
            {{--show: {--}}
                {{--effect: "slide",--}}
                {{--direction: "up",--}}
                {{--duration: 500--}}
            {{--},--}}
            {{--beforeActivate: function (event, ui) {--}}
                {{--setTimeout(function () {--}}
                    {{--/* Do something after hide */--}}
                    {{--$tabs.animate({--}}
                        {{--top: "500px"--}}
                    {{--}, function () {--}}
                        {{--$tabs.animate({--}}
                            {{--top: "0px"--}}
                        {{--})--}}
                    {{--});--}}
                    {{--$tabs.toggleClass('switch');--}}
                {{--}, 500);--}}
            {{--}--}}
        {{--});--}}


        {{--function getSelectedTabIndex() {--}}
            {{--$tabIndex = $tabs.tabs('option', 'selected');--}}
            {{--var $selected = $("#tabs ul>li a").eq($tabIndex).attr('href');--}}
            {{--return $selected;--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() != "" || $('#confirm_password').val() !="") {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        }
        else{
            $('#message').html('').css('color', 'red');
        }

    });
</script>



@if(Session::has('invalid'))
    <script>
        $.confirm({
            title: '<i class="fa fa-exclamation-triangle" style="color: red" aria-hidden="true"> &nbsp; Sorry!</i>',
            content: '<strong>Invalid Card Sequence <br><small>Call 8585 for help</small> </strong>',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Try again',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                },
                close: function () {
                }
            }
        });
    </script>
@endif



@if(Session::has('packageFail'))
    <script>
        $.confirm({
            title: '<i class="fa fa-handshake-o" style="color: red" aria-hidden="true"> &nbsp; Sorry!!</i>',
            content: '<strong>Not Enough Balance<br><small>Call 8585 for help</small> </strong>',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                }
            }
        });
    </script>
@endif





@if(Session::has('packagedone'))
    <script>
        $.confirm({
            title: '<i class="fa fa-handshake-o" style="color: #366FA0" aria-hidden="true"> &nbsp; Thank You!!</i>',
            content: '<strong>Package Enabled!<br><small>Call 8585 for help</small> </strong>',
            type: 'blue',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Ok',
                    btnClass: 'btn-blue',
                    action: function () {
                    }
                }
            }
        });
    </script>
@endif




@if(Session::has('cardok'))
    <script>
        $.confirm({
            title: '<i class="fa fa-money" style="color: green" aria-hidden="true"> &nbsp; Congrats!</i>',
            content: '<strong>your recharge is successful</strong>',
            type: 'green',
            typeAnimated: true,
            buttons: {
                close: function () {
                }
            }
        });
    </script>
@endif

@if(Session::has('bkash'))
    <script>
        $.confirm({
            icon: 'fa fa-spinner fa-spin',
            title: 'Wait!',
            content: 'Sit back, we are processing your request in 24hour!<br>For help call 8585',
            type: 'purple',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'OK !',
                    btnClass: 'btn-purple',
                    action: function () {
                    }
                },
                close: function () {
                }
            }

        });
    </script>




    <script>
        $(document).ready(function() {
            alert(123);
            if($('span').hasClass('none')){
                $('span').addClass('none');
                $('#dash').removeClass('none');
            }




        });


        $(".pro").click(function() {
            if($('span').hasClass('none')){
                $('span').addClass('none');
                $('#pro').removeClass('none');
            }


        });



        $(".task").click(function() {
            if($('span').hasClass('none')){
                $('span').addClass('none');
                $('#task').removeClass('none');
            }


        });



        $(".mem").click(function() {
            if($('span').hasClass('none')){
                $('span').addClass('none');
                $('#mem').removeClass('none');
            }


        });



        $(".pay").click(function() {
            if($('span').hasClass('none')){
                $('span').addClass('none');
                $('#pay').removeClass('none');
            }


        });



    </script>




@endif
</body>

</html>