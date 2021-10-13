<div class="col-md-2 pl-0 py-0 left sidebar main-sidebar shadow-right">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-{{__(Auth::user()->theme)}} accordion" id="accordionSidebar">

        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="/profile">
                <i class="fas fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu1"
                aria-expanded="true" aria-controls="menu1">
                <i class="fas fa-store"></i>
                <span>Lojas</span>
            </a>
            <div id="menu1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções</h6>
                    <a class="collapse-item" href="/stores/create">Cadastrar Loja</a>
                    <a class="collapse-item" href="/stores">Listar Lojas</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu2"
                aria-expanded="true" aria-controls="menu2">
                <i class="fas fa-box"></i>
                <span>Produtos</span>
            </a>
            <div id="menu2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções</h6>
                    <a class="collapse-item" href="/products/create">Cadastrar Produto</a>
                    <a class="collapse-item" href="/products">Listar Produtos</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider my-0">


    </ul>
</div>
