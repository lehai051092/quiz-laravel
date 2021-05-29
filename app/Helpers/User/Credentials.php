<?php

namespace App\Helpers\User;

use App\Helpers\ConstVariable;
use App\Helpers\OptionAbstract;
use Illuminate\Support\Facades\Hash;

class Credentials extends OptionAbstract {

    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'status' => ConstVariable::ENABLE_STATUS
        ];
    }
}
