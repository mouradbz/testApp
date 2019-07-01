<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>El Amra Electro mobile</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style>
 @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
/* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
.board{
    width: 100%;
/*margin: 60px auto;*/
height: 500px;
background: #fff;
/*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
}
.board .nav-tabs {
    position: relative;
    /* border-bottom: 0; */
    /* width: 80%; */
    margin: 20px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}

.board > div.board-inner{
    
    background-size: 30%;
}

p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    /* background-color: #ffffff; */
    border: 0;
    border-bottom-color: transparent;
}

span.round-tabs{
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

span.round-tabs.one{
    color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
}

li.active span.round-tabs.one{
    background: #fff !important;
    border: 2px solid #ddd;
    color: rgb(34, 194, 34);
}

span.round-tabs.two{
    color: #febe29;border: 2px solid #febe29;
}

li.active span.round-tabs.two{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #febe29;
}

span.round-tabs.three{
    color: #3e5e9a;border: 2px solid #3e5e9a;
}

li.active span.round-tabs.three{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #3e5e9a;
}

span.round-tabs.four{
    color: #f1685e;border: 2px solid #f1685e;
}

li.active span.round-tabs.four{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #f1685e;
}

span.round-tabs.five{
    color: #999;border: 2px solid #999;
}

li.active span.round-tabs.five{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #999;
}

.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
.nav-tabs > li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;
    
}
.nav-tabs > li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
}
.nav-tabs > li a{
   width: 70px;
   height: 70px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-content{
}
.tab-pane{
   position: relative;
padding-top: 50px;
}
.tab-content .head{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}



@media( max-width : 585px ){
    
    .board {
width: 90%;
height:auto !important;
}
    span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
    .tab-content .head{
        font-size:20px;
        }
    .nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

.nav-tabs > li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}


 </style>
</head>
<body>
    <div id="app">
      
        <section style="background:#fff;">
        <div class="container">
            <div class="row">
                <div class="board">
                    
                    <div class="board-inner">
                        <ul class="nav nav-tabs" id="myTab">
                            <div class="liner"></div>
                                
                                <li class="active">
                                    <a href="#client" data-toggle="tab" title="client" >
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span> 
                                    </a>
                                </li>



                                



                                <li>
                                    <a href="#article" data-toggle="tab" title="article">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-th-list"></i>
                                        </span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#facture" data-toggle="tab" title="facture">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-file"></i>
                                        </span> 
                                    </a>
                                </li>

                                <li>
                                    <a href="#trait" data-toggle="tab" title="trait">
                                        <span class="round-tabs four">
                                            <i class="glyphicon glyphicon-euro"></i>
                                        </span> 
                                    </a>
                                </li> 
                                <li>
                                    <a href="#quit" data-toggle="tab" title="quit">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-off"></i>
                                        </span> 
                                    </a>
                                </li>     
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="client">
                        @yield('client')
                        </div>
                        <div class="tab-pane fade" id="article">
                            <h1>article</h1>
                        </div>
                        <div class="tab-pane fade" id="facture">
                            <h1>facture , coming soon...</h1>
                        </div>
                        <div class="tab-pane fade" id="trait">
                            <h1>trait , coming soon...</h1>  
                        </div>
                        <div class="tab-pane fade" id="quit">
                            <div class="text-center">
                                <i class="img-intro icon-checkmark-circle"></i>
                            </div>
                            <p>Voulez vous vraiment quitter ?<p>
                            <button class="btn btn-danger">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="glyphicon glyphicon-off"></i>
                                    </a>
                                    </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                       <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function(){
        $('a[title]').tooltip();
        });
    </script>

        
    </div>
</body>
</html>
