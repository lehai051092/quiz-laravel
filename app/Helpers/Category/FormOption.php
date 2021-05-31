<?php

namespace App\Helpers\Category;

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
            'menu_id' => $request->menu_id,
            'slug' => Str::slug($request->name)
        ];
    }
}
