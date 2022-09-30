<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use ZipArchive;
use Image;

class ZipController extends Controller
{
    public function zipFile(Request $request)
    {
        $file = new Filesystem;
        $file->cleanDirectory('item_img');
        $fileName = 'myNewFile.zip';
        if (file_exists($fileName)) {
            unlink($fileName);
        }
        $files = $request->file('myfile');
        foreach ($files as $file) {
            
            $imageDimensions = getimagesize($file);
            $width = $imageDimensions[0];
            $height = $imageDimensions[1];
            $new_width = $imageDimensions[0] * 0.7;
            $new_height = ceil($height * ($new_width / $width));

            $name = $file->getClientOriginalName();
            $t = time() . $name;
            $img = explode(".", $t);
            $path = public_path('item_img');
            // $file->move(public_path('item_img'), $t);

            $imgx = Image::make($file->getRealPath());
            $imgx->resize($new_width, $new_height, function ($constraint) {
            $constraint->aspectRatio();
            })->save($path.'/'.$t);
        }
        // return response()->json(['success'=>'File Uploaded Successfully']);
        return redirect()->back()->with('message','File Select Successfully...');
    }


    public function getdownload()
    {
        $zip = new ZipArchive;
        $fileName = 'myNewFile.zip';
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $filess = File::files(public_path('item_img'));

            foreach ($filess as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
         
            $zip->close();
        }
        return response()->download(public_path($fileName));
    }
}
