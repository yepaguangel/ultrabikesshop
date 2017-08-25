@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Mi Cuenta
@stop

@section('head')
    <link rel="stylesheet" href="css/acountstyle.css">
@stop


@section('content')
<div class="row white" style="padding: 50px 0 100px">
    <div class="container">
        <div class="col s12 countbox" style="padding-right: 0;padding-left: 0">
            <ul class="collection countheader">
                <li class="collection-item avatar">
                    <div class="left col s12 m4 left" style="padding: 0 0">
                        <img src="img/new-user.png" alt="" class="circle" style="margin: 0 0">
                        <span class="title truncate">Armando Rubio</span>
                        <label style="line-height: 15px" class="truncate">Activo Desde: 25/07/2017</label>
                    </div>
                    <div class="col s12 m8 right" style="padding: 0 0">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#test1">Mi Cuenta</a></li>
                            <li class="tab col s3"><a href="#test2">Compras</a></li>
                            <li class="tab col s3 right"><a href="#test3">Contáctar</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div id="test1" class="col s12">
                <div class="row card" style="padding: 10px 0">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input disabled value="Armando" id="first_name" type="text" class="validate">
                                <label for="first_name">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input disabled id="last_name" value="Rubio" type="text" class="validate">
                                <label for="last_name">Apellidos</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled id="email" type="email" value="arman.2.r@gmail.com" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled type="tel" class="validate" value="2716742">
                                <label for="icon_telephone">Teléfono</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
            <div id="test2" class="col s12" style="padding: 0 0">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="img/hans.jpg" alt="" class="circle">
                        <span class="title">Neumatico Hanz</span>
                        <p>Precio:$80.000</p>
                        <label>Compra: 25/07/2017</label>
                        <a href="#!" class="secondary-content"><i class="material-icons left">file_download</i><span class="hide-on-small-only">Descargar Recibo</span></a>
                    </li>
                    <li class="collection-item avatar">
                        <img src="img/hans.jpg" alt="" class="circle">
                        <span class="title">Neumatico Hanz</span>
                        <p>Precio:$80.000</p>
                        <label>Compra: 25/07/2017</label>
                        <a href="#!" class="secondary-content"><i class="material-icons left">file_download</i><span class="hide-on-small-only">Descargar Recibo</span></a>
                    </li>
                    <li class="collection-item avatar">
                        <img src="img/hans.jpg" alt="" class="circle">
                        <span class="title">Neumatico Hanz</span>
                        <p>Precio:$80.000</p>
                        <label>Compra: 25/07/2017</label>
                        <a href="#!" class="secondary-content"><i class="material-icons left">file_download</i><span class="hide-on-small-only">Descargar Recibo</span></a>
                    </li>
                    <li class="collection-item avatar">
                        <img src="img/hans.jpg" alt="" class="circle">
                        <span class="title">Neumatico Hanz</span>
                        <p>Precio:$80.000</p>
                        <label>Compra: 25/07/2017</label>
                        <a href="#!" class="secondary-content"><i class="material-icons left">file_download</i><span class="hide-on-small-only">Descargar Recibo</span></a>
                    </li>
                </ul>
            </div>
            <div id="test3" class="col s12">
                <div class="row card" style="padding: 8px">
                    <blockquote>
                        <p>Complete el siguiente formulario si tiene algúna petición, queja, reclamo o sugerencia, su opinion es muy importante para nosotros.</p>
                    </blockquote>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Sus Nombres aqui" id="first_name" type="text" class="validate">
                                    <label for="first_name">Nombres</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Apellidos</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="tel" class="validate" value="2716742">
                                    <label for="icon_telephone">Teléfono</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 prefix">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Escribanos aquí sus comentarios</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
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