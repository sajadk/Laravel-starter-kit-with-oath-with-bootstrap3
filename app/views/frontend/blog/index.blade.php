@extends('frontend/layouts/default')

@section('styles')
<style>
.bg{

	background:url("assets/img/background.png") repeat-y scroll 50% 0 #dbe0df !important;
	
	min-height: 300px;
	width: 100%;
	-webkit-box-shadow: 0px 3px 4px #828282;
	-moz-box-shadow: 0px 3px 4px #828282;
	box-shadow: 0px 3px 4px #828282;

	  font-family: "Open Sans";
	 
	
	 
}
.para{


	 font-family: "Open Sans";
color: #555;
font-size: 18px;
font-style: italic;
}
.profile{

    width: 70px;
    height: 70px;
	border: 3px solid #fff;
    border-radius: 100%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    position: relative;
    background-position: center;
}
.picture{
	float: left;
}
.flair{
    margin-top: 10px;
    text-indent: 10px;
}
</style>

@stop

{{-- Page content --}}
@section('content')

<div class="container-fluid bg" align="center" style="">
<div class="col-md-offset-3 col-md-6" align="left">
	<h3>Laravel starter-kit with Oath (bootstrap3)<h3>
	<p class="para">This is a php laravel starter kit that contains Sentry Oath <br>
       with bootstrap v3.3.1. With this you don't need to do all the <br>
       sign,signup,social Oath.. etc.. You just download and <br>
       add to your folder and start working.!!
	</p>
	
	<hr>
	
	<span class="para">created by:</span> <span class="para"><i>Sajad Karuthedath</i></span>
    <br>
       <div class="flair">
    	<a href="http://stackoverflow.com/users/2967572/sajad-karuthedath">
    		<img src="http://stackoverflow.com/users/flair/2967572.png" width="208" height="58" alt="profile for Sajad Karuthedath at Stack Overflow, Q&amp;A for professional and enthusiast programmers" title="profile for Sajad Karuthedath at Stack Overflow, Q&amp;A for professional and enthusiast programmers">
    	</a>
    </div>

</div>

</div>


@stop
