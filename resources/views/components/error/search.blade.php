
@if ($error == '404')
    <div class="col text-center mt-5">
        <h4 class="color-primary">Nenhum resultado encontrado.</h4>
        <div class="text-muted">Desculpe, não há resultados para esta pesquisa. Por favor, tente outra.</div>
        <img src = "svg/rip.svg" class="search-img-svg" style="margin-top:-35px"/>
    </div>
@endif

@if ($error == '409')
    <div class="col text-center mt-5">
        <h4 class="color-primary">Ainda não há {{$title}}.</h4>
        <div class="text-muted">Comece inserindo um novo {{$title2}} no sistema.</div>
        <img src = "svg/astronaut.svg" class="search-img-svg"/>
    </div>
@endif
