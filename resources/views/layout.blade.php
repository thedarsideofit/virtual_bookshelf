<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Virtual BookShelf - Code Challenge</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!--FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <!--Select 2 for autocomplete-->
    <link href="/css/select2.min.css" rel="stylesheet">

    @yield('stylesheets')
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top nav-beige" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Virtual BookShelf - Code Challenge</a> 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/book">Books</a>
                    </li>
                    <li>
                        <a href="/subject">Subjects</a>
                    </li>
                    <li>
                        <a href="/author">Authors</a>
                    </li>
                    <li>
                        <a href="https://github.com/thedarsideofit">Contact</a>
                    </li>
                </ul>
                {!! Form::open(['method'=>'GET','url'=>'book','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
               <div class="input-group custom-search-form pull-right">
                    <select name="books[]" class="form-control" multiple="multiple" id="books"></select>
                    <span class="input-group-btn">
                        <button class="btn btn-default-sm" type="submit">
                            <i class="fa fa-search"></i>                            
                        </button>
                    </span>
                </div>
                {!! Form::close() !!}
            </div>            
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">        
        <div class="row">            
            <div class="col-md-3">                
                @include('best-selling')                 
                @include('subjects-sidebar')                 
                @include('authors-sidebar')                 
            </div>

            <div class="col-md-9">
            @yield('topheader','<div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://learnenglishlikeme.com/wp-content/uploads/How-to-really-improve-your-English-by-choosing-the-right-books-to-read-.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://www.nextdoormke.org/wp-content/uploads/2016/02/4_3_1440x540-800x300.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://s3.amazonaws.com/buygoon-app-static-resources-prod/categories/banners/000/000/008/original/Banner_-_Books.jpg?1473388926" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
')
                
                @yield('content')

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <!--Select2 -->
    <script src="js/select2.min.js"></script>
    


    <script type="text/javascript">
        $(document).ready(function () {
            // inicializamos el plugin
            $('#books').select2({
                // Activamos la opcion "Tags" del plugin
                tags: true,
                tokenSeparators: [','],
                ajax: {
                    dataType: 'json',
                    url: '{{ url("book_ajax") }}',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                      return {
                        results: data
                      };
                    },
                }
            });
        });
    </script>
</body>

</html>
