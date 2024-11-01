<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlashMsg extends Component
{
    public $msg;
    public $bg;

    /**
     * Create a new component instance.
     */
    public function __construct($msg, $bg)
    {
        $this->msg = $msg;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flash-msg');
    }
}
