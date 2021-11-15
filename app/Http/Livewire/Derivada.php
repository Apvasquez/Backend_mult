<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Derivada extends Component
{
    public $a=0 ,$b=0,$c=0, $resp =0;
    public function render()
    {
        $respuesta = HTTP::get('http://127.0.0.3/api/derivada/'.$this->a.'/'.$this->b.'/'.$this->c);
        $res = $respuesta->json();

        return view('livewire.derivada');
    }
}
