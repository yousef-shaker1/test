<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $number1 = "";
    public $number2 = "";
    public string $action = "+";
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.test');
    }
        
    public function calculate()
    { 
        $num1 = $this->number1;
        $num2 = $this->number2;
        if ($this->action == "-"){
            $this->result = $num1 - $num2;
        } elseif ($this->action == "+"){
            $this->result = $num1 + $num2;
        } elseif($this->action == "*"){
            $this->result = $num1 * $num2;
        } elseif ($this->action == "%"){
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function updated($property)
    {
        if($this->number1 == "" || $this->number2 == ""){
            $this->disabled = false;
        } else {
            $this->disabled = true;
        }
    }
}
