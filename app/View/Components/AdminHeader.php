<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminHeader extends Component
{
    public $notifications;

    public function __construct()
    {
        $this->notifications = auth()->check()
        ?auth()->user()->unreadNotifications
        :collect();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-header');
    }
}
