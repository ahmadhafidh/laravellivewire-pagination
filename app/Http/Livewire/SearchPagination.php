<?php
 
namespace App\Http\Livewire;
 
use Livewire\Component;
use Livewire\WithPagination;
use App\Employee;
 
class SearchPagination extends Component
{
    use WithPagination;
    public $searchTerm;
 
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
 
        return view('livewire.search-pagination',[
            'employees' => Employee::where('name','like', $searchTerm)->paginate(10)
        ]);
    }
}