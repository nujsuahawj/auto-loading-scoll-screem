<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class LoadMoreUserList extends Component
{
    public $perPage = 25;
    protected $listeners = [
        // 'load-more' => 'loadMore'
    ];
    public function loadMore()
    {
        $this->perPage = $this->perPage + 10;
    }

    public function render()
    {
        $users = User::latest()->paginate($this->perPage);
        //$this->emit('userStore');
        return view('livewire.load-more-user-list',['users' => $users]);
    }
}