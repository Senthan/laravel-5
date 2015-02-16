<?php namespace App\Http\Controllers;

use App\Http\Requests\StaffStoreRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaffUpdateRequest;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller {

    protected $staff;

    public function __construct(Staff $staff){
        $this->staff =$staff;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $staffs = $this->staff->all();
        return view('staff.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StaffStoreRequest $request)
    {
        $staff = $this -> staff;
        $staff->name = $request -> name;
        $staff->phone = $request -> phone;
        $staff->save();
        return redirect() -> route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $staff= $this->staff->find($id);
        return view('staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(StaffUpdateRequest $request,$id)
    {
        $staff = $this -> staff->find($id);
        $staff->name = $request -> name;
        $staff->phone = $request -> phone;
        $staff->save();
        return redirect()->route('staff.index');
    }

    public function delete($id)
    {
        $staff= $this->staff->find($id);
        return view('staff.delete',compact('staff'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $staff= $this->staff->find($id);
        $staff->delete();
    }

}
