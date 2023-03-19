<?php

namespace App\Http\Controllers;

use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use ZipArchive;

class StudentController extends Controller
{
    public function index()
    {
        $studentList = User::all()->where('username', 'student')->where('is_left', '0')->sortDesc();
        return view('admin.students.index', ['lists' => $studentList]);
    }

    public function person($id)
    {
        $personData = User::where('id', $id)->first();
        return view('admin.students.person', ['personData' => $personData, 'ID' => $id]);
    }

    public function profile($id)
    {

        $personData = User::where('id', $id)->first();
        return view('admin.students.profile', ['personData' => $personData]);
    }

    public function medicalProfile($id)
    {

        $personData = User::where('id', $id)->first();
        return view('admin.students.medicalProfile', ['personData' => $personData]);
    }

    public function studentArchive(Request $request)
    {
        $ids = $request->input('detail');
        foreach ($ids as $key => $value) {
            User::where('id', $value)->update(['is_left' => true]);
        }
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function studentDetailDownload(Request $request)
    {
        $ids = $request->input('detail');
        foreach ($ids as $key => $value) {
            $studentDetail[] = User::select('id', 'firstName', 'lastName', 'state', 'phone')
                ->where('id', $value)->get();
        }
        $location = 'uploads/';

        $name = 'students-' . date('Y-m-d-h-i-s') . '.csv';
        $filename = public_path($location . $name);
        $list[] = ['ID', 'FirstName', 'LastName', 'State', 'Phone'];

        foreach ($studentDetail as $student) {
            $list[] = [$student[0]->id, $student[0]->firstName, $student[0]->lastName, $student[0]->state, $student[0]->phone];
        }

        $fp = fopen($filename, 'w');
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
        header('Content-type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=$filename");

        if (file_get_contents($filename)) {
            $zip = new ZipArchive();
            $zip_name = 'students-' . date('Y-m-d-h-i-s') . '.zip';
            $zip->open($location . $zip_name, ZIPARCHIVE::CREATE);
            $zip->addFile($location . $name);
            $zip->close();

            return response()->json([
                'status' => 'success',
                'name' => $name,
                'zipName' => $zip_name,
            ]);
        } else {
            return response()->json([
                'status' => 'failure',
            ]);
        }

    }

    public function studentCopyPaste(Request $request)
    {
        $bulkQuery = array();
        $bulkData = $request->input('bulk');
        $bulk_array = explode('\n', $bulkData);
        foreach ($bulk_array as $key => $bulk) {
            $values = explode(' ', $bulk);
            if (count($values) != 5) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'Please enter the correct values!',
                ]);
            }
            $init = [
                'email' => $values[0],
                'firstName' => $values[1],
                'lastName' => $values[2],
                'phone' => $values[3],
                'state' => $values[4],
            ];
            array_push($bulkQuery, $init);
        }
        User::insert($bulkQuery);
        return response()->json([
            'status' => 'success',
            'msg' => 'Added data successful',
        ]);

    }

    public function studentProfileEdit(Request $request)
    {
        $id = $request->input("id");
        $firstName = $request->input("firstName");
        $lastName = $request->input("lastName");
        $address = $request->input("address");
        $photograph = $request->input("photograph");
        $birthday = $request->input("birthday");
        $created_at = date("Y-m-d H:i:s", strtotime($request->input("created_at")));

        try {
            User::whereId($id)->update([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'address' => $address,
                'photograph' => $photograph,
                'birthday' => $birthday,
                'created_at' => $created_at,
            ]);
            return response()->json([
                'status' => 'success',
                'msg' => 'Updated data successful',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'success',
                'msg' => $e,
            ]);
        }
    }

    public function uploadContent(Request $request)
    {
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();

            $this->checkUploadedFileProperties($extension, $fileSize);
            $location = 'uploads';

            $file->move($location, $filename);
            $filepath = public_path($location . '/' . $filename);
            $file = fopen($filepath, 'r');
            $importData_arr = array();

            $i = 0;
            while (($filedata = fgetcsv($file, 1000, ',')) !== false) {
                $num = count($filedata);
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file);
            //Close after reading

            foreach ($importData_arr as $importData) {
                try {
                    User::create([
                        'firstName' => $importData[0],
                        'lastName' => $importData[1],
                        'state' => $importData[2],
                        'phone' => $importData[3],
                    ]);
                } catch (\Exception$e) {
                    echo $e;
                }
            }
            unlink($filepath);
            return back();
        } else {
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array(
            'csv',
            'xlsx',
        );
        $maxFileSize = 2097152;

        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE);
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE);
        }
    }
}
