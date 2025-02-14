<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Nav extends Component
{


    public $url;

    public function __construct($url = '/inici')
    {
        $this->url = $url;
    }


    public function render(): View|Closure|string
    {
        return view('components.nav');
    }
}
