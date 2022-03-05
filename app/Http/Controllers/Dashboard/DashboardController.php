<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Officer;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $students = Student::all();
        $payments = Payment::all();
        $officers = Officer::all();
        $payments = Payment::all();
        $recentUsers = User::latest()->limit(5)->get();
        $totalStudents = count($students);
        $totalPayments = count($payments);
        $totalOfficers = count($officers);
        return view('dashboard.index' , compact('totalStudents', 'totalPayments' , 'totalOfficers','recentUsers'));
    }
}
