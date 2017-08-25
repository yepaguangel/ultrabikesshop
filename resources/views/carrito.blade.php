@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Carrito de Compras
@stop

@section('head')
@stop

@section('content')
<div class="row white space">
    <div class="container">
        <div class="col s12 m8" style="padding: 0 0">
            <table class="responsive-table bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET HP SILVER CON CO2 16G TOPEAK</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET HP SILVER CON CO2 16G TOPEAK</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET HP SILVER CON CO2 16G TOPEAK</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-flat btn-floating waves-effect waves-ligth"><i class="material-icons black-text">close</i></a></td>
                        <td><img src="img/bomba-amarilla.jpg" style="width: 60px" alt=""></td>
                        <td>INFLADOR HYBRIDROCKET HP SILVER CON CO2 16G TOPEAK</td>
                        <td>$157,000</td>
                        <td class="center">3</td>
                        <td>$471,000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <p style="margin:0 0">
                                <label>Sub Total</label>
                            </p>
                            <h6 style="margin:0 0">$393,000</h6></td>
                        <td>
                            <p style="margin:0 0">
                                <label>TOTAL</label>
                            </p>
                            <h5 style="margin:0 0">$393,000</h5></td>
                    </tr>
                </tbody>
            </table>
            <div class="col s12 space">
                <h4 class="flow-text">ENVÍO:</h4>
                <p>Los gastos de envío se calcularán cuando hayas introducido tu dirección.</p>
                <div class="divider">
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <ul class="collection" style="margin-bottom: 0px">
                    <li class="collection-item avatar">
                        <img src="img/new-user.png" alt="" class="circle">
                        <span class="title">User</span>
                        <p>
                            <label>Eres un usuario sin registrar</label>
                        </p>
                        <p class="hide">
                            Eres un usuario sin registrar
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                </ul>
                <div class="card-action">
                    <a href="registro">Registrate</a>
                    <a href="login">Ingresar</a>
                </div>
            </div>
            <a href="#" class="btn col s12">Finalizar Compra</a>
        </div>
    </div>
</div>
<div class="row space white">
</div>
@stop

@section('footer')
    @parent
@stop