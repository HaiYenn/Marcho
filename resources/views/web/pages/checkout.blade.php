@extends('web/masterview')
@section('style')
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link rel="stylesheet" type="text/css" href="css/reponsive.css">
@endsection
@section('main')
<section>
				<div class="container">
					<form action="{{ route('checkoutpost') }}" method="post">
						@csrf
					<div class=row>
						<div class="col-md-8">
							<div class="contact-form">
								<p>Contact Information</p>

								<div class="contact-form-ip">
									
										<div class="form-group">
											<div class="second-contact">
												<div class="row">
													<div class="col-md-12">
														<label for="email">First name
															<span>*</span>
														</label>
														<input type="text" class="form-control first-contact" id="email" value="{{ Auth::user()->name }}" placeholder="" name="name">
													</div>
												</div>

											</div>

										</div>

										<div class="form-group">
											<label for="email"> Country
												<span>*</span>
											</label>
											<input type="text" class="form-control first-contact" id="email" placeholder="" name="country">
										</div>

										<div class="form-group">
											<label for="email"> Address
												<span>*</span>
											</label>
											<input type="text" class="form-control first-contact" id="email" placeholder="Street Address" name="address">
											<input type="text " class="form-control first-contact " placeholder="Apartment ,Unit etc (optional)" name="address2">
										</div>

										<div class="form-group">
											<div class="second-contact">
												<div class="row">
													<div class="col-md-6">
														<label for="email">Phone
															<span>*</span>
														</label>
														<input type="text" class="form-control first-contact" id="email" placeholder="" name="phone">
													</div>
													
													<div class="col-md-6">
														<label for="email">Mail
															<span>*</span>
														</label>
														<input type="text" class="form-control first-contact" id="email" placeholder="" name="email">
													</div>
												</div>

											</div>

										</div>


										<div class="text_contact">
											Already have an account? <a href="login.html" >Log in</a> Or <a href="register.html" >Create Account</a>
										</div>

										<div class="form-group">
											<label for="email"> Order Notes (optional)

											</label>
											<!-- <input type="<textarea name=""></textarea>" class="form-control first-contact" id="email" placeholder="" name=""> -->
											<textarea name="note" class="form-control first-contact"></textarea>
										</div>

									

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="task_first">
								<p class="text-task">Your Order</p>
								<hr>

								<div class="text_task2">
									<p>Products</p>
								</div>
								<div class="list-pro">
									<ul>
										<li>
											<p>Man apple watch</p>
											<span>$192.00</span>
										</li>

										<li>
											<p>Sweetshirt</p>
											<span>$48.00</span>
										</li>

										<li>
											<p>Polo T-shirt</p>
											<span>$39.00</span>
										</li>

									</ul>
									<hr>
									<div class="sub-list">
										<ul>
											<li>
												<p>Subtotal</p>
												<span>$285.00</span>
											</li>
										</ul>
									</div>
									<hr>
									<div class="sub-list">
										<ul>
											<li>
												<p>Shipping</p>
												<span>$0</span>
											</li>
										</ul>
									</div>
									<hr>
									<div class="sub-list">
										<ul>
											<li>
												<p>Total</p>
												<span class="text-span">$285.00</span>
											</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="task_second">
								<p class="text-task">Payment Method</p>
								@foreach($pay as $val)
								<hr>
								<div class="payment-list">
									<div class="form-check mb-2 mr-sm-2">
										<input class="form-check-input mr-10" type="radio" id="inlineFormCheck" name="payment" value="{{ $val->id }}"> 
										<label class="form-check-label text_label" for="inlineFormCheck">
											{{ $val['type'] }}
										</label>
										<p class="text_payment">Hinh thuc than toan</p>
									</div>
								</div>
								<hr>
								@endforeach
								<button type="submit" class="btn btn-default btn-place mt-30" >PLACE ORDER</button>



							</div>




						</div>
					</div>
					</form>
				</div>
				
			</section>

@stop()