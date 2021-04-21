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
                <a href="{{route('show_add_etablissement')}}"  class="navigation-item-link">Ajouter etablissement</a>
            </li>

            <li class="navigation-item">
                <a href="" class="navigation-item-link">Modifier etablissement</a>
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
                                        <td>Etablissement</td>
                                        <td>Type master</td>
                                        <td>Detail sur la master</td>
                                    </tr>


                                    <tr>

                                            <td></td>



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
