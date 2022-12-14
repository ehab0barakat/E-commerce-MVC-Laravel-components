<?php

namespace App\View\Components;

use Illuminate\View\Component;

class nav_bar extends Component
{

    public $ehba ;
    public $name ;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ehba , $name)
    {
        $this->ehba = $ehba ;
        $this->name = $name ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav_bar');
    }
}
