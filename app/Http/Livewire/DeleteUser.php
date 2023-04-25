<?php

namespace App\Http\Livewire;;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public $userId;
    public function mount(int $id)
    {
        $this->userId = $id;
    }
    public function delete()
    {
        User::destroy('id', $this->userId);
        $this->dispatchBrowserEvent('succsess', ['message' => 'updated sucssefully']);
        return redirect("/home");
    }
    public function render()
    {
        return view('livewire.delete-user');
    }
}
