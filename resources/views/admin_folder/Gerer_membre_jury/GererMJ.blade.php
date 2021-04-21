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
                <a href="{{route('add_MJ')}}"  class="navigation-item-link">Ajouter enseignant</a>
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
                        <form method="post" action="">
                            {{csrf_field()}}
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-condensed">
                                    <tr>
                                        <td> Id</td>
                                        <td>Nom</td>
                                        <td>Prenom</td>
                                        <td>Email</td>
                                        <td>Telephone</td>
                                        <td>Master</td>
                                    </tr>


                                    <tr>
                                        @foreach ($enseignants as $enseignant)
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $enseignant->nom }}</td>
                                            <td>{{ $enseignant->prenom }}</td>
                                            <td>{{ $enseignant->email }}</td>
                                            <td>{{ $enseignant->telephone }}</td>
                                            <td>{{ $enseignant->master }}</td>
                                           <td><div class="col-sm-6" style="padding-top: 30px;">
                                                    <button class="subscribe btn btn-secondary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "><a  href="{{"delete_enseignant/".$enseignant->id}}">Supprimer</a>
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
