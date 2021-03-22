<?php

namespace App\Http\Livewire\App\Table;

use App\Models\User as ModelsUser;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class User extends LivewireDatatable
{
    public $model = ModelsUser::class;
    public function builder() {
        //
        return ModelsUser::query();
    }

    public function columns() {
        //
        return [
            //Column::checkbox(),

            NumberColumn::name('id')->label('ID')->sortBy('id'),

            Column::name('name')->truncate()->label('Nome')->editable(),
  
            Column::name('email')->truncate()->label('Email')->editable(),
  
            DateColumn::name('created_at')->label('Registrado em'),
            
            
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('livewire.app.table.actions', ['id' => $id, 'name' => $name]);
            }),
            
            //Column::delete(),
        ];
    }
}