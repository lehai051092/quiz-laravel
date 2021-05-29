<?php

namespace App\Helpers\Menu;

use App\Helpers\OptionAbstract;
use Illuminate\Support\Str;

class FormOption extends OptionAbstract
{
    /**
     * @param $request
     * @return array
     */
    public function optionArray($request): array
    {
        return [
            'name' => $request->name,
            'status' => $request->status,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ];
    }
}
