<?php
declare(strict_types=1);

namespace App\Helpers\Traits;

class ParentRecursive
{
    private string $html = '';

    /**
     * @param $data
     * @param $id
     * @param $parentId
     * @param string $text
     * @param $currentId
     * @return string
     */
    public function getParentRecursiveWhereCurrentId($data, $id, $parentId, $currentId, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $id && $currentId != $value['id']) {
                if (!empty($parentId) && $parentId == $value['id']) {
                    $this->html .= "<option selected value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                } else {
                    $this->html .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                }
                $this->getParentRecursiveWhereCurrentId($data, $value['id'], $parentId, $currentId, $text . '----');
            }
        }

        return $this->html;
    }

    /**
     * @param $data
     * @param $id
     * @param string $text
     * @return string
     */
    public function getParentRecursive($data, $id, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $id) {
                $this->html .= "<p>" . $text . $value['name'] . "</p>";
                $this->getParentRecursive($data, $value['id'], $text . '----');
            }
        }

        return $this->html;
    }
}
