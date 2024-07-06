<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $full_name = '';

    public string $phone = '';

    public string $message = '';

    public string $email = '';

    public string $page = '';

    public function render()
    {
        return view('livewire.contact-form');
    }
}
