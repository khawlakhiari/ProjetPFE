
    <?php ?>
    @extends('FrontEnd.layout')

    @section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-0">Register</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Register</span>
        </div>
    </div>
    @if (session('error'))

<div class="alert alert-danger" style="text-align: center;" role="alert">

{{session('error')}}

</div>
@endif

    @if (session('success'))

   <div class="alert alert-success" style="text-align: center;" role="alert">
 {{session('success')}}
   </div>
 @endif

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <form action="/register" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="col-md-5 col-12 mr-3">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="email">Cin(ou numero de passport) <span style="color:red" >*</span></label>
                                            <input type="text" value=" "  name="cin" class="form-control form-control-lg" >
                                            @error('cin')
                                            <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                            @enderror
                                        </div>
                                <div class="col-md-12 form-group">
                                    <label for="Nom">Nom  <span style="color:red" >*</span></label>
                                    <input type="text"  name="nom" class="form-control form-control-lg" >
                                    @error('nom')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="Prénom">Prénom  <span style="color:red" >*</span></label>
                                    <input type="text"  name="prenom" class="form-control form-control-lg" >
                                    @error('prenom')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="tel">Téléphone  <span style="color:red" >*</span></label>
                                    <input type="text"  name="telephone" class="form-control form-control-lg" >
                                    @error('telephone')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email">Adresse E-mail <span style="color:red" >*</span></label>
                                    <input type="email" value="{{old('email')}} "  name="email" class="form-control form-control-lg" >
                                    @error('email')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="pword">Mot de passe  <span style="color:red" >*</span></label>
                                    <input type="password"  name="password" class="form-control form-control-lg">
                                    @error('password')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="pword2">Confirmer votre mot de passe  <span style="color:red" >*</span></label>
                                    <input type="password" name="password_confirmation"  class="form-control form-control-lg">
                                    @error('password_confirmation')
                                    <li>  <small class="form-text text-danger">{{$message}}</small></li>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label >Type de master  <span style="color:red" >*</span></label>

                                    <select name="type_m" id="chx_master" class="form-control form-control-lg">Choix de Master
                                        <option value="Recherche"> Recherche</option>
                                        <option value="Professionlle"> Professionlle</option></select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label >Type de master  <span style="color:red" >*</span></label>

                                    <select name="type_m" id="chx_master" class="form-control form-control-lg">Choix de Master
                                        <option value="Recherche"> Recherche</option>
                                        <option value="Professionlle"> Professionlle</option></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>

                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection

    @section('js')
    @endsection





