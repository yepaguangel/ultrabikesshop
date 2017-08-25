@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Registrarse
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
    <div class="valign-wrapper" style="min-height: calc(100vh - 120px);width: 100%">
        <div class="valign row" style="width: 100%">
            <div class="container">
                <div class="col s12 m6">
                    <form class="col s12 card white">
                        <blockquote>
                            <p>
                                Registrandote en ultra Bikes Shop tendras control de todas tus compras y consulta de facturas ademas puedes suscribirte a nuestro volante electronico y recibir noticias, información de nuevos productos y oferta exclusivas.
                            </p>
                            <label>Los Campos Marcados con * son Obligatorios</label>
                        </blockquote>
                        <div class="card-content" style="max-height: 400px;overflow-y: auto;overflow-x: hidden">
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Foto de Perfil</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input required placeholder="Escriba aquí sus nombres" id="first_name" type="text" class="validate">
                                    <label for="first_name">Nombres*</label>
                                </div>
                                <div class="input-field col s6">
                                    <input required id="last_name" type="text" class="validate">
                                    <label for="last_name">Apellidos*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker" required>
                                    <label for="last_name">Fecha de Nacimiento*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">language</i>
                                    <input disabled required id="last_name" type="text" value="colombia" class="validate">
                                    <label for="last_name">País*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">pin_drop</i>
                                    <input required id="last_name" type="text" class="validate">
                                    <label for="last_name">Ciudad*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">place</i>
                                    <input required id="last_name" type="text" class="validate">
                                    <label for="last_name">Dirección*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" class="validate">
                                    <label for="icon_telephone">Telephone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input required id="email" type="email" class="validate">
                                    <label for="email">Email*</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <p>
                                <input type="checkbox" id="test5" checked="checked"/>
                                <label for="test5">Suscribirme Ultra Bikes Noticias</label>
                            </p>
                            <a href="#" class="btn waves-effect">Enviar</a>
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