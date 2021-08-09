<?php

function validate($data, $rules, $messages = array())
{
    $lang = defined('ICL_LANGUAGE_CODE') ? substr(ICL_LANGUAGE_CODE, 0, 2) : getenv('LANG', 'es');

    $loader = new \Illuminate\Translation\FileLoader(new \Illuminate\Filesystem\Filesystem(), __DIR__ . '/../lang');
    $translator = new \Illuminate\Translation\Translator($loader, $lang);
    $validation = new \Illuminate\Validation\Factory($translator, new \Illuminate\Container\Container());

    return $validation->make($data, $rules, $messages);
}
