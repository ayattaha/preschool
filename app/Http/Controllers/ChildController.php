<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Traits\UploadFile;

class ChildController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function showchilds()
    {
        $children=Child::get();
        return view('admin.showchilds',compact('children'));
    }

    public function addchild()
    {
        $title="Add child";
        return view('admin.addchild',compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function insertChild(Request $request)
    {
        $messages=$this->errMsg();
        $data= $request->validate([
            'childName' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'parentphone' => 'required|string',
            'parentemail' => 'required|email',
            'address' => 'required|string',
            'active' => 'boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $messages);
       
       
        $fileName = $this->uploadFile($request->image,'assets/admin/images/child');
        $data['image']= $fileName;

        $data['active']=isset($request->active);
        child::create($data);
        
        return redirect()->route('showchilds');
    }
//error Message
public function errMsg(){
   return [
        
    'childName.required' => 'Child Name is required.',
            'childName.string' => 'Child Name must be a string.',
            'childName.max' => 'Child Name may not be greater than :max characters.',
            'birthdate.required' => 'Child Birthdate is required.',
            'parentphone.required' => 'Parent Phone number is required.',
            'parentphone.string' => 'Parent Phone number must be a string.',
            'parentphone.max' => 'Parent Phone number may not be greater than :max characters.',
            'parentemail.email' => 'Invalid email format for Parent Email.',
            'address.string' => 'Address must be a string.',
            'active.boolean' => 'Active must be true or false.',
            'image.required' => 'Image is required.',];

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
