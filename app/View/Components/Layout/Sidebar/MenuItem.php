<?php

namespace App\View\Components\Layout\Sidebar;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $icon;
    public $url;
    public function __construct($url = null, $label = null, $icon = null)
    {
        if (!$url) throw new Exception("Componen Menu Item Sidebar Memerlukan URl");
        $this->label = $label;
        $this->icon = $icon;
        $this->url = url($url);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.sidebar.menu-item');
    }
}
