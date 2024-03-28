<html lang="en"><head>
		<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
		<title>Product Purchase stripe</title>
        	
          

	</head>

    <body>
<style>
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">

<div class="border-bottom">
	<div class="bg-light py-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12 text-center text-md-start"><span>Super Value Deals - Save more with coupons</span></div>
				<div class="col-6 text-end d-none d-md-block">
					<div class="dropdown selectBox">
						<a class="" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
						@if (auth()->check())    
							<p>Welcome, {{ auth()->user()->name }} &nbsp <a href="{{route('logout')}}">Logout</a></p>
													
						@else							
							<p><a href="{{route('login')}}">Login</a></p>						
						@endif
						</a>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row w-100 align-items-center gx-lg-2 gx-0">
				<div class="col-xxl-10 col-lg-3 col-md-10 col-5">
					
					<div class="d-flex justify-content-between w-100 d-lg-none">
						
					</div>
				</div>
			
				
				<div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
					<div class="list-inline">
						<div class="list-inline-item me-5">
							<a href="./pages/shop-wishlist.html" class="text-muted position-relative">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
									<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
								</svg>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
									5
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item me-5">
							<a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</a>
						</div>
						<div class="list-inline-item me-5 me-lg-0">
							<a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
									1
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item d-inline-block d-lg-none">
							<!-- Button -->
							<button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
									<path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@if(session()->has('errors'))
<div class="alert alert-danger">
{{session()->get('errors')}}
</div>
@endif
<section class="my-lg-14 my-8">
				<div class="container">
<h3> Pay via Stripe</h3>
<div class="card">
<form method="POST" action="{{ route('product.purchase_payment', $product->id) }}" class="card-form mt-3 mb-3">
    @csrf
    <input type="hidden" name="payment_method" class="payment-method">
    <input class="StripeElement mb-3" name="card_holder_name" id="card_holder_name" placeholder="Card holder name" required>
    <div class="col-lg-4 col-md-6">
        <div id="card-element" style="margin-top: 20px;"></div>
    </div>
    <div id="card-errors" role="alert"></div>
    <div class="form-group mt-3" style="margin-top: 20px;">
        <button type="submit" class="btn btn-primary pay">
            Purchase
        </button>
    </div>
</form>
</div>
</div>
</section>
    </body>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    let stripe = Stripe("{{ env('STRIPE_KEY') }}")
    let elements = stripe.elements()
    let style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    }
    let card = elements.create('card', {style: style})
    card.mount('#card-element')
    let paymentMethod = null
    $('.card-form').on('submit', function (e) {
        $('button.pay').attr('disabled', true)
        if (paymentMethod) {
            return true
        }
        stripe.confirmCardSetup(
            "{{ $intent->client_secret }}",
            {
                payment_method: {
                    card: card,
                    billing_details: {name: $('#card_holder_name').val()}
                }
            }
        ).then(function (result) {
            if (result.error) {
                $('#card-errors').text(result.error.message)
                $('button.pay').removeAttr('disabled')
            } else {
                paymentMethod = result.setupIntent.payment_method
                $('.payment-method').val(paymentMethod)
                $('.card-form').submit()
            }
        })
        return false
    })
</script>