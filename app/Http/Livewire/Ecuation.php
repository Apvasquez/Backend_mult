<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Ecuation extends Component
{
    public $a=0 ,$b=0,$c=0, $resp =0;
    public function render()
    {
        $respuesta = HTTP::get('http://127.0.0.3/api/ecuacion/'.$this->a.'/'.$this->b.'/'.$this->c);
        $res = $respuesta->json();

        return view('livewire.ecuation' , compact('res'));
        // foreach ($res as $r){
        //     $this->resp  =  $r['x1'];
        // }
    }
   
}
