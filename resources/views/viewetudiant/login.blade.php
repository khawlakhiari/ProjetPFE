
        <?php ?>
        @extends('FrontEnd.layout')

        @section('content')

        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
            <div class="container">
                <div class="row align-items-end justify-content-center text-center">
                    <div class="col-lg-7">
                        <h2 class="mb-0">Connexion</h2>

                    </div>
                </div>
            </div>
        </div>


        <div class="custom-breadcrumns border-bottom">
            <div class="container">
                <a href="/">Accueil</a>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">Connexion</span>
            </div>
        </div>

        <div class="site-section">
            <div class="container">


                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="row">
                            <form action="/login" method="post">
                                {{csrf_field()}}
                            <div class="col-md-12 form-group">
                                <label for="username">Adresse E-mail  <span style="color:red" > *</span> </label>
                                <input type="text" id="email" name="email" value="{{old('email')}} " class="form-control form-control-lg"required>
                                <span style="color:red" >          @if($errors->has('email'))
                                    <p>{{$errors->first('email' ) }}</p>
                                @endif</span>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="pword">Mot de passe  <span style="color:red" > *</span></label>
                                <input type="password" id="Password" name="password" class="form-control form-control-lg" required>
                                <span style="color:red" >               @if($errors->has('Password'))
                                    <p>{{$errors->first('Password' ) }}</p>
                                @endif</span>
                            </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Se connecter" class="btn btn-primary btn-lg px-5">
                            </div>
                        </div>
                                <a href="register" class="small mr-3">Créer votre compte </a>
                                <a href="/resetpassword" class="small mr-3">Mot de passe oubliée ?  </a>
                        </form>



                    </div>
                </div>



            </div>
        </div>

        @endsection

        @section('js')
        @endsection


