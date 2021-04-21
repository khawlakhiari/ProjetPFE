@extends('admin_folder.layouts_profile_admin.master')
@section('contenu')
    <div class="header">
        <div class="header-intro">
            <div class="header-left">
                <h2 class="header2"> Bienvenue:  {{session('admin')}}{{session('a')}}  </h2>

            </div>
        </div>

        <ul class="header-navigation">
            <li class="navigation-item">
                <a href="{{route('add_master')}}" class="navigation-item-link">Ajouter master</a>
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
                        <form method="post" action='/'>
                            @csrf
                            <input type="hidden" class="form-control" id="master" name="id" value="">
                            <div class="col-md-12 form-group">
                                <label class="creditcardtext" >Master <span style="color:red"> * </span></label>

                                <input type="text" class="form-control" id="master" name="master" value="">
                                @error('master')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group" >
                                <label class="creditcardtext" >Type de master <span style="color:red"> * </span></label>

                                <select id="select" name="type_m" class="custom-select" style="margin-top: 1px" value="" >

                                    <option value="Professionnel">Professionel</option>
                                    <option value="Recherche">Recherche</option>
                                </select>

                            </div>

                            <div class="col-md-12 form-group" >
                                <label class="creditcardtext" >Detail sur la master <span style="color:red"> * </span></label>

                                <textarea id="detail" name="detail" rows="4" cols="50"  >{{$masters->details}}

                                </textarea>
                                @error('detail')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6" style="padding-top: 30px;">
                                <button class="subscribe btn btn-primary btn-block" type="submit" style="border-radius: 35px 35px 35px 35px;
    background-color: #F0843C;
    height: 57px;
    width: 185px;
    font-family: Roboto Condensed, Regular;
    border: none;
    font-size: 22px;
    font-weight: 100; ">Modifier
                                </button>
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
