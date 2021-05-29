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
    public function getParentRecursive($data, $id, $parentId, $currentId, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $id && $currentId != $value['id']) {
                if (isset($parentId) && $parentId == $value['id']) {
                    $this->html .= "<option selected value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                } else {
                    $this->html .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                }
                $this->getParentRecursive($data, $value['id'], $parentId, $currentId, $text . '----');
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
    public function getParent($data, $id, $text = ''): string
    {
        foreach ($data as $key => $value) {
            if ($value['menu_parent_id'] == $id) {
                $this->html .= "<p>" . $text . $value['menu_name'] . "</p>";
                $this->getMenusParent($data, $value['menu_id'], $text . '----');
            }
        }

        return $this->html;
    }
}
