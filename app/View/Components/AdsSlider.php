<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Employee;

class AdsSlider extends Component
{
    public $emp_list;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Employee $ex)
    {
        $this->emp_list = $ex::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ads-slider',["emp_list" => $this->emp_list]);
    }
}
