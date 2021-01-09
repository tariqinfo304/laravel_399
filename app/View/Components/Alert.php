<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Employee;

class Alert extends Component
{

    public $emp;
    public $titleValue;
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    //Additional Dependencies like Employee so that's data you will pass as first paramters 
    public function __construct(Employee $emp,$titleValue,$message)
    {
        $this->emp = $emp;
        $this->titleValue = $titleValue;
        $this->message = $message;
    }


    function setTitleSlot()
    {
        return "Slot Error Title";
    }

    public function checkValid()
    {
        return "Hi it's a function return value";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');

        /*
         return function (array $data) {
            // $data['componentName']; => Its a compoenent name which you will use after x- tag in html 
            // $data['attributes']; => passing all argumenst to x-tag  except constructor passing parameters 
            // $data['slot'];

           // return dd($data);
            //return dd($data['emp']);

            //return '<div>Components content</div>';
        };
        */

    }
}
