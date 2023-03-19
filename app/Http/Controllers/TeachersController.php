<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Language;
use App\Models\Teacher;
use File;

class TeachersController extends Controller
{
    public function index()
    {
        return view('admin.teachers.index');
    }

    public function addTeacher()
    {
        $countryList = Country::all();
        $languageList = Language::all();
        return view('admin.teachers.addTeacher', ['countryList' => $countryList, 'languageList' => $languageList]);
    }

    public function addNewTeacher(Request $request)
    {
        try {
            $teacher_data = $request->input();
            $language_detail = [];
            foreach($request->file() as $key => $value)
            {
                if(is_array($value)) {
                    $multiFileArray = [];
                    foreach ($value as $K => $V) {
                        array_push($multiFileArray, $this->fileUpload($V));
                    }
                    $teacher_data[$key] = json_encode($multiFileArray);
                } else {
                    $teacher_data[$key] = $this->fileUpload($value);
                }
            }

            foreach ($teacher_data['language'] as $key => $value) {

                $virtual = (object) array(
                    'speaking' => $teacher_data['speaking'][$key],
                    'reading'  => $teacher_data['reading'][$key],
                    'writing'  => $teacher_data['writing'][$key],
                );
                array_push($language_detail, $virtual);
            }
            unset($teacher_data['speaking']);
            unset($teacher_data['reading']);
            unset($teacher_data['writing']);
            unset($teacher_data['language']);
            $teacher_data['language_detail'] = json_encode($language_detail);

            try {
                Teacher::create($teacher_data);
                return response()->json([
                    'status' => true,
                    'msg' => 'Teacher data created successfully'
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'msg' => $e
                ]);
            }
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }

    public function fileUpload($file) 
    {
        $filename = explode(".", $file->getClientOriginalName())[0] . "_" . time() . "." . $file->getClientOriginalExtension();
        $location = 'uploads/teacher_detail';
        $file->move($location, $filename);
        return $location . "/" . $filename;
    }

}
