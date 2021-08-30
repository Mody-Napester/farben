<?php

// Get from json

function getFromJson($json , $lang){
    $data = json_decode($json, true);
    return (isset($data[$lang]))? $data[$lang] : '';
}

// Get path
function get_path($path){
    return base_path() . '/' . config('vars.public') . '/' . $path;
}

// Default language
function lang(){
    return app()->getLocale();
}

// Upload files
function upload_file($type, $file, $path){

    $results = [
        'status' => false,
        'filename' => null,
        'message' => null,
    ];

    $extention = strtolower($file->getClientOriginalExtension());

    if ($type == 'image'){
        $validExtentions = ['jpg', 'png'];
    }
    elseif ($type == 'text'){
        $validExtentions = ['txt', 'doc'];
    }

    if (in_array($extention, $validExtentions)) {

        $filename = time().rand(1000,9999).'.'.$extention;
        $destinationPath = get_path($path);

        $upload = $file->move($destinationPath, $filename);

        if ($upload) {
            // File Uploaded
            $results['status'] = true;
            $results['filename'] = $filename;
            $results['message'] = 'Uploaded Successfully';

            return $results;
        }else{
            // Error Uploading
            $results['message'] = 'Error Uploading';

            return $results;
        }

    }else{
        // File not valid
        $results['message'] = 'File not valid';

        return $results;
    }
}

