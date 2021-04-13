@extends('FrontEnd.layouts_profile_etud.master')
@section('contenu')
        <div class="header">
            <div class="header-intro">
                <div class="header-left">
                    <h2 class="header2"> CONDIDAT,   </h2>

                </div>

            </div>

            <ul class="header-navigation">
                <li class="navigation-item">
                    <a href="#" class="navigation-item-link">My Profile</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-item-link">Your Details</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-item-link">About</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-item-link">summary</a>
                </li>
            </ul>


        <div class=" col-sm-9   col-md-9 ">
            <br>
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <span class="userprompt"> Please provide the information below. This information will be used in all your personalized graphics!</span>
        </div>

<hr>
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0; padding-top: 50px;">
            <hr>
            <div class="row">
                <div class="col-md-8 col-12 mr-3">
                    <div class="row">
                        <form method="post" action="">
                            {{csrf_field()}}
<fieldset>
    <legend>
        Année universitaire n :
    </legend>
    <span id="result"></span>
    <table class="table table-bordered table-striped" id="user_table">

        <tbody>

        </tbody>
        <tfoot>
        <tr>
            <td colspan="2" align="right">&nbsp;</td>
            <td>
                @csrf
                <input type="submit" name="save" id="save" class="btn btn-primary" value="Enregistrer" />
            </td>
        </tr>
        </tfoot>
    </table>




                <script>
                    $(document).ready(function(){

                        var count = 1;

                        dynamic_field(count);

                        function dynamic_field(number)
                        {
                            html = '<tr>';


                                html += '<td><label for="cars">Année:</label> \n' +
                                '                                <input type="text" name="" class="form-control"  /></td>';
                            html += '<td><label for="cars">Université:</label>\n' +
                                '\n' +
                                '<select class="universite"  id="univer"  >\n' +
                               '  <option value="0" disabled="true" selected="true"> -Select-</option>\n' +
                                    @foreach($universite as $etablissement)
                                <option value="{{$etablissement->id}}">{{$etablissement->etablissement}}</option>
                            @endforeach


                                '</select></td>';
                            html += '<td><label>Etablissement:</label>\n' +
                                '\n' +
                                '<select class="etablissement" id="etablis" >\n' +
                                '  <option  value="0" disabled="true" selected="true">-Choisir un etablissement-</option>\n' +

                                '</select>  </td>                                                 ';

                            html += '<td><label >Filiére:</label>\n' +
                                '\n' +
                                '<select  id="fil" class="filiere " >\n' +
                                '  <option  value="0" disabled="true" selected="true">choisir une filére </option>\n' +

                                '</select></td>';
                            html += '<td><label >Niveau:</label>\n' +
                                '\n' +
                                '<select >\n' +
                                '  <option >3eme</option>\n' +


                                '</select></td>';
                            html += '<td><label for="session">Session:</label>\n' +
                                '\n' +
                                '<select  id="">\n' +
                                '  <option value="volvo">Principale</option>\n' +
                                '  <option value="saab">Ratrappage</option>\n' +

                                '</select></td>';

                            html += '<td><label for="session">Resultat:</label>\n' +
                                '\n' +
                                '<select name="cars" id="">\n' +
                                '  <option value="volvo">Admis</option>\n' +
                                '  <option value="saab">Refusé</option>\n' +

                                '</select></td>';


                            html += '<td><label for="cars">Moyenne:</label> \n' +
                                '                                <input type="text" name="first_name[]" class="form-control"  /></td>';
                            if(number > 1)
                            {
                                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Supprimer une année universitaire</button></td></tr>';
                                $('tbody').append(html);
                            }
                            else
                            {
                                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Ajouter un année universitaire</button></td></tr>';
                                $('tbody').html(html);
                            }
                        }

                        $(document).on('click', '#add', function(){
                            count++;
                            dynamic_field(count);
                        });

                        $(document).on('click', '.remove', function(){
                            count--;
                            $(this).closest("tr").remove();
                        });




                    });

                </script>

   <script src="'htps://ajaxgoogleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

   </script>
    <script type="text/javascript">
      $(document).ready(function (){

          $(document).on('change','.universite',function (){
           console.log('hmm its change');
           var univ_id=$(this).val();
              console.log(univ_id);



          });
      }) ;
    </script>


    <div>  <label for="session">Avez vous une année de réorientation ?:</label>

    <select name="cars" id="">
         <option value="oui">oui</option>
      <option value="non">Non</option>

        </select></div>
    <div class="col-md-12 form-group">
        <label class="creditcardtext" >Nombre de redoublement <span style="color:red"> * </span></label>

        <input type="text" class="form-control" id="nom" name="nom"  required>
    </div>
    <div class="col-md-12 form-group">
        <label class="creditcardtext" >Charger votre diplome <span style="color:red"> * </span></label>

        <input type="file" class="form-control" id="nom" name="img_diplome"  required style="padding: 5px">
    </div>

                </fieldset>






                            <div class="col-sm-6" style="padding-top: 30px;">
                                <button class="subscribe btn btn-primary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "> Suivant
                                </button>


                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <p>  <span style="color:red;font-weight:bold"> Important ! :</span> <br>
            <ol>
                <li >Tout dossier incomplet ou toute information préalablement fournie à distance non-conforme ou erronée entraîne l’annulation systématique de la candidature.</li>
                <li>Toute candidature déposée après le délai ci-dessous indiqué ne sera pas prise en compte.</li>
                <li> <span style="color:red;font-weight:bold">N'est toléré qu'un seul redoublement.</span> </li>
                <li><span style="color:red;font-weight:bold">Tout candidat a le droit de postuler à un Mastère de recherche et un Mastère Professionnel.</span> </li>
                <li>La liste des candidats retenus par la commission sera mise en ligne sur le site de l'ISG.</li>
                <li>Imprimer votre justificatif de pré-inscription. Il sera nécessaire d'inclure ce justificatif dans le dossier de candidature des étudiants qui seront pré-sélectionnés.</li>
                <li>les étudiants qui seront pré-sélectionnés sur la base des données introduites en ligne auront à fournir/envoyer leurs documents papier et seront invités à des entretiens sur la base desquels la liste finale des étudiants admis sera établie</li>
                <li>Le dernier delai de dépôt des candidatures pour les Mastères fixé au 17/09/2021.</li>
            </ol>
            </p>
        </div>

    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script type="text/javascript">





        </script>

        </div>
</div>

@endsection
