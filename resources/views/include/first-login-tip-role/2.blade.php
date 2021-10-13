<div class="tip-card d-flex align-items-center mb-3">
    <div class="py-2">
        <i class="tip-card-icon fa fa-user"></i>
    </div>
    <div class="px-3 ps-1 mb-1">
        <span><b>Meu Perfil</b></span>
        <div>Configure as informações sobre você e sua vida fitness.</div>
    </div>
</div>

<div class="tip-card d-flex align-items-center mb-3">
    <a href="{{Auth::user()->gym->url}}/config">
        <div class="py-2">
            <i class="tip-card-icon fa fa-dumbbell"></i>
        </div>
        <div class="px-3 ps-1 mb-1">
            <span><b>Minha academia</b></span>
            <div>Inclua ou altere as informações sobre sua academia.</div>
        </div>
    </a>
</div>

<div class="tip-card d-flex align-items-center mb-3">
    <div class="py-2">
        <i class="tip-card-icon fa fa-cog"></i>
    </div>
    <div class="px-3 ps-1 mb-1">
        <span><b>Configurações</b></span>
        <div>Acesse as configurações do sistema GymUP.</div>
    </div>
</div>
