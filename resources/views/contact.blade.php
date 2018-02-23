@extends('layouts.app')

@section('tag')
@endsection

@section('title')
Contact Us
@endsection

@section('css')
@endsection

@section('js-head')
@endsection


@section('content')

@includeIf('breadcrumb')

@includeIf('notify')

<section id="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="block">
					<h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Us</h2>
					<p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
						consectetur adipisicing elit. Dolore, ea!
					</p>
					<div class="contact-form">
						<form id="contact-form" method="POST" action="{{Request::url()}}" role="form" class="mar-top-11">
							{{csrf_field()}}
							<div class="form-group wow fadeInDown {{ $errors->has('name') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay=".6s">
								<label for="name">Name</label>
								<input type="text" placeholder="Name" class="form-control" name="name" id="name" required="required" value="{{ old('name') }}" minlength="2" max="255" autofocus>
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('email') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay=".8s">
								<label for="email">Email</label>
								<input type="email" placeholder="Email" class="form-control" name="email" id="email"  required="required" value="{{ old('email') }}" minlength="4" maxlength="255">
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('contact_number') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay="1s">
								<label for="contact_number">Contact Number</label>
								<input type="text" placeholder="Contact Number" class="form-control" name="contact_number" id="contact_number" required="required" value="{{ old('contact_number') }}" minlength="5" maxlength="15">
								@if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('message') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay="1.2s">
								<label for="message">Message</label>
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required="required" minlength="5">{{ old('message') }}</textarea>    
								@if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
							</div>

							<div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
								<button type="submit" id="contact-submit" class="btn btn-default btn-send">Send Message</button>
							</div>                      
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="map-area">
					<h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
					<p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
						Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

					</p>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.032506734463!2d145.0653308153208!3d-37.88292247973993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDUyJzU4LjUiUyAxNDXCsDA0JzAzLjEiRQ!5e0!3m2!1sen!2sin!4v1517330606049" width="100%" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="row address-details">
			<div class="col-md-4">
				<div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
					<i class="ion-ios-location-outline"></i>
					<h5><a href="https://goo.gl/maps/rrJtyNWNY1Q2" target="_blank">11 Belgrave Road Malvern East 3145 Melbourne</a></h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
					<i class="ion-ios-email-outline"></i>
					<h5><a href="mailto:mail@mmic.au" target="_blank">mail@mmic.au</a></h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
					<i class="ion-ios-telephone-outline"></i>
					<h5><a href="tel:+61405427087" target="_blank">+61405427087</a></h5>
				</div>
			</div>
		</div>
	</div>
</section>  
@endsection


@section('js-body')
<script type="text/javascript">
    $('#contact-form').one('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled','disabled');
        $('#contact-submit').html('Sending Message');
    });
</script>
@endsection