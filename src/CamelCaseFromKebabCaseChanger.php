<?php

namespace IvanP86\OtusComposerHomework;

class CamelCaseFromKebabCaseChanger{
    private $camelCase;
    public function setCamelCase($kebabCase)
    {
        $arr = explode("-", $kebabCase);
        $this->camelCase = $arr[0] . ucfirst($arr[1]);
    }

    public function getCamelCase()
    {
        return $this->camelCase;
    }
}
