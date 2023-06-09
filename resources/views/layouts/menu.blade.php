<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Inicio</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Inventario</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('animals.index') }}">Animales</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('crops.index')}}">Cultivo</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('machineries.index')}}">Maquinaria</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">producto</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('payment-methods.index')}}">Metodo de pago</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('supplies.index')}}">Suministro</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('bills.index')}}">Facturas</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('getins.index')}}">Entrada</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('posts.index')}}">publicación</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('records.index')}}">Registro</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('warehouses.index')}}">Almacén</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Categorias</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Chat</span>
            </a>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Planes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('suscriptions.index')}}">suscripción</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('transactions.index')}}">transacción</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
