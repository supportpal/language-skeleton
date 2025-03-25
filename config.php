<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Name (required)
    |--------------------------------------------------------------------------
    |
    | The name of your language pack, which will be displayed in the Languages
    | list in the operator area. Can be either a plain text name or a language
    | key to work with translations.
    |
    */

    'name' => ':locale_name',

    /*
    |--------------------------------------------------------------------------
    | Language Code (required)
    |--------------------------------------------------------------------------
    |
    | The code of your language pack, confirming to BCP 47 using a ISO_639-1
    | locale code and an optional ISO_3166-1 ALPHA-2 regional identifier. For
    | example, valid identifiers are: 'en', 'es', 'en-GB', 'en-US'.
    |
    */

    'code' => ':locale_code',

    /*
    |--------------------------------------------------------------------------
    | Language Text Direction (optional)
    |--------------------------------------------------------------------------
    |
    | The text direction of your language pack for the template, either 'ltr'
    | (left-to-right) or 'rtl' (right-to-left). Defaults to 'ltr'.
    |
    */

    'text_direction' => 'ltr',

    /*
    |--------------------------------------------------------------------------
    | Language URI (optional)
    |--------------------------------------------------------------------------
    |
    | The home page of the language pack - where you may store documentation
    | or general information about the language.
    |
    */

    'uri' => '',

    /*
    |--------------------------------------------------------------------------
    | Language Version (optional)
    |--------------------------------------------------------------------------
    |
    | The current version number of the language pack, such as 1.0 or 1.0.3.
    | Note that versions are compared using version_compare() e.g. 1.02 is
    | greater than 1.1.
    |
    */

    'version' => '1.0',

    /*
    |--------------------------------------------------------------------------
    | Language Author (optional)
    |--------------------------------------------------------------------------
    |
    | The name of the language pack  author. More than one author may be
    | listed as a string.
    |
    */

    'author' => ':author_name',

    /*
    |--------------------------------------------------------------------------
    | Language Author URI (optional)
    |--------------------------------------------------------------------------
    |
    | Optionally provide a link to the author's profile or contact page.
    |
    */

    'author_uri' => ':author_uri',

    /*
    |--------------------------------------------------------------------------
    | Language Icon (optional)
    |--------------------------------------------------------------------------
    |
    | An icon for the language pack. Set the full path to an image on the file
    | system.
    |
    */

    'icon' => '',

];
