@extends('welcome')

@section('title', '| Home')

@section('content')

<!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					Dobro došli u Migalovce!
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-tree"></i> O Migalovcima</h4>
                    </div>
                    <div class="panel-body">
                        <p>Povijest</p>
                        <a href="#" class="btn btn-default">Saznaj više</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Poljoprivreda i proizvodnja</h4>
                    </div>
                    <div class="panel-body">
                        <p>OPG</p>
                        <a href="#" class="btn btn-default">Saznaj više</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Zanimljivosti</h4>
                    </div>
                    <div class="panel-body">
                        <p>Zanimljivosti</p>
                        <a href="#" class="btn btn-default">Saznaj više</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

         <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">OPG Lašak <span class="text-muted">???</span></h2>
          <p class="lead">Proizvodnja obitelji Lašak</p>
        </div>
        <div class="col-md-5">
           <img class="featurette-image img-responsive center-block" src="{{URL::to('/image/IMG_20170128_115658.jpg')}}" alt="Generic placeholder image" style="width:100%">  
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Suživot<span class="text-muted">???</span></h2>
          <p class="lead">Sadnja voćaka</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="{{URL::to('/image/IMG-20170304-WA0000.jpg')}}" alt="Generic placeholder image" style="width:100%">  
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Novi nasadi <span class="text-muted"???</span></h2>
          <p class="lead">Nasadi novih voćaka</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{URL::to('/image/IMG_20170417_105405.jpg')}}" alt="Generic placeholder image" style="width:100%">  
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
@endsection