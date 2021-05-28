<?php

namespace App\Helpers\User;

use App\Helpers\OptionAbstract;
use Illuminate\Support\Facades\Storage;

class EditFormOption extends OptionAbstract
{
    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        if ($request->image_path_new) {
            $pathImageOld = str_replace('/storage', '', $request->image_path_old);
            Storage::delete('/public' . $pathImageOld);
            $data = $this->storageImageTrait->storageTrailUpload($request, 'image_path_new', 'user');
            $data = $data['file_path'];
        } else if (!$request->image_path_new && $request->delete_image) {
            $data = $request->image_path_new;
        } else {
            $data = $request->image_path_old;
        }

        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'image_path' => $data,
            'status' => $request->status,
            'group' => $request->group,
        ];
    }
}
