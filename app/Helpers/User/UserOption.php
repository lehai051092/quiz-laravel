<?php

namespace App\Helpers\User;

use App\Helpers\OptionAbstract;

class UserOption extends OptionAbstract {

    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'image_path' => $request->image_path,
            'status' => $request->status,
            'group' => $request->group,
        ];
    }
}
