<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="css/styleprofile.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pacifico:300,400,600,700&lang=en">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&lang=en">


<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
    @import url("https://fonts.googleapis.com/css?family=Pacifico:300,400,600");
    @import url("https://fonts.googleapis.com/css?family=Pacifico");
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
</style>
<div class="dashboard-container">
    <div class="sidebar">
        <div class="sidebar-avatar">
            <div class="sidebar-avatar-photo avatar"></div>
            <div class="sidebar-avatar-user">
                <span class="sidebar-avatar-name">ISG Sousse</span>
                <i class="arrow bottom"></i>
            </div>
        </div>
        <div class="sidebar-menu main">
            <ul class="sidebar-items">
                <li class="sidebar-item">
                    <a href="{{route('master_page')}}" class="sidebar-link">
                        <span class="sidebar-link-concept">Gerer master</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('MJ_page')}}" class="sidebar-link">
                        <span class="sidebar-link-concept">Gerer membre de jury</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <span class="sidebar-link-concept">Lancer la master </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <span class="sidebar-link-concept">Deconnexion </span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class=" col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
        @yield('contenu');
    </div>
</div>

