@extends('master')
@section('content')
<section class="aboutus">
		<div class="container">
			<div class="col-md-12 box-title text-center">
				<h2 >CONTACT US</h2>
			</div>
		</div>
	</section>
	<div class="contact container">
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
			<p style="font-size: 15px;">Your Name (required)</p>
			<input type="text" name="" class="form-control" style="border-radius: 0;">
			<br>
			<p style="font-size: 15px;">Your Email (required)</p>
			<input type="text" name="" class="form-control" style="border-radius: 0;">
			<br>
			<p style="font-size: 15px;">Subject</p>
			<input type="text" name="" class="form-control" style="border-radius: 0;">
			<br>
			<p style="font-size: 15px;">Your Message</p>
			<textarea class="form-control" rows="5" style="border-radius: 0;"></textarea>
			<br>
			<button class="btn btn-default btnsubmit" style="margin-bottom: 30px;">Submit</button>
			<br>
			<br>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>

@stop