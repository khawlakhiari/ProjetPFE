


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="js/newpassword.js"></script>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
            <h1>Changer mot de passe</h1>
        </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-sm-6 col-sm-offset-3">
            @if (session('success'))

            <div class="alert alert-success" style="text-align: center;" role="alert">

                {{session('success')}}
                <a href="/login" >login </a>
            </div>
            @endif
            <form  class="section" method="post" action="{{route('changermotdepasse')}}">
                {{csrf_field()}}
                <div class="row" >
                    <h3>Adresse E-mail</h3>
                <input type="email" class="input-lg form-control" name="email" autocomplete="off" required>

                </div>
                    <div class="row" >
                        <h3> Nouveaux Mot de passe</h3>
                        <input type="password" class="input-lg form-control" name="password"    autocomplete="off" required>

                    </div>

                <div class="row" style="margin: 9px">

                <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
                </div>
            </form>
        </div><!--/col-sm-6-->
    </div><!--/row-->
</div>
