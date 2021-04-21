<?php ?>
@extends('FrontEnd.layout')

@section('content')
    <div class="container forget-password">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <img src="https://usa.afsglobal.org/SSO/SelfPasswordRecovery/images/send_reset_password.svg?v=3" class="immg" alt="car-key" border="0">
                            <h2 class="text-center">Vous avez oublier votre mot de passe?</h2>
                            <p>Vous pouvez réinitialiser votre mot de passe ici</p>


                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                            @endif




                            <form action="{{route('mot_passe_oublier')}}" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div class="col-md-12 form-group">
                                        @if($errors->has('email'))
                                            <div class="alert alert-danger" role="alert">
                                                <p>{{$errors->first('email') }}</p>
                                            </div>
                                        @endif
                                        <label for="username">Adresse E-mail</label>

                                        <input type="text" placeholder="Adresse E-mail" name="email" value="{{old('email')}} " class="form-control form-control-lg" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Changer mot de passe" type="submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
