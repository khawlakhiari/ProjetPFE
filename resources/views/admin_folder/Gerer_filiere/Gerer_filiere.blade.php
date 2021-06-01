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
                <a href="{{route('add_filiere')}}"  class="navigation-item-link">Ajouter Filiere</a>
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
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-condensed">
                                    <tr>
                                        <td> Id</td>
                                        <td>Filiére</td>
                                        <td>Niveau</td>
                                        <td>Etablissement</td>
                                    </tr>


                                        <tr>
                                            @foreach ($filieres as $filiere)
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $filiere->filiere }}</td>
                                                <td>{{ $filiere->niveau }}</td>
                                                <td>{{ $filiere->etablissement }}</td>



                                                <td><div class="col-sm-6" style="padding-top: 30px;">
                                                    <button class="subscribe btn btn-secondary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "><a  href="{{"update_filiere/".$filiere->id_f}}">Modifier</a>
                                                    </button>
                                                </div> </td>
                                            <td><div class="col-sm-6" style="padding-top: 30px;">
                                                    <button class="subscribe btn btn-secondary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "><a  href="">Supprimer</a>
                                                    </button>
                                                </div> </td>
                                    </tr>



                                    @endforeach
                                </table>
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
