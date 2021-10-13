<?php

namespace App\Providers;

use App\View\Components\DropCard;
use App\View\Components\Form\Select;
use App\View\Components\Form\Text;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(){

    }

    public function boot(){
        //Blade::component('drop-card', DropCard::class);

        //Blade::component('text', Text::class);
        //Blade::component('select', Select::class);
    }
}
