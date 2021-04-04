<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Document;

class DocumentComponent extends Component
{

    public function download($id)
    {
        $document=Document::find($id);
        $document->downloaded=$document->downloaded+1;
        $document->save();
    }
    public function render()
    {
        $documents=Document::withTranslation(\App::getLocale())->get();
        return view('livewire.document-component', ['documents'=>$documents]);
    }
}
