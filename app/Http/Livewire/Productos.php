<?php

namespace App\Http\Livewire;

use Livewire\Component;
//Importamos el modelo Producto
use App\Models\Producto;

class Productos extends Component
{
    //Definimos atributos
    public $productos;

    public function render()
    {
        $this->productos = Producto::all();
        
        return view('livewire.productos');
    }
}
