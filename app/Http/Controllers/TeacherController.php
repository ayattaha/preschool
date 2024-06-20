<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

use App\Traits\UploadFile;

class TeacherController extends Controller
{
    use UploadFile; // Assuming you have a trait for file uploads

    /**
     * Display a listing of the resource.
     */
    
    /**
     * Show the form for creating a new resource.
     */
    public function showAllTeachers()
    {
        $teachers=Teacher::get();
        return view('admin.teacherAdmin',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->errMsg();
        $data=$request->validate([
            'teacherName'=>'required|max:100|min:11',
            'phone'=>'required|min:11',
            'email'=>'required|email:rfc',
            'teacherSpeciality'=>'required',
            'image'=>'required',
            'facebook'=>'required',
            'tweeter'=>'required',
            'instgrame'=>'required'
        ], $messages);
       
        $fileName = $this->uploadFile($request->image, 'assets/admin/images/teacher');
        $data['image']= $fileName;
       
        $data['active']=isset($request->active);
        teacher::create($data);
        return redirect()->route('showAllTeachers');
    }
//error Message
public function errMsg(){
   return [
        
    'teacherName.required' => 'Teacher Name is required.',
    'teacherName.min' => 'Teacher Name must be at least 11 characters.',
    'phone.required' => 'Phone number is required.',
    'phone.min' => 'Phone number must be at least 11 characters.',
    'email.required' => 'Email is required.',
    'email.email' => 'Invalid email format.',
    'teacherSpeciality.required' => 'Teacher Speciality is required.',
    'image.required' => 'Image is required.',
    'facebook.required' => 'Facebook is required.',
    'tweeter.required' => 'Twitter is required.',
    'instgrame.required' => 'Instagram is required.'  ];
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
