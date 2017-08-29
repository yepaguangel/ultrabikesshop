<div class="left col s12 m12 l2" style="max-width: 215px;position: relative;">
    <ul id="slide-out" class="side-nav fixed grey darken-4" style="top: 65px;max-width: 210px;overflow-y: auto;height: calc(100% - 60px)">
        <li>
            <div class="userView">
                <div class="background">
                    {{ Html::image('img/ub-sidenav.jpg') }}
                </div>
                <a href="#!user">{{ Html::image('admin/img/myprofile.png', 'Picture Profile', array('class' => 'circle')) }}</a>
                <a href="#!name"><span class="white-text name"><font><font>Armando Rubio</font></font></span></a>
                <a href="#!email"><span class="white-text email"><font><font>info@faroweb.com.co</font></font></span></a>
            </div>
        </li>
        <!--<li><a href="#!">Estadisticas Generales</a></li>-->
        <li>{{ link_to('admin/principal/', $title = 'Inicio', $attributes = ['class'=>'white-text']) }}</li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header white-text">Páginas<i class="material-icons white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="ofertas.php">Ofertas</a></li>
                            <li><a href="conoce-mas.php">Conoce Más</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header white-text">Componentes<i class="material-icons white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="home.php">Header</a></li>
                            <li><a href="home.php">Slider Home</a></li>
                            <li><a href="ofertas.php">Algunos Tips</a></li>
                            <li><a href="conoce-mas.php">Preguntas Frecuentes</a></li>
                            <li><a href="home.php">Footer</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>
        {{ link_to('admin/producto/', $title = 'Producto', $attributes = ['class'=>'white-text']) }}
        </li>
        <li>
        {{ link_to('admin/categoria/', $title = 'Categoria', $attributes = ['class'=>'white-text']) }}
        </li>
        <li>
        {{ link_to('admin/galeriaimg/', $title = 'Galeria', $attributes = ['class'=>'white-text']) }}
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</div>