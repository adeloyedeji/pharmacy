@extends('layouts.main')
@section('title')
    Contact Us
@endsection
@section('content')

    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="breadcrumbs-title pull-left">
                        <h3>Contact</h3>
                    </div>
                    <div class="breadcrumbs-list pull-right">
                        <ul>
                            <li> <a title="Home" href="{{route('index')}}"><span>Home</span></a> <span class="separator">/ </span></li>
                            <li class="contact"> <strong> Contact Us</strong></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- map area start  -->
    <div class="map-area">
		<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d15760.798874384749!2d7.5254555!3d9.0455389!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x104e095fe5194cb9%3A0x66691952f6c203d6!2sDollar+Pharmacy+Limited%2C+37+Julius+Nyerere+Cres%2C+Asokoro%2C+Abuja!3m2!1d9.0455389!2d7.5254555!5e0!3m2!1sen!2sng!4v1524831989599" width="1349" height="433" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
	<!-- map area start  -->
	<!-- map area start  -->
    <div class="map-area-info">
        <div class="container">
		    <div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="cc_p_form">
					   <h2 class="cont-title"> Contact Information </h2>
						<form action="{{route('contact.send')}}" method="POST">
						    {{csrf_field()}}
							<div class="name_email_cont">
								<div class="name_cont">
									<label>Name <span>*</span></label><br>
									<input name="name" type="text">
								</div>
								<div class="email_cont">
									<label>Email <span>*</span></label><br>
									<input name="email"  type="text" />
								</div>
							</div>
							<label>Telephone </label><br>
							<input name="phone"  type="text" /><br>
							<label>Message <span>*</span></label><br>
							<textarea name="message"  cols="30" rows="10"></textarea>
							<div class="submit control-group">
								 <div class="controls">
								 	<input type="submit"  value="Submit" class="btn btn-large btn-primary">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="c-right-area">
					    <h2 class="cont-title">24 Hours Response</h2>
						<div class="sppb-addon-content">
							<p>You can contact us using the form or the information below. We will reply ASAP!</p>
							<p><span><em  class="fa fa-map-marker"></em></span> 37 Julius Nyerere Cres, Asokoro, Abuja</p>
							<p><span><em  class="fa fa-envelope"></em></span>dollarpharma@yahoo.com</p>
							<p><span><em class="fa fa-phone"></em></span> 08147068805</p>
							<p><span><em class="fa fa-clock-o"></em></span> BUSINESS HOURS </p>
							<p>Monday &ndash; Sunday: 24hours</p>
						</div>
					</div>
					
				</div>
		    </div>
		</div>
    </div>
	<!-- map area start  -->

@endsection

