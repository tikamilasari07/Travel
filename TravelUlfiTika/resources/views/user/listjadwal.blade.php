
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
    <meta property="og:description" constent=""/>
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
    
                          
        <div class="card">
            <div class="card-header">
                <center><strong class="card-title"><h1>DAFTAR KEBERANGKATAN</h1></strong></center><br><br>
            </div>
            
            <div class="card-body">
                <table class="table" border="4" align="center">
                    <thead>
                        <tr>
                            <center><th scope="col">No</th></center>
                            <center><th scope="col">Harga Tiket</th></center>
                            <center><th scope="col">Jam Keberangkatan</th></center>
                            <center><th scope="col">Aksi</th></center>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; ?> 
                        @foreach($data as $val)
                        <tr>
                            <th scope="row">{{ $no+=1 }}</th>
                            <td>{{ $val->harga_tiket }}</td>
                            <td>{{ $val->jam }}</td>
                            <td> <a href="{{ url('/user/datadiri/'.$val->id) }}"><button> Pesan</button></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <!-- END fh5co-page -->

    </div>
@endsection
    </body>
</html>

