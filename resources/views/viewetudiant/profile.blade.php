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
                <h2 class="header2"> Bienvenue , {{$etudiant->nom}} {{$etudiant->prenom}}!</h2>

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
            <span class="userprompt"> </span>
        </div>


        <div class="col-sm-12" style="padding-left: 0; padding-right: 0; padding-top: 50px;">
            <hr>

            <div class="row">
                <div class="col-md-8 col-12 mr-3">
                    <div class="row">
                        <form method="post" action="{{route('editProfile')}}">
                            {{csrf_field()}}
                        <div class="col-md-12 form-group" >
                            <label class="creditcardtext" style="margin-right: 390px">Master <span style="color:red"> * </span></label>
                            <label class="creditcardtext">  ماستر</label>
                            <select id="select" name="master" class="custom-select" style="margin-top: 1px">
                                <option value="sexe">Master</option>
                                <option value="sexe">Master Pofessionnelle </option>
                                <option value="sexe">Master Recherche</option>
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" style="margin-right: 400px">Nom <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >الأسم </label>
                              <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" style="margin-right: 380px">Prenom <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >اللقب  </label>
                            <input type="text" class="form-control" name="prenom" id="prenom" value="{{$etudiant->prenom}}" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" style="margin-right: 350px">Email <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >البريد اللإكتروني  </label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$etudiant->email}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext" style="margin-right: 360px">Telephone <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >هاتف  </label>
                            <input type="text" class="form-control" name="telephone" id="telephone" value="{{$etudiant->telephone}}" required>
                        </div>


                           <div class="col-md-12 form-group">
                                <label class="creditcardtext"style="margin-right: 280px">Date de naissance <span
                                        style="color:red"> * </span></label>
                                <label class="creditcardtext" > تاريخ الميلاد</label><br><br>
                                <input type="date" id="start" name="date_nais"  value="2000-01-01" min="1980-01-01" max="2021-12-31" value="  {{old('date_nais')}}" style=" width: inherit; margin-top: -20px;">
                            </div>

                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 270px">Lieu de naissance <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >مكان الولادة</label>
                            <input type="text" id="lieu" class="form-control" name="lieu"
                                   value="  {{old('date_nais')}}">
                        </div>


                        <div class="col-md-12 form-group" >
                            <label class="creditcardtext" style="margin-right: 380px">Sexe <span style="color:red"> * </span></label>
                            <label class="creditcardtext"> الجنس</label>
                            <select id="select" name="sexe" class="custom-select" style="margin-top: 1px">
                                <option value="sexe">sexe</option>
                                <option value="sexe">Femme</option>
                                <option value="sexe">Homme</option>
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 380px"> ville <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >الولاية</label>
                            <input type="text" id="ville" class="form-control" name="ville"
                                   value="  {{old('ville')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 300px">Code postale <span style="color:red"> * </span></label>
                            <label class="creditcardtext" >الرقم البريدي</label>
                            <input type="text" id="codepostal" class="form-control" name="codepostal"
                                   value="  {{old('codepostal')}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 370px">Adresse <span style="color:red"> * </span></label>
                            <label class="creditcardtext" > العنوان</label>
                            <input type="text" id="adresse" class="form-control" name="adresse"
                                   value="  {{old('adresse')}}">
                        </div>
                     <h4>  Dans le cas de travail</h4>
                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 360px">Profession  <span style="color:red"> * </span></label>
                            <label class="creditcardtext" > المهنة</label>
                            <input type="text" id="profession" class="form-control" name="profession"
                                   value="  {{old('profession')}}">
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="creditcardtext"style="margin-right: 370px">Société  <span style="color:red"> * </span></label>
                            <label class="creditcardtext" > الشركة</label>
                            <input type="text" id="societe" class="form-control" name="societe"
                                   value="  {{old('societe')}}">
                        </div>







                <div class="col-sm-6" style="padding-top: 30px;">
                    <button class="subscribe btn btn-primary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; "><a href="{{route('suivant')}}" style="color: whitesmoke">Suivant</a>
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
