<?php

namespace App\Http\Controllers\Employees;

use App\Employees\Employee;
use App\Departements\Departement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequests;
use App\Http\Requests\EmployeeUpdateRequests;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::all();

        return view('admin.employees.index')->with('employees',$employees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departements = Departement::all();

        return view('admin.employees.create')->with('departements',$departements);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequests $request, Employee $employee)
    {

        $employee = Employee::create($request->all());
        return redirect()->back()->with('success','Item created successfully!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {

        // $empl = Employee::where('id' $employee);
         return view('admin.employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

        $departements = Departement::all();
        return view('admin.employees.edit')->with(['employee'=>$employee,'departements'=>$departements]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequests $request, Employee $employee)
    {

        $employees = Employee::all();

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('employees', $employees);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {

        $employee->delete();
        return redirect()->route('employees.index')->with('success',' Employee Supprimé avec succès');

    }
}
