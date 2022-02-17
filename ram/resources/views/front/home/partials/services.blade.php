<section class="section intro">
	<div class="container">
		<div class="row ">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="h6 text-color ">We are creative & expert people</span>
					<h2 class="mt-3 content-title">We work with business & provide solution to client with their business problem </h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="intro-item mb-5 mb-lg-0"> 
                        <i class="{{ $service['icon'] }} color-one"></i>
                        <h4 class="mt-4 mb-3">{{ $service['title'] }}</h4>
                        <p>{{ $service['description'] }}</p>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>