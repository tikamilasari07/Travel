
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    

    </head>
    <body>
    @extends('layouts.app')

    @section('content')
        <div id="fh5co-wrapper">
        <div id="fh5co-page">

        <!-- end:header-top -->
    
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
                <div class="desc">
                    <div class="container">
                        <div class="row">
                            <form action="{{ url('/listjadwal') }}" method="get">
                                
                            <div class="col-sm-5 col-md-5">
                                <div class="tabulation animate-box">

                                  <!-- Nav tabs -->
                                   <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active">
                                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Perjalanan</a>
                                      </li>
                                   </ul>

                                   <!-- Tab panes -->
                                    <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="flights">
                                        <div class="row">
                                            
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Keberangkatan :</label>
                                                    <select  name='keberangkatan' class="cs-select cs-skin-border" id="keberangkatan">
                                                        <option value="0" disabled selected>keberangkatan</option>
                                                        @foreach ($wilayah as $data)
                                                        <option value="{{ $data->id }}">{{$data->nama_wilayah}}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Tujuan :</label>
                                                    <select name='tujuan' class="cs-select cs-skin-border" onchange="clk()" id="tujuan">
                                                        <option value="0" disabled selected>Tujuan</option>
                                                        @foreach ($wilayah as $data)
                                                        <option value="{{ $data->id }}">{{$data->nama_wilayah}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                            </div>

                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Tanggal :</label>
                                                    <input name='tanggal' class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="tima-end">Waktu :</label>
                                                    <input name='waktu' type="time" class="form-control" id="time-end" >
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Cari Jadwal">
                                            </div>
                                        </div>
                                     </div>

                                    </div>

                                </div>
                            </div></form>



                            <div class="desc2 animate-box">
                                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                    <p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
                                    <h2>Exclusive Limited Time Offer</h2>
                                    <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                                    <span class="price">$599</span>
                                    <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        

    </div>
    <!-- END fh5co-page -->

    </div>
@endsection
    </body>
    
</html>

