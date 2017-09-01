
<div class="col s12 white">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Seleccionar Imágen</a>
    <div id="modal1" class="modal modal-fixed-footer" style="width: 100%;max-height:100% !important;height: 100% !important;top:0px !important;margin:0 0 !important">
        <div class="modal-content">
            <div class="container">
                <div class="row" style="padding:20px 0">
                    <div class="col s12" style="padding: 0 0 40px">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">textsms</i>
                                <input type="text" id="autocompleteinput" onkeyup="buscar(this)" class="autocomplete">
                                <label for="autocomplete-input">Buscar Imágenes</label>
                                <input type="hidden" name="token" value="{{csrf_token()}}" id="token">
                            </div>
                        </div>
                    </div>
                    <div class="col s12" id="panelimg">
                        <div class="col s6 m4 l3 hoverable" style="padding: 0 0">
                            <div class="card" style="margin:0 0">
                                <div class="card-image">
                                    {{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro', ['class' => 'responsive-img']) }}
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title" style="padding: 0 0">Título de la Tarjeta</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3 hoverable" style="padding: 0 0">
                            <div class="card" style="margin:0 0">
                                <div class="card-image">
                                    {{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro', ['class' => 'responsive-img']) }}
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title" style="padding: 0 0">Título de la Tarjeta</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3 hoverable" style="padding: 0 0">
                            <div class="card" style="margin:0 0">
                                <div class="card-image">
                                    {{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro', ['class' => 'responsive-img']) }}
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title" style="padding: 0 0">Título de la Tarjeta</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    

    function buscar(text){
        VAR html= "<div class='col s6 m4 l3 hoverable' style='padding: 0 0'>lass='card-image' name='image'><a class='btn-floating halfway-fab waves-effect waves-light red'><i class='material-icons'>add</i></a></div><span class='card-title' style='padding: 0 0'>Título de la Tarjeta</span></div>";
        var texto = text.value;
        if(texto !== '')
        {
            var URLdomain = window.location.host;
            var route = 'http://' + URLdomain + "/admin/galeriaimg/autocompletar/"+ texto;
            var token = document.getElementById('token');
            console.log(token.value);
            if(text !== '')
            {
                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN':token.value},
                    method: "POST",
                    success: function(result)
                    {
                        console.log(result);
                        $.each(result, function(i, item) {
                            $('#panelimg').append('<div>AQUI LAS IMAGENES ENCONTADAS</div>');
                        });
                    },
                    fail: function(){
                    },
                    beforeSend: function(){
                    }
                });
            }
        }
    }
</script>