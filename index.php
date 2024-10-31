	<?php
	include ('templates/header.php');
	?>


	<!-- header body -->
	<div class="overflow-hidden position-relative">
	   <img src="./assets/img/bg/slider.jpeg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

	   <div class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
	        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
	    </div>

	    <div class="container">
	        <div class="min-vh-100 row align-items-center">
	        	<div class="col-12 col-xl-8">
		            <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
		                <div class="mt-4 pt-2">
		                    <div class="text-center text-xl-start">
		                        <h1 class="m-0 text-white tracking-tight text-4xl fw-bold" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
		                            Selamat Datang Di website kami
		                        </h1>
		                        <p class="m-0 mt-4 text-white text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
		                            SMA Negeri 6 Gorontalo, sebuah lembaga pendidikan menengah atas negeri yang berlokasi di Jalan Barito, Kelurahan Bulotadaa Timur, Kecamatan Sipatana, Kota Gorontalo, Provinsi Gorontalo.
		                        </p>
		                        <div class="mt-4 pt-3 d-flex align-items-center justify-content-center justify-content-xl-start column-gap-3">
		                            <a href="javascript:;" class="btn btn-lg btn-primary text-white icon-link icon-link-hover bg-primary-hover text-sm leading-6 fw-semibold" data-aos-delay="300" data-aos="fade" data-aos-duration="3000">
		                                Learn more 
		                                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
		                                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
	            </div>

	        </div>
	    </div>
	</div> 

	<!-- ==sambutan== -->
	 	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5">
					<div class="mx-auto max-w-2xl">
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Kepala Sekolah
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Selamat datang di SMAN 6 KOTA GORONTALO 
						</p>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy"> 
							<!-- di ambil dari dqatabase -->
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<!-- services -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center" style="margin-top: -8vh;">
	                <p class="m-0 text-body-emphasis text-4xl tracking-tight fw-bold">
	                    AGENDA SEKOLAH
	                </p>
	            </div>
	        </div>
	        <div>
	            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">

                                <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                <?php
								echo "judul";
								?>
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
								<?php
								echo"isi";
								?>
                                 </p>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="text-center pt-7">
	            <a href="javascript:;" class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                    Learn more 
                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
                </a>
	        </div>
	    </div>      
	</div>	



	<!-- About Us -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-last">
					<div class="mx-auto max-w-2xl">
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							SMA NEGERI 6 KOTA GORONTALO
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							SMA NEGERI 6 KOTA GORONTALO Merupakan salah satu sarana pendidikan yang ada di kota gorontalo
							</p>
						<div class="mt-4">
							<a href="tentang.php" class="icon-link icon-link-hover text-decoration-none text-sm leading-6 fw-bold">
			                    Lihat lebih banyak  
			                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
			                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
			                </a>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg5.jpg" class="object-fit-cover rounded-3" alt="about us" loading="lazy">
                        </div>
					</div>
				</div>
			</div>

			<!-- big image -->
		    <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9">
                <img src="./assets/img/bg/bg6.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
            </div>
		</div>
	</div>



    <!-- Testimonials -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide pb-5">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo1.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st1.jpg" alt="Clinet Name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">John Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Aven</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo2.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st2.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Judith Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Circle</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/logo3.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “ Freshen is fantastic! Their laundry service is top-notch, and the staff is friendly and professional. I was impressed by the quality of their work and their attention to detail. Thank you, Freshen, for taking care of my laundry needs! ”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st3.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Alex Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Amara</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



	<!-- Client -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
		<div class="container">
			<div class="max-w-2xl">
				<div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
					We're fortunate to have incredible clients.
				</div>
			</div>

			<div class="mt-4">
				<div class="glide glideHighLinear">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides align-items-center">
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo1.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo2.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo3.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo4.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo5.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo6.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo7.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo8.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo9.png" class="img-fluid" alt="clients">
								</div>
							</li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



    <!-- Contact us -->
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            Alamat lengkap 
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6 row g-4">
                        <div class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-15">
							<div class="m-0 mt-3 text-body-emphasis fw-semibold">
							Jl. Tumba, Bulotada Tim., Kec. Sipatana, Kota Gorontalo, Gorontalo 96139
	                        </div>
                            </div>

                            <div class="col-12 ">
								<div class="m-0 mt-3 text-body-emphasis fw-semibol">
								<a href="https://api.whatsapp.com/send/?phone=6282189221084&text&type=phone_number&app_absent=0">Phone Number : +6282189221084</a>
								</div>
                                      </div>
                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-10">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6098087267264!2d123.06483517542748!3d0.5857712994085219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792dfd21bbfd95%3A0xcb886ab4c15d8f43!2sSMA%20NEGERI%206%20KOTA%20GORONTALO!5e0!3m2!1sid!2sid!4v1730350151990!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<?php
	include ('templates/footer.php');
	?>