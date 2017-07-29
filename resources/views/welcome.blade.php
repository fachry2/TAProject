@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 main-caregories">
        <div class="col-md-12">
            <center>
            <h2 style="font-size: 14pt;" class="heading-tags">Apa yang anda cari ?</h2>
            </center>
        </div>

      <div class="col-md-3">
        <div align="center">
            <a href="#" title="Sofa">
            <img src="{{ asset('pic/sofa.svg') }}" alt="Sofa" title="Sofa" width="200" height="200" />
            <br>
            <span>Sofa</span>
            </a>
        </div>
      </div>
      <div class="col-md-3">
        <div align="center">
            <a href="#" title="Tempat Penyimpanan">
            <img src="{{ asset('pic/penyimpanan.svg') }}" alt="Tempat Penyimpanan" title="Tempat Penyimpanan" width="200" height="200" />
            <br>
            <span>Tempat Penyimpanan</span>
            </a>
        </div>
      </div>
      <div class="col-md-3">
        <div align="center">
            <a href="#" title="Meja Kursi">
            <img src="{{ asset('pic/meja_kursi.svg') }}" alt="Meja & Kursi" title="Meja & Kursi" width="200" height="200" />
            <br>
            <span>Meja &amp; Kursi</span>
            </a>
        </div>
      </div>
      <div class="col-md-3">
        <div align="center">
            <a href="#" title="Tempat Tidur">
            <img src="{{ asset('pic/tempat_tidur.svg') }}" alt="Tempat Tidur" title="Tempat Tidur" width="200" height="200" />
            <br>
            <span>Tempat Tidur</span>
            </a>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <div class="row">
    <div class="col-md-12" style="background-color:#F5F5F5;">
      <div class="col-md-12">
          <center>
          <h2 style="font-size: 14pt;" class="heading-tags">Top List</h2>
          </center>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 main-caregories">
        <div class="thumbnail">
          <img src="{{ asset('pic/furniture-stores.jpg') }}" alt="...">
          <div class="caption">
            <h4><b>Valentino Sofa Bad</b></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
              <hr>
              <center><b>Rp. 1.200.000</b></center>
              <hr>
            </p>
            <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-heart-empty"></span> Wislist</a></center>
                  </div>
                  <div class="col-md-6">
                    <center><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></center>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
      <nav aria-label="...">
        <ul class="pager">
          <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
          <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection
