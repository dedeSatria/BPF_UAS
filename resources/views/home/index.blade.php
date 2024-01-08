@extends('template/master')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_atas.jpg);">
<div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crunchy</span>
              <h1 class="mb-4">Joki Murah dan Terpercaya</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/POSTER_JOKI.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>      



<div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Delicious</span>
              <h1 class="mb-4">Joki Murah dan Terpercaya</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/haya.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
        <div class="container-fluid">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-15 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Joki Rank</a>
                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Joki Classic</a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Joki MCL</a>
                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Paket Joki</a>
                            </div>
                        </div>
                    </div>




                    
                    <div class="col-md-12">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <!-- Joki Rank -->
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    @foreach($products->where('type', 'Joki Rank') as $product)
                                        <div class="col-md-3 text-center">
                                        <div class="menu-wrap">
                            <a href="#" class="menu-img img mb-4" style="background-image: url({{ Storage::url('products/'.$product->image_url) }});"></a>
                            <div class="text">
                                <h3><a href="#">{{ $product->product_name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>Rp. {{ $product->price }}</span></p>
                                <p><a href="#" class="btn mb-5 btn-white btn-outline-white">Pesan!</a></p>
                            </div>
                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Joki Classic -->
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    @foreach($products->where('type', 'Joki Classic') as $product)
                                        <div class="col-md-3 text-center">
                                        <div class="menu-wrap">
                            <a href="#" class="menu-img img mb-4" style="background-image: url({{ Storage::url('products/'.$product->image_url) }});"></a>
                            <div class="text">
                                <h3><a href="#">{{ $product->product_name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>Rp. {{ $product->price }}</span></p>
                                <p><a href="#" class="btn mb-5 btn-white btn-outline-white">Pesan!</a></p>
                            </div>
                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Joki MCL -->
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    @foreach($products->where('type', 'Joki MCL') as $product)
                                        <div class="col-md-3 text-center">
                                        <div class="menu-wrap">
                            <a href="#" class="menu-img img mb-4" style="background-image: url({{ Storage::url('products/'.$product->image_url) }});"></a>
                            <div class="text">
                                <h3><a href="#">{{ $product->product_name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>Rp. {{ $product->price }}</span></p>
                                <p><a href="#" class="btn mb-5 btn-white btn-outline-white">Pesan!</a></p>
                            </div>
                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Paket Joki -->
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                <div class="row">
                                    @foreach($products->where('type', 'Paket Joki') as $product)
                                        <div class="col-md-3 text-center">
                                            <div class="menu-wrap">
                            <a href="#" class="menu-img img mb-4" style="background-image: url({{ Storage::url('products/'.$product->image_url) }});"></a>
                            <div class="text">
                                <h3><a href="#">{{ $product->product_name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>Rp. {{ $product->price }}</span></p>
                                <p><a href="#" class="btn mb-5 btn-white btn-outline-white">Pesan!</a></p>
                            </div>
                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                 </div>
            </div>
        </div>
    </section>

    

    
    <div class="container mt-5" style="border: 2px solid #A9A9A9; border-radius: 10px; padding: 20px; color: white;">
    <form action="{{ route('transaction.store') }}" method="POST">
    @csrf <!-- Pastikan untuk menambahkan CSRF token -->

    <div class="form-group">
        <label for="quantity">Jumlah:</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="Masukkan Jumlah">
    </div>
    <div class="form-group">
        <label for="account_id">Id Akun:</label>
        <input type="text" class="form-control" id="account_id" name="account_id" placeholder="Masukkan Id Akun">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
    </div>
    <div class="form-group">
        <label for="note">Catatan:</label>
        <textarea class="form-control" id="note" name="note" rows="3" placeholder="Tulis Catatan"></textarea>
    </div>
    <div class="form-group">
        <label for="payment">Pembayaran:</label>
        <select class="form-control" id="payment_method" name="payment_method">
            <option value="Dana">Dana</option>
            <option value="BRI">BRI</option>
            <option value="BNI">BNI</option>
        </select>
    </div>
    <div class="form-group">
        <label for="whatsapp">Nomor WhatsApp:</label>
        <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" placeholder="Masukkan Nomor WhatsApp">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

</div>



    

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>

</html>

@endsection