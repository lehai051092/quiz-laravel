<?php

namespace App\Helpers\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StorageImageTrait
{
    /**
     * @param $request
     * @param $fieldName
     * @param $folderName
     * @return array
     */
    public function storageTrailUpload($request, $fieldName, $folderName): array
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);

            return [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
        }

        return [];
    }
}
