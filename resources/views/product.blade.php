@extends('layouts.app')
@section('content')	


<script src="./assets/js/vendors/validation.js"></script>

@if(session()->has('errors'))
<div class="alert alert-danger">
{{session()->get('errors')}}
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-danger">
{{session()->get('success')}}
</div>
@endif
		<main>	
			<!-- Popular Products Start-->
			<section class="my-lg-14 my-8">
				<div class="container">
					<div class="row">
						<div class="col-12 mb-6">
							<h3 class="mb-0">Popular Products</h3>
						</div>
					</div>

					<div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
						
                        @if(!empty($products))
                        @foreach($products as $key => $pro)
                        @php
                        $imgUrl = asset('img/'.$pro->image);
                        @endphp
                        
                    <div class="col">
							<div class="card card-product">
								<div class="card-body">
									<div class="text-center position-relative">										
										<a href="#!"><img src="{{$imgUrl}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
									</div>
									<div class="text-small mb-1">
										<a href="#!" class="text-decoration-none text-muted"><small>Snack &amp; Munchies</small></a>
									</div>
									<h2 class="fs-6"><a href="./pages/shop-single.html" class="text-inherit text-decoration-none">{{$pro->name}}</a></h2>
									
									<div class="d-flex justify-content-between align-items-center mt-3">
										<div>
											<span class="text-dark">${{$pro->price}}</span>											
										</div>
										<div>
											<a href="{{route('product.show',$pro->id)}}" class="btn btn-primary btn-sm">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
													<line x1="12" y1="5" x2="12" y2="19"></line>
													<line x1="5" y1="12" x2="19" y2="12"></line>
												</svg>
												Add
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
                        @endif					
						
						
					</div>
				</div>
			</section>
			<!-- Popular Products End-->			
		</main>

<!-- Modal -->

 <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables &amp; Fruits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast &amp; instant food</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery &amp; Biscuits</a></li>
             
            </ul>
          </div>
          <div class="col-6">
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread &amp; eggs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks &amp; juices</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee &amp; drinks</a></li>
              
            </ul>
          </div>
        </div>
      </div>      
     </div>    
  </div>
</footer>

@endsection

	


	