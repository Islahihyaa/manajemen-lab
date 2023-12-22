<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookSI()
    {
        return view('admin.book-si');
    }

    public function bookDSC()
    {
        return view('admin.book-dsc');
    }

    public function bookTI()
    {
        return view('admin.book-ti');
    }

    public function bookhistory()
    {
        $bookinghistory = Loan::with('user')
        ->orderBy('updated_at', 'desc')
        ->where('status', '!=', 'PENDING')
        ->get();
        return view('admin.dashboard', ['book_history' => $bookinghistory]);
    }

    public function delete($id)
    {
        $deletehistory = Loan::find($id);
        $deletehistory->delete();

        Session::flash('status','Data Deleted Succesfully');
        return redirect('dashboard');
    }


}
