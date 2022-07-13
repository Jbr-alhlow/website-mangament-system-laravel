<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link href="{{ asset('css/prodact.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    </head>
    <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><h3>j-b-r</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                        @if (Auth::user())
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">home</a></li>
                        @endif
                        @if (Auth::user())
                        @if ( Auth::user()->is_admin==1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prodact.prodact') }}">prodact-mangment</a>
                        </li>
                        @endif
                         @endif
                        <li class="nav-item"><a class="nav-link" href="/">welcome</a></li>

                        <li class="nav-item"><a class="nav-link" href="/prodact">prodact</a></li>
                         @if (!Auth::user())
                        <li class="nav-item"><a class="nav-link" href="/login">log-in</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br>

{{--  --}}
<div id="wrapper" class="toggled">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">

filter
            </li>
            <li>



<form action="{{route('prodact.index')}}">
                <a class="f1"><i class="fa-solid fa-computer f" >
                    </i>&nbsp; &nbsp;  <input type="submit" name="type" value="computer"> </a>

                    <a class="f1"><i class="fa-solid fa-shoe-prints f" >
                    </i>&nbsp; &nbsp;  <input type="submit" name="type" value="shoe"> </a>




            </li>

            <li>

               <i class="fa-solid fa-circle-arrow-left ar" id="arrow" onclick="myFunction()"></i>


            </li>


        </ul>
    </div>



    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper"class="row form1">


<form action="">
          <div class="input-group">
            <input type="text" class="form-control rounded" value="{{ request('prodactsearch') }}" name="prodactsearch" placeholder="Search"  />
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </form>
          <hr>
        <div class="container-fluid row">
@if($prodact_list->total()!=0)

        <div class="pagination pagination-centered">{{  $prodact_list->links() }}</div>
        @foreach($prodact_list as $prodact)
        <br>


          <div class="card col-12 col-lg-2 col-sm-12 col-md-8" style="width:300px; margin-left:auto;margin-right:auto;">

              <img class="card-img-top" src='{{$prodact->img}}' alt="Card image" style="width:220px; height:160px;margin-left:auto;margin-right:auto">
            <div class="card-body">
              <h4 class="card-title">{{$prodact->name}} {{$prodact->id}}</h4>
              <p class="card-text">{{$prodact->discripe}}</p><p class="price">{{{$prodact->price}}}</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>

        @endforeach
        </div>

        <div class="pagination pagination-centered">{{  $prodact_list->links() }}</div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Menu Toggle Script -->

{{--  --}}










        <br>
    <div class="container container1 row form1" style=" margin-left:auto;margin-right:auto;margin-top:200px;
    ">
    {{-- filter --}}



{{-- end filter --}}
<a href="#" onclick="return1()" class="arrow-back" id="arrow-back"><i class="fa-solid fa-circle-arrow-right "></i></a>

<script src="{{ asset('js/arrow.js') }}"></script>

@endif
</body>
</html>
