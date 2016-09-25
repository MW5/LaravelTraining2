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
                <img id='nav_logo_pic' alt="Brand" src="Images/PGElectric_logo.png">
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
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="Images\carousel_0.jpeg" alt="Bulb">
            <div class="carousel-caption">
              <h3>Bulbs</h3>
              <p>Some cool text about bulbs!</p>
            </div>
          </div>

          <div class="item">
            <img src="Images\carousel_1.jpeg" alt="Wires">
            <div class="carousel-caption">
              <h3>Wires</h3>
              <p>Cool text about wires</p>
            </div>
          </div>

          <div class="item">
            <img src="Images\carousel_2.jpeg" alt="Cables">
            <div class="carousel-caption">
              <h3>Cables</h3>
              <p>Cables are awesome</p>
            </div>
          </div>

        </div>
    </div>
    @stop
</html>
