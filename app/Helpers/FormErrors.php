<?php

namespace App\Helpers;

class FormErrors
{

    public static function errors_for($attribute, $errors)
    {
        return $errors->first($attribute, '<span class="error">:message</span>');
    }

}