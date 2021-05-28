<?php

namespace App\Helpers;

use App\Helpers\Traits\StorageImageTrait;

abstract class OptionAbstract
{
    /**
     * @var StorageImageTrait
     */
    protected StorageImageTrait $storageImageTrait;

    /**
     * OptionAbstract constructor.
     * @param StorageImageTrait $storageImageTrait
     */
    public function __construct(
        StorageImageTrait $storageImageTrait
    ) {
        $this->storageImageTrait = $storageImageTrait;
    }

    abstract public function optionArray($request);
}
