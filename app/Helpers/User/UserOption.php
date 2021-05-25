<?php

namespace App\Helpers\User;

use App\Helpers\OptionAbstract;
use App\Helpers\Traits\StorageImageTrait;

class UserOption extends OptionAbstract {

    private $storageImageTrait;

    public function __construct(
        StorageImageTrait $storageImageTrait
    ) {
        $this->storageImageTrait = $storageImageTrait;
    }

    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        $data = $this->storageImageTrait->storageTrailUpload($request, 'image_path', 'user');

        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image_path' => ($data) ? $data['file_path'] : '',
            'status' => $request->status,
            'group' => $request->group,
        ];
    }
}
