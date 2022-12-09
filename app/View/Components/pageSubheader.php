<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pageSubheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $pagename;
    public function __construct($pagename = null)
    {
        $this->pagename = $pagename;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-subheader');
    }
}