<?php

namespace App\View\Components;

use App\Models\User;
use App\Models\Officer;
use App\Models\Payment;
use Illuminate\View\Component;

class dmain extends Component
{


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($background = null)
    {
        $this->background = $background;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $students = User::all();
        $payments = Payment::all();
        $officers = Officer::all();
        $payments = Payment::all();
        $recentUsers = User::latest()->limit(5)->get();
        $totalStudents = count($students);
        $totalPayments = count($payments);
        $totalOfficers = count($officers);

        return view('components.dmain' , compact('totalStudents', 'totalPayments' , 'totalOfficers','recentUsers'));
    }
}
