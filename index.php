<?php include('inc/header.php'); ?>
<!-- Home section -->
<style media="screen">
.fa-check{
  color: #e44c65;
}

#moreText{
  display: none;
}

#portfolio h3{
  color: #333;
  margin-left:120px;
}
/* #portfolio{
  background: #dce1df;
} */

</style>
<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome To Abuswani</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">You get to know what I do and my cute artistic work. Thank you.</p>
        <!-- <a href="shop.php" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Get Started</a> -->
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
          <p>Absalom Aswani is an African Artist from Kenya.  He went to Kenyatta University, Nairobi and studied Bachelor of Education in Fine Art, and majored in Painting, Sculpture and Graphic design. He is married with four Children.
            Before focusing on his artistry, he has worked as a graphics designer for two media houses (Nation Media Group and Standard Media Group) and an illustrator for an Italian based graphics firm and a Kenyan book publishing house. For (10) ten years he worked as a freelance graphics designer where he worked with different government and non-governmental organizations, including UNICEF as a consultant graphics artist and Designer.
            He is based in Nairobi, Kenya, and has a studio for his artwork. His works feature human life and nature where he mainly uses dry media (Pastels -oil and soft, charcoal, Pencils, coloured pencils) although he occasionally does paintings of wildlife and landscapes with Acrylics and Oil.<span id="points">...</span>
            <span id="moreText">He seeks to engage his audience exhibiting a threesome component to evoke, provoke and deceit if possible. The artworks (Dry Media) exude the experience of colour and light.
              He is also chair of Visual Arts – AFROSINO a cultural linkages Association, and Assistant Secretary, Kenya Visual Arts Association, Nairobi Branch.
              <br><br>
              <b>Education</b>
              <br>
              <i>Kenyatta University</i><br>
              2003| Bachelor of Education (Fine Art)<br>
              <i class="fa fa-check"></i>Second Class Upper Division <br>
              <i class="fa fa-check"></i>  Major in Painting, Sculpture and Graphic Design <br>
              <i class="fa fa-check"></i>  Vice Chancellors Best Student Award <br>

              <br>
              <i>Graffito – Milan</i><br>
              2003| Certificate in Computer Aided Design <br>
              <i class="fa fa-check"></i>  Software Certification in Graphic Design <br>
              <i class="fa fa-check"></i>  Illustration Art <br>

              <br>
              UNICEF /URC
              2006| Certificate <br>
              <i class="fa fa-check"></i>  Certification for Graphic Design & Illustration for Health Communication
              <br>
              <b>Experience</b>
              <br>
              <i>Practicing Artist|<i> <br><br>
                Own Studio | Karen Village <br>
                2016 – Group Show, Lavington mall, Nairobi <br>
                2017 – Amnesty International, Nairobi<br>
                2017 - Group exhibition at Polka Dot, Nairobi<br>
                2018 – Group Exhibition, Beijing China<br>
                <br>
                Consultant Graphic Artist 2007 –
                UNICEF | Publications
                Illustration art and Design Layout
                <br>
                Graphic Designer 2005 – 3 Months
                Nation Media | Weekly Advertiser
                Ad & Design Layout
                <br>
                Comic Strip Illustrator 2005 – 2009
                Standard Media Group | Sunday Weekend Edition
                Storyline and Illustration
                Illustrator 2004 –
                GRAFFITO | Publications
                Illustration art
              </span><br>
              <button type="button" onclick="toggleMore()" id="toggleText" class="smoothScroll btn btn-success btn-small wow fadeInUp" name="button">Show more</button>
              .</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
            <img src="images/abu.png" class="img-responsive img-circle" alt="About" style="height:300px; width:500px">
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
    </section>

    <!-- portfolio section -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <h1>Gallery</h1>
        <div class="row">
          <div class="wow fadeInUp" >
            <h2>Traditional Art</h2>
            <div class="col-md-4 image-gallery">
              <div class="card1">
              <a href="products.php?id=5">
                    <img src="images/t-acrylic.png" alt="" class="c-image">
                </a>
                <!-- <img src="images/t-acrylic.png" alt="" class="c-image"> -->
                <div class="c-body">
                  <p>Acrylic</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="card1">
                <a href="products.php?id=3">
                  <img src="images/t-commissioned.png" class="c-image" alt="">
                </a>
                <!-- <img src="images/t-commissioned.png" class="c-image" alt=""> -->
                <p>Commissioned Art</p>
              </div>

            </div>
            <div class="col-md-4">
              <div class="card1">
                <a href="products.php?id=4">
                  <img src="images/t-drawing.png" class="c-image" alt="">
                </a>
                <!-- <img src="images/t-drawing.png" class="c-image" alt=""> -->
                <p>Drawing</p>
              </div>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="wow fadeInUp" >
              <div class="col-md-4">
                <div class="card1">
                  <a href="products.php?id=6">
                      <img src="images/t-oilpainting.png" class="c-image" alt="">
                  </a>
                  <!-- <img src="images/t-oilpainting.png" class="c-image" alt=""> -->
                    <p>Oil Painting</p>
                </div>

              </div>
              <div class="col-md-4">
                <div class="card1">
                <a href="products.php?id=7">
                    <img src="images/t-oilpastel.png" class="c-image" alt="">
                  </a>
                  <!-- <img src="images/t-oilpastel.png" class="c-image" alt=""> -->
                    <p>Oil Pastel</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card1">
                  <a href="products.php?id=8">
                    <img src="images/t-softpastel.png" class="c-image" alt="">
                  </a>
                  <!-- <img src="images/t-softpastel.png" class="c-image" alt=""> -->
                    <p>Soft Pastel</p>
                </div>
              </div>
              </div>
            </div>
        <div class="row">
          <div class="wow fadeInUp" >
            <h2>Digital Art</h2>
              <div class="col-md-6">
              <div class="card1">
                <a href="products.php?id=1">
                    <img src="images/d-artwork.png" class="c-image" alt="">
                </a>
                <!-- <img src="images/d-artwork.png" class="c-image" alt=""> -->
                <div class="card-body">
                    <p class="card-text">Artwork</p>
                </div>
              </div>
              </div>
              <div class="col-md-6 offset-md-2">
                <div class="card1">
                  <a href="products.php?id=2">
                    <img src="images/d-commissioned.png" alt="" class="c-image">
                  </a>
                  <!-- <img src="images/d-commissioned.png" alt="" class="c-image"> -->
                  <div class="card-body">
                      <p>Commissioned Art</p>
                  </div>
                </div>
              </div>
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
            <h1>Get in Touch</h1>
          </div>
          <?php
          if ($_POST) {
            $sendMail->from=$_POST['email'];
            $sendMail->subject=$_POST['subject'];
            $sendMail->message=$_POST['message'];
            $sendMail->name=$_POST['name'];
            if ($sendMail->send()) {
              echo "<div class='alert alert-success'>Your email has been sent!!.We will contact you as soon as possible!!</div>";
              return;
            }else {
              echo "<div class='alert alert-danger'>Could not send email right now!!.Please try again.</div>";
              return;
            }
          }
          ?>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post" class="wow fadeInUp" data-wow-delay="0.8s" id="form1">
            <div class="col-md-6 col-sm-6">
              <input name="name" type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="col-md-6 col-sm-6">
              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="col-md-12 col-sm-12">
              <input name="subject" type="subject" class="form-control" id="subject" placeholder="Subject">
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
