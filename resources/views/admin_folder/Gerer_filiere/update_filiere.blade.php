@extends('admin_folder.layouts_profile_admin.master')
@section('contenu')
    <div class="header">
        <div class="header-intro">
            <div class="header-left">
                <h2 class="header2"> Bienvenue:  {{session('admin')}}{{session('a')}}  </h2>
            </div>
        </div>

        <ul class="header-navigation">
            <li class="navigation-item">
                <a href="{{route('show_add_etablissement')}}" class="navigation-item-link">Ajouter etablissement</a>
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
                        <form method="post" action='{{route('update_filieres')}}'>
                            @csrf

                            <input type="text" class="form-control" id="master" name="id" value="">
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Filiere <span style="color:red"> * </span></label>
                                <input type="text" class="form-control"  value="" name="filiere">
                                @error('filiere')
                                <small class="form -text text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group" >
                                <label class="creditcardtext" >Universite <span style="color:red"> * </span></label>

                                <select id="select" name="universite" class="custom-select" style="margin-top: 1px"  >
                                    <option value=""></option>
                                    @foreach ($etablissements as $etablissement)
                                        <option value="{{$etablissement->etablissement}}">{{$etablissement->etablissement}}</option>
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
    font-weight: 100; ">Modifer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">





    </script>

    </div>
    </div>

@endsection
