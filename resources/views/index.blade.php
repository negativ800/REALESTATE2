@include('header')

<div>
      <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="{{route('blogdetail')}}">2 Bedrooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="{{route('blogdetail')}}">2 Bedrooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="{{route('blogdetail')}}">2 Bedrooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="{{route('blogdetail')}}">2 Bedrooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>

        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>


<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Office Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='{{route('buysalerent')}}'">Find Now</button>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="{{route('buysalerent')}}" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/1.jpg') }}" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/2.jpg') }}" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
          <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
          <p class="price">Price: $234,900</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/3.jpg') }}" class="img-responsive" alt="properties"/></div>
          <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
          <p class="price">Price: $234,900</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/4.jpg') }}" class="img-responsive" alt="properties"/></div>
          <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
          <p class="price">Price: $234,900</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/1.jpg') }}" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
          <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
          <p class="price">Price: $234,900</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

      <div class="properties">
        <div class="image-holder"><img src="{{ asset('images/properties/2.jpg') }}" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
          <h4><a href="{{route('propertydetail')}}">Royal Inn</a></h4>
          <p class="price">Price: $234,900</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary"  href="{{route('propertydetail')}}" >View Details</a>
      </div>

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.blade.php">Learn More</a></p>

      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="{{ asset('images/properties/1.jpg') }}" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="{{route('propertydetail')}}">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="{{route('propertydetail')}}" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="{{ asset('images/properties/2.jpg') }}" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                    <h5><a href="{{route('propertydetail')}}">Integer sed porta quam</a></h5>
                    <p class="price">$300,000</p>
                    <a href="{{route('propertydetail')}}" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="{{ asset('images/properties/3.jpg') }}" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                    <h5><a href="{{route('propertydetail')}}">Integer sed porta quam</a></h5>
                    <p class="price">$300,000</p>
                    <a href="{{route('propertydetail')}}" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="{{ asset('images/properties/4.jpg') }}" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                    <h5><a href="{{route('propertydetail')}}">Integer sed porta quam</a></h5>
                    <p class="price">$300,000</p>
                    <a href="{{route('propertydetail')}}" class="more">More Detail</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')
