<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    
    public $name;
    public $phone;
    public $email;
    public $body;
    public $terms=false;
    
    public function changeTerm()
    {
        $this->terms=true;
    }


    public function sendMessage()
    {
      
        $message=<<<TEXT
        Murojat qoldirildi!

        Murojat turi: Aloqa
        Telefon: {$this->phone}
        Ismi: {$this->name}
        Pochta manzili: {$this->email}
        Murojat matni: {$this->body}
TEXT;
        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001194799621',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
        $this->dispatchBrowserEvent('messageSent', []);
        $this->name='';
        $this->phone='';
        $this->email='';
        $this->body='';
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
