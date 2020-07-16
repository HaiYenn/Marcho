@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/reponsive.css">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
		<link rel="stylesheet" href="css/contact.css">
@endsection
@section('main')

<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.657475611088!2d105.7812622154026!3d21.046386992551085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589333047620!5m2!1svi!2s" width="100%"  height="450" frameborder="0" class="map-class" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
						<div class="col-lg-4 ">
							<h1><b>Feel Free Don't Hesitate To <br/>Contact With Us</b></h1>
							<p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda officiis animi ullam cum facere pariatur dicta in inventore accusantium dolorum voluptate dignissimos eum ad molestias quaerat, omnis officia beatae autem. Omnis officia beatae autem.</p>
							<div class="contact_ct">
								<img src="Images/icon/icon_phone_03.gif" alt="" class="contact_img">
								<p>+0-123-456-789 <br/>+0-123-456-789</p>
							</div>
							<div class="contact_ct">
								<img src="Images/icon/icon.location_03.png" alt="" class="contact_img">
								<p>Ralon Market Road,<br/>Market Street, Newyork
								</p>
							</div>
							<div class="contact_ct">
								<img src="Images/icon/icon_mail_03.png" alt="" class="contact_img">
								<p>yourmailaddress@gmail.com <br/>companymail.com</p>
							</div>
						</div>
						<div class="col-lg-8 contact_form">
							<div class="col-lg-12">
								<h3>Contact Form</h3>
							</div>
							<form action="" method="POST" role="form" class="contact">
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" id="" placeholder="Your name">
								</div>

								<div class="form-group col-lg-6">
									<input type="text" class="form-control" id="" placeholder="Your email">
								</div>
								<div class="form-group col-lg-12">
									<input type="text" class="form-control" id="" placeholder="Subject">
								</div>
								<div class="form-group col-lg-12">
									<textarea type="submit" rows="4" class="form-control" placeholder="Your message"></textarea>
								</div>

								<div class="col-lg-12">
									<button type="submit" class="submid_contact">SEND MESSAGE</button>
								</div>
							</form>
						</div>
					</div>
				</div>
@stop()