<?php

namespace App\Helpers\User;

use App\Helpers\ConstVariable;
use App\Helpers\OptionAbstract;

class Credentials extends OptionAbstract {

    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        return [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => ConstVariable::ACTIVE_STATUS
        ];
    }
}
