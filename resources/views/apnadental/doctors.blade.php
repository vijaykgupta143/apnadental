@extends('apnadental.master')
@section("content")

<main>
	<div id="results">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4><strong>Showing 10</strong> of 140 results</h4>
				</div>
				<div class="col-md-6">
					 <div class="search_bar_list">
					 <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
					 <input type="submit" value="Search">
				 </div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /results -->
	
	<div class="filters_listing">
		<div class="container">
			<ul class="clearfix">
				<li>
					<h6>Type</h6>
					<div class="switch-field">
						<input type="radio" id="all" name="type_patient" value="all" checked>
						<label for="all">All</label>
						<input type="radio" id="doctors" name="type_patient" value="doctors">
						<label for="doctors">Doctors</label>
						<input type="radio" id="clinics" name="type_patient" value="clinics">
						<label for="clinics">Clinics</label>
					</div>
				</li>
				<li>
					<h6>Layout</h6>
					<div class="layout_view">
						<a href="#0" class="active"><i class="icon-th"></i></a>
						<a href="list.html"><i class="icon-th-list"></i></a>
						<a href="list-map.html"><i class="icon-map-1"></i></a>
					</div>
				</li>
				<li>
					<h6>Sort by</h6>
					<select name="orderby" class="selectbox">
					<option value="Closest">Closest</option>
					<option value="Best rated">Best rated</option>
					<option value="Men">Men</option>
					<option value="Women">Women</option>
					</select>
				</li>
			</ul>
		</div>
		<!-- /container -->
	</div>
	<!-- /filters -->
	
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					@foreach($doctors as $doctor)
					<div class="col-md-6">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="doctor-details/{{ $doctor->id }}"><img src="{{ $doctor->image }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>{{ $service_name }}</small>
								<h3>{{ $doctor->first_name }} {{ $doctor->last_name }}</h3>

								<p>{{ $doctor->description }}</p>
								<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
								<a href="doctor-details/{{ $doctor->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
							</div>
							<ul>
								<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>View on map</a></li>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="doctor-details/{{ $doctor->id }}">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->
					@endforeach

				</div>
				<!-- /row -->
 
				<nav aria-label="" class="add_top_20">
					<ul class="pagination pagination-sm">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
						<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
				<!-- /pagination -->
			</div>
			<!-- /col -->
			 
			<aside class="col-lg-4" id="sidebar">
				<div id="map_listing" class="normal_list"></div>
			</aside>
			<!-- /aside -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->

@endsection("content")