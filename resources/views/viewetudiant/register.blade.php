
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

<div class="alert-danger" style="text-align: center;" role="alert">

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
                                <div class="col-md-12 form-group">
                                    <label for="Nom">Nom  <span style="color:red" >*</span></label>
                                    <input type="text"  name="nom" class="form-control form-control-lg" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="Prénom">Prénom  <span style="color:red" >*</span></label>
                                    <input type="text"  name="prenom" class="form-control form-control-lg" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="tel">Téléphone  <span style="color:red" >*</span></label>
                                    <input type="text"  name="telephone" class="form-control form-control-lg"required >
                                </div>
                                <div class="col-md-12 form-group">
                                    <select name="id_anne_univ" id="chx_master">Choix de Master
                                        <option value="Maaster_rech">Master Recherche</option>
                                        <option value="Maaster_pro">Master Professionlle</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email">Adresse E-mail <span style="color:red" >*</span></label>
                                    <input type="email" value="{{old('email')}} "  name="email" class="form-control form-control-lg" required>
                               <span style="color:red" >   @if($errors->has('email'))
                                        <p>{{$errors->first('email') }}</p>
                                    @endif</span>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="pword">Mot de passe  <span style="color:red" >*</span></label>
                                    <input type="password"  name="password" class="form-control form-control-lg"required>
                                    <span style="color:red" >
                                            @if($errors->has('password'))
                                        <p>{{$errors->first('password' ) }}</p>
                                    @endif</span>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="pword2">Confirmer votre mot de passe  <span style="color:red" >*</span></label>
                                    <input type="password" name="password_confirmation"  class="form-control form-control-lg"required>
                                    <span style="color:red" >   @if($errors->has('password_confiramtion'))
                                        <p>{{$errors->first('password_confiramtion' ) }}</p>
                                    @endif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection

    @section('js')
    @endsection





