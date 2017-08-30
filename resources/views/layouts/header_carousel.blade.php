 <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
				 <img style="height:420px; width: 1750px;" src="{{URL::to('/image/IMG-20170803-WA0014.jpg')}}" class="img.responsive" style="width:100%">  	             	
                <div class="carousel-caption">
                    <p><h2>Galerija</h2></p>
                </div>
            </div>
            <div class="item">
                <img style="height:420px; width: 1750px;" src="{{URL::to('/image/IMG_20170713_133025.jpg')}}" class="img.responsive">
                <div class="carousel-caption">
                    <h2>Galerija</h2>
                </div>
            </div>
            <div class="item">
                <img style="height:420px; width: 1750px;" src="{{URL::to('/image/IMG-20170803-WA0009.jpg')}}" class="img.responsive">
                <div class="carousel-caption">
                    <h2>Galerija</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>