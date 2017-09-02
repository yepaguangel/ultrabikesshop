
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
                                <input type="text" id="autocompleteinput" onkeyup="buscar()" class="autocomplete">
                                <label for="autocomplete-input">Buscar Imágenes</label>
                                <input type="hidden" name="token" value="{{csrf_token()}}" id="token">
                            </div>
                        </div>
                    </div>
                    <div class="col s12" id="panelimg">
                        <!-- LISTADO DE IMAGENES -->
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

    function buscar(){
        
        var texto = document.getElementById('autocompleteinput').value;
        if(texto !== '')
        {
            var URLdomain = window.location.host;
            var route = 'http://' + URLdomain + "/admin/galeriaimg/autocompletar/"+ texto;
            var token = document.getElementById('token');
            if(texto !== '')
            {
                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN':token.value},
                    method: "POST",
                    success: function(result)
                    {
                        console.log(result);
                        var img = '';
                        var descr = '';
                        var html = '';
                        $.each(result, function(i, item) {
                            img = 'http://' + URLdomain + '/filegallery/' + item.campos.claveimg + '.' + item.campos.extension;
                            html += "<div class='col s6 m4 l3 hoverable' style='padding: 0 0'><div class='card-image'><img src='"+ img +"'><a class='btn-floating halfway-fab waves-effect waves-light red' onclick='agregar("+ JSON.stringify(item) +")'><i class='material-icons'>add</i></a></div><span class='card-title' style='padding: 0 0'>"+ item.campos.descrip +"</span></div>";
                        });
                        $('#panelimg').html(html);
                    },
                    fail: function(){
                    },
                    beforeSend: function(){
                    }
                });
            }
        }else{
            $('#panelimg').html('');
        }
    }

    function agregar(idjson){
        var carrusel = document.getElementById('carousel02');
        var URLdomain = window.location.host;
        var routeImg = 'http://' + URLdomain + "/filegallery/"+ idjson.campos.claveimg + '.'+ idjson.campos.extension;
        var html = '<div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i><img src="'+ routeImg +'"></div>';
        carrusel.innerHTML += html;
    }
</script>