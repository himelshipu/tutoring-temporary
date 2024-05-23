<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CareerJob;

class CareerJobController extends Controller
{
    public function index()
    {
        $jobs = CareerJob::latest()->paginate(10);;
        return view('admin.job.index',compact('jobs'));
    }

    public function create()
    {
      return view("admin.job.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'position'    => 'required',
            'end_date'    => 'required',
            'description' => 'required',
            'status'      => 'required',
        ]);

        CareerJob::create($request->all());
        return redirect(route('career-jobs.index'))->with('success','Data store successfully');
    }

    public function edit(CareerJob $careerJob)
    {
      return view("admin.job.edit",compact('careerJob'));
    }

    public function update(Request $request, CareerJob $careerJob)
    {
        $request->validate([
            'title'       => 'required',
            'position'    => 'required',
            'end_date'    => 'required',
            'description' => 'required',
            'status'      => 'required',
        ]);

        $careerJob->update($request->all());
        return redirect(route('career-jobs.index'))->with('success','Data updated successfully');
    }

    public function destroy(CareerJob $careerJob)
    {
        $careerJob->delete();
        return redirect()
            ->back()
            ->withSuccess('Data deleted successfully');
    }

}
