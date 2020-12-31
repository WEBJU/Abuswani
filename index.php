<?php include('inc/header.php'); ?>
<!-- Home section -->
<style media="screen">
  #home{
    background-image: url("images/home.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome To My Design</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">You get to know what I do and my cute artistic work. Thank you.</p>
        <a href="#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Learn more</a>
      </div>

    </div>
  </div>
</section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-thumb">
          <h1>About Me</h1>
          <p>Quisque tempor bibendum dolor at volutpat. Suspendisse venenatis quam sed libero euismod feugiat. In cursus nisi vitae lectus facilisis mollis. Nullam scelerisque, quam nec iaculis vulputate.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="images/art.jpg" class="img-responsive img-circle" alt="About">
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</section>

<!-- portfolio section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp" >
				<h1>Gallery</h1>
			</div>

				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item dropdown" role="presentation">
						<a style="font-size:18px;" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Digital Art</a>
						<ul class="dropdown-menu">
							<li class="nav-item " role="presentation" ><a href="#artworks" role="tab" class="nav-link active" data-toggle="tab">Artworks</a></li>
							<li class="nav-item" role="presentation"><a href="#commissioned-art" role="tab" class="nav-link" data-toggle="tab">Commissioned Art</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" style="font-size:18px;" data-toggle="dropdown">Traditional Art</a>
						<ul class="dropdown-menu">
							<li><a href="#acrylic" role="tab" class="nav-link" data-toggle="tab">Acrylic</a></li>
							<li><a href="#commissioned" role="tab" class="nav-link" data-toggle="tab">Commissioned Art</a></li>
							<li><a href="#drawing" role="tab" class="nav-link" data-toggle="tab">Drawing</a></li>
							<li><a href="#painting" role="tab" class="nav-link" data-toggle="tab">Oil Painting</a></li>
							<li><a href="#pastel" role="tab" class="nav-link" data-toggle="tab">Oil Pastel</a></li>
							<li><a href="#soft" role="tab" class="nav-link" data-toggle="tab">Soft Pastel</a></li>
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane  active" id="artworks">
							<div class="row">
								<ul class="grid cs-style-4">
									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/D3.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
												<a href="#">Read More</a>
											</figcaption>
										</figure>
									</li>

									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/mod1.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
												<a href="#">Details</a>
											</figcaption>
										</figure>
									</li>
									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/nita2.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
												<a href="#">Details</a>
											</figcaption>
										</figure>
									</li>
									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/nude.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
												<a href="#">Learn More</a>
											</figcaption>
										</figure>
									</li>

									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/wrx1.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
												<a href="#">Full Post</a>
											</figcaption>
										</figure>
									</li>
									<li class="col-md-4 col-sm-6">
										<figure>
											<div><img src="images/digital/Artworks/D3.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
											<figcaption>
												<h1>Art Sample</h1>
												<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
												<a href="#">Full Post</a>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>
					</div>
					<div class="tab-pane fade " id="commissioned-art">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/fam.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/okundi.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/recovered.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/Pasi2.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/traditional.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/digital/Commissioned/final1.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade " id="acrylic">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/CICA4854.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/Fish Eagle Acrylic on Canvas 100X90cm $800.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/DSC_0072.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/IMG_2836.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/IMG_3462.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Acrylic/IMG_E2099.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade " id="commissioned">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2261.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2268.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2362.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2266.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2268.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Commissioned_Art/IMG_2784.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade " id="drawing">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3010.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3093.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3959.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3960.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3010.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Drawing/IMG_3961.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade " id="painting">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_2332.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_3060.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_1421.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_4256.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_1627.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Painting/IMG_5298.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="pastel">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/Avocado.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/Blooming.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/Crafted.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/Desolate.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/Flowers.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Oil_Pastel/HOFRE0675.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="soft">
						<div class="row">
							<ul class="grid cs-style-4">
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/12369099_1030086067047811_2805616013032203775_n.jpg" class="img-rounded" alt="image 1" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
											<a href="#">Read More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/20151110-CMY_7824.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/20151110-CMY_7839.jpg" class="img-rounded" alt="image 2" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
											<a href="#">Details</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/20151110-CMY_7840.jpg" class="img-rounded" alt="image 3" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
											<a href="#">Learn More</a>
										</figcaption>
									</figure>
								</li>

								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/20151110-CMY_7841.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 col-sm-6">
									<figure>
										<div><img src="images/Traditional/Soft_Pastel/IMG_20160602_182628.jpg" class="img-rounded" alt="image 4" style="height:400px;width:204;"></div>
										<figcaption>
											<h1>Art Sample</h1>
											<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
											<a href="#">Full Post</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
	</div>
</section>
<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Send a message</h1>
        </div>

        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
          <div class="col-md-6 col-sm-6">
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="col-md-6 col-sm-6">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="SEND MESSAGE">
          </div>
        </form>

      </div>

    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>
