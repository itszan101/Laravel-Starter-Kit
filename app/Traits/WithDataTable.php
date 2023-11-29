<?php

namespace App\Traits;
use Illuminate\Support\Facades\Auth;

trait WithDataTable {
    
    public function get_pagination_data ()
    {
        switch ($this->name) {
            case 'user':
                if (Auth::user()->is_admin) {
                    $users = $this->model::search($this->search)
                        ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                        ->select('users.*')
                        ->paginate($this->perPage);
                } else {
                    $users = $this->model::where('id', '=', auth()->user()->id)->get();
                }


                return [
                    "view" => 'livewire.table.user',
                    "users" => $users,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('user.new'),
                            'create_new_text' => 'Buat User Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;
        // switch ($this->name) {
        //     case 'user':
        //         $users = $this->model::search($this->search)
        //             ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
        //             ->paginate($this->perPage);

        //         return [
        //             "view" => 'livewire.table.user',
        //             "users" => $users,
        //             "data" => array_to_object([
        //                 'href' => [
        //                     'create_new' => route('user.new'),
        //                     'create_new_text' => 'Buat User Baru',
        //                     'export' => '#',
        //                     'export_text' => 'Export'
        //                 ]
        //             ])
        //         ];
        //         break;
        }
    }
}