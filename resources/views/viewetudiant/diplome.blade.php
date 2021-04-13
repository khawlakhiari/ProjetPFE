
@extends('FrontEnd.layouts_profile_etud.master')
@section('contenu')
    <div class="header">
        <div class="header-intro">
            <div class="header-left">
                <img src="http://www.isgs.rnu.tn/images/logo.png" height="77.55" width="140" id="logo"
                     class="img-responsive center-block" alt="Logo" style=" display: block; margin: 0 auto;
    padding-top: 30px;
    margin-top: auto;
    margin-left: -250px;
    width: 200px;
     ">
                <img src="http://www.mes.tn/upload/banniere/banniere171_fr.jpg" height="77.55" width="140" id="logo"
                     class="img-responsive center-block" alt="Logo" style=" display: block; margin: 0 auto;
    margin-top: -51px;
    margin-right: -250px;
    width: 200px;
     ">
                <h2 class="header2"> Bienvenue ,</h2>

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

    </div>
    <div class=" col-sm-9   col-md-9 ">
        <br>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <span class="userprompt"> Please provide the information below. This information will be used in all your personalized graphics!</span>
    </div>


    <div class="col-sm-12" style="padding-left: 0; padding-right: 0; padding-top: 50px;">
        <hr>

        <div class="row">
            <div class="col-md-8 col-12 mr-3">
                <div class="row">
                    <form method="post" action="{{route('editProfile')}}">
                        {{csrf_field()}}
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" >Nom de diplome <span style="color:red"> * </span></label>

                            <input type="text" class="form-control" id="nom" name="anne_bac"  required>
                        </div>

                        <div class="col-md-12 form-group" >
                            <label class="creditcardtext">Mention<span style="color:red"> * </span></label>

                            <select id="select" name="master" class="custom-select" style="margin-top: 1px">
                                <option value="sexe">Passable</option>
                                <option value="sexe">Assez bien </option>
                                <option value="sexe">Bien </option>
                                <option value="sexe">Tres bien</option>
                                <option value="sexe">Honorable</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" >Année d'obtention <span style="color:red"> * </span></label>

                            <input type="text" class="form-control" id="nom" name="anne_bac"  required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" >Université<span style="color:red"> * </span></label>

                            <input type="text" class="form-control" id="nom" name="anne_bac"  required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" >Etablissement<span style="color:red"> * </span></label>

                            <input type="text" class="form-control" id="nom" name="anne_bac"  required>
                        </div>









                        <div class="col-sm-6" style="padding-top: 30px;">
                            <button class="subscribe btn btn-primary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "><a href="{{route('suivant')}}">Suivant</a>
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


    </div>
    </div>
@endsection
