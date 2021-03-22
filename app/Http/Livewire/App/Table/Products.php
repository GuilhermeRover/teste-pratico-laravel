<?php

namespace App\Http\Livewire\App\Table;

use App\Models\Product;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Products extends LivewireDatatable
{
    public $model = Product::class;

    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public function builder()
    {
        //
        return Product::query();
    }

    public function columns()
    {
        //
        return [
            //Column::checkbox(),

            NumberColumn::name('id')->label('ID')->sortBy('id'),

            Column::name('name')->truncate()->label('Nome')->searchable()->editable()->defaultSort('asc'),
            
            Column::name('user_id')->truncate()->label('Usuario')->searchable()->editable()->defaultSort('asc'),
  
            Column::name('price')->truncate()->label('Preço')->searchable()->editable(),    
            
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('livewire.app.table.actions', ['id' => $id, 'name' => $name]);
            }),
            
            //Column::delete(),
        ];
    }
}