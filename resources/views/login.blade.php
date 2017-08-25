@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Login
@stop

@section('head')
@stop

@section('content')
<div class="row space">
    <div class="parallax-container" style="position: fixed;left:0;top:0;width: 100%;height: 100%">
        <div class="parallax">
            <img src="img/bg-downhill-ubs.jpg" alt="downhill - ultrabikes">
        </div>
    </div>
    <div class="valign-wrapper" style="min-height: calc(100vh - 180px);width: 100%">
        <div class="valign row" style="width: 100%">
            <div class="container center">
                <div class="col s12 m7 l5" style="display: inline-block;float: none;max-width: 380px">
                    <form class="col s12 card white" style="padding-top: 30px">
                        <img src="img/profile-photo.jpg" alt="profile" class="circle hoverable" style="width: 60px;height: 60px;border:1px solid #ccc">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Placeholder" id="first_name" type="text" class="validate" required>
                                    <label for="first_name">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <p>
                                <input type="checkbox" id="test6" checked="checked" />
                                <label for="test6">Recordar</label>
                            </p>
                        </div>
                        <div class="card-action">
                            <button class="btn waves-effect waves-light btn-flat col s5 truncate" style="display: inline-block;float: none" type="submit" name="action">Recordar Pass
                            </button>
                            <button class="btn waves-effect waves-light col s6 truncate" style="display: inline-block;float: none" type="submit" name="action">Ingresar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')    
@stop