@extends('layouts.app')

    @section('title')
        <title>Pg Electric</title>
    @stop
    
    @section('nav')
    <nav class="navbar navbar-default navbar-fixed-top"">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <div id="logo-background-rotated">
                    <img id='nav_logo_pic' alt="Brand" src="images/PGElectric_logo.png">
                </div>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Start</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Offer</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    @stop
    
    @section('carousel')
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/carousel_0.jpeg" alt="bulb">
                <div id="carousel_caption_0" class="carousel-caption">
                     TEXT
                </div>
            </div>
            <div class="item">
                <img src="images/carousel_1.jpeg" alt="wires">
                <div id="carousel_caption_1" class="carousel-caption">
                    TEXT2
                </div>
            </div>
            <div class="item">
                <img src="images/carousel_2.jpeg" alt="cables">
                <div id="carousel_caption_2" class="carousel-caption">
                    TEXT3
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('credo')
    <div class="container-fluid thumbnail_container">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/competence.png" alt="competence">
                        <div class="caption">
                            <h3>Competence</h3>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/reliability.png" alt="reliability">
                        <div class="caption">
                            <h3>Reliability</h3>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/honesty.png" alt="honesty">
                        <div class="caption">
                            <h3>Honesty</h3>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/prices.png" alt="prices">
                        <div class="caption">
                            <h3>Good prices</h3>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
</html>
