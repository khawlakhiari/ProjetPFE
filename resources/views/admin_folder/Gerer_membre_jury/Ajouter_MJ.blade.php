@extends('admin_folder.layouts_profile_admin.master')
@section('contenu')

    <div class="header">
        <div class="header-intro">
            <div class="header-left">
                <h2 class="header2"> Bienvenue: {{session('admin')}}{{session('a')}}  </h2>

            </div>

        </div>
        <ul class="header-navigation">
            <li class="navigation-item">
                <a href="{{route('MJ_page')}}"  class="navigation-item-link">Ajouter membre de jury</a>
            </li>

            <li class="navigation-item">
                <a href="" class="navigation-item-link">Modifier membre de jury</a>
            </li>

        </ul>


        <div class=" col-sm-9   col-md-9 ">
            <br>

            <span class="userprompt"> </span>
        </div>

        <hr>

        <div class="col-sm-12" style="padding-left: 0; padding-right: 0; padding-top: 50px;">
            <hr>
            <div class="row">
                <div class="col-md-8 col-12 mr-3">
                    <div class="row">
                        <form method="post" action="">
                            {{csrf_field()}}
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Nom <span style="color:red"> * </span></label>

                                <input type="text" class="form-control" name="nom" value="">

                            </div>
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Prenom <span style="color:red"> * </span></label>

                                <input type="text" class="form-control"  name="prenom" value="">

                            </div>

                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Email <span style="color:red"> * </span></label>

                                <input type="email" class="form-control"  name="email" value="">

                            </div>
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Telephone <span style="color:red"> * </span></label>

                                <input type="text" class="form-control"  name="telephone" value="">

                            </div>
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Mot de passe <span style="color:red"> * </span></label>

                                <input type="text" class="form-control"  name="password" value="">

                            </div>
                            <div class="col-md-12 form-group" >
                                <label class="creditcardtext" >Il vas être le membre de jury de la master <span style="color:red"> * </span></label>

                                <select id="select" name="master" class="custom-select" style="margin-top: 1px" >
                                    @foreach ($masters as $master)
                                        <option value="{{$masters->master}}">{{$masters->master}}</option>
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

    <script type="text/javascript">





    </script>

    </div>
    </div>

@endsection
