@extends('admin_folder.layouts_profile_admin.master')
@section('contenu')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Start: injected by Adguard -->


        <!-- End: injected by Adguard -->
        <link rel="icon" href="../../../../favicon.ico">

        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="../../css/editor.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    <div class="header">
        <div class="header-intro">
            <div class="header-left">
                <h2 class="header2"> Bienvenue: {{session('admin')}}{{session('a')}}  </h2>

            </div>

        </div>
        <ul class="header-navigation">
            <li class="navigation-item">
                <a href="{{route('MJ_page')}}"  class="navigation-item-link">Ajouter enseignant</a>
            </li>



        </ul>


        <div class=" col-sm-9   col-md-9 ">
            <br>

            <span class="userprompt"> </span>
        </div>

        <hr>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0; padding-top: 50px;">
            <hr>
            <div class="row">
                <div class="col-md-8 col-12 mr-3">
                    <div class="row">
                        <form method="post" action="add_MJ">
                            {{csrf_field()}}
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Nom <span style="color:red"> * </span></label>
                                <input type="text" class="form-control" name="nom" value="">
                                @error('nom')
                                <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Prenom <span style="color:red"> * </span></label>

                                <input type="text" class="form-control"  name="prenom" value="">
                                @error('prenom')
                                <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Email <span style="color:red"> * </span></label>

                                <input type="email" class="form-control"  name="email" value="">
                                @error('email')
                                <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Telephone <span style="color:red"> * </span></label>
                             <input type="text" class="form-control"  name="telephone" value="">
                                @error('telephone')
                             <ul>  <li>  <small class="form-text text-danger">{{$message}}</small></li></ul>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group" >
                                <label class="creditcardtext" >Il vas être le membre de jury de la master <span style="color:red"> * </span></label>

                                <select id="select" name="master" class="custom-select" style="margin-top: 1px" >
                                    @foreach ($masters as $master)
                                        <option value="{{$master->master}}">{{$master->master}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-sm-6" style="padding-top: 30px;">
                                <button class="subscribe btn btn-primary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; ">Ajouter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    </div>
    </div>

@endsection
