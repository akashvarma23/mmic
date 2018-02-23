

<section id="enquiry-section">
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
						<form id="contact-form" method="POST" action="{{Request::url()}}" role="form">
							{{csrf_field()}}
							<div class="form-group wow fadeInDown {{ $errors->has('name') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay=".6s">
								<input type="text" placeholder="Name" class="form-control" name="name" id="name" required="required" value="{{ old('name') }}" minlength="2" max="255" autofocus>
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('email') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay=".8s">
								<input type="email" placeholder="Email" class="form-control" name="email" id="email"  required="required" value="{{ old('email') }}" minlength="4" maxlength="255">
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('contact_number') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay="1s">
								<input type="text" placeholder="Contact Number" class="form-control" name="contact_number" id="contact_number" required="required" value="{{ old('contact_number') }}" minlength="5" maxlength="15">
								@if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group wow fadeInDown {{ $errors->has('message') ? ' has-error' : '' }}" data-wow-duration="500ms" data-wow-delay="1.2s">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required="required" minlength="5">
									{{ old('message') }}
								</textarea>    
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
		</div>
	</div>
</section>  


@section('js-body')
<script type="text/javascript">
    $('#enquiry-form').one('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled','disabled');
        $('#enquiry-submit').html('Sending Enquiry');
    });
</script>
@endsection