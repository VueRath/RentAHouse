<?php

namespace App\Livewire;

use Livewire\Component;

class ParentHolder extends Component
{
    public $componentToRender = null;
    public function render()
    {
        return view('livewire.parent-holder');
    }
    public function renderBlogsCard()
    {
        $this->componentToRender = 'blog-cards';
    }
    public function renderUserTable()
    {
        $this->componentToRender = 'usertable';
    }
}
