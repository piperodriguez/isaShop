<div class="container mt-3" id="galeria">
   <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ul class="carousel-indicators">
         <li class="item1 active"></li>
         <li class="item2"></li>
         <li class="item3"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ asset('imagenes/slider1.jpg') }}" alt="Los Angeles" width="1100" height="325">
         </div>
         <div class="carousel-item">
            <img src="{{ asset('imagenes/slider1.jpg') }}" alt="Chicago" width="1100" height="325">
         </div>
         <div class="carousel-item">
            <img src="{{ asset('imagenes/slider1.jpg') }}" alt="New York" width="1100" height="325">
         </div>
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel">
      <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel">
      <span class="carousel-control-next-icon"></span>
      </a>
   </div>
</div>
<hr>