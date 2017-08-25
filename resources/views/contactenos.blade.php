@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Contáctenos
@stop

@section('head')
    <link rel="stylesheet" href="css/conocenos.css">
@stop

@section('content')
<div class="row grey darken-4" style="position: relative;">
    <div class="valign-wrapper center bgnosotros">
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/bg-ultrabikes-contacto.jpg" alt="banner ultra bikes shop">
            </div>
        </div>
        <div class="valign">
            <div class="container white-text">
                <h2>Contáctenos</h2>
                <h1 style="font-size: 1.8rem">Comentarios o Preguntas son bienvenidos.</h1>
                <h3 class="flow-text">* denota un campo obligatorio</h3>
            </div>
        </div>
        <div class="divider"></div>
    </div>
    <div class="row white space" style="padding-bottom: 100px !important">
        <div class="container">
            <div class="col s12 m6">
                <form class="col s12 card" style="padding:0 0;display: inline-block;width: 100%">
                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" required>
                                <label for="first_name">Nombres*</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Apellidos</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i style="margin-top: 8px" class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Teléfono</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i style="margin-top: 8px" class="material-icons prefix">mail</i>
                                <input id="email" type="email" class="validate" required>
                                <label for="email" data-error="wrong" data-success="right">Email*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i style="margin-top: 8px" class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Comentarios aquí*</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col s12 m6 center valign-wrapper" style="min-height: 500px">
                <div class="valign center" style="width: 100%">
                    <div class="card" style="max-width: 300px;display: inline-block;">
                        <div class="card-image grey darken-4">
                            <img src="img/bikers.jpg" style="opacity: .7">
                            <span class="card-title col s12">
                                <ul class="collection" style="background-color: transparent;border:none;margin:0 0">
                                    <li class="collection-item avatar" style="background-color: transparent;padding: 0 0;">
                                        <img src="img/bicycle.png" alt="" class="circle" style="position: relative;left:0;right: 0;margin:auto">
                                        <h4 class="flow-text">Jorge Corona</h4>
                                    </li>
                                </ul>
                            </span>
                        </div>
                        <div class="card-content">
                            <p>Teléfono: 3185239686</p>
                            <p>Email: ultrabikes2.0@gmail.com</p>
                        </div>
                        <div class="card-action">
                            <a href="" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Siguenos en Facebook"><img src="img/facebook.svg" class="responsive-img" alt="facebook ultra bikes shop"></a>
                            <a href="" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Siguenos en Twitter"><img src="img/twitter.svg" class="responsive-img" alt="facebook ultra bikes shop"></a>
                            <a href="" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Siguenos en Google+"><img src="img/google-plus.svg" class="responsive-img" alt="facebook ultra bikes shop"></a>
                            <a href="" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Siguenos en Instagram"><img src="img/instagram.svg" class="responsive-img" alt="facebook ultra bikes shop"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop