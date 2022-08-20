<?php



function TagList()
{
    return [

        'input ورودی ',
        'select لیست کشویی',


    ];
}

function ElementsList()
{
    return [
        'input' => [

            'button',
            'checkbox',
            'color',
            'date',
            'datetime-local',
            'email',
            'file',
            'hidden',
            'image',
            'month',
            'number',
            'password',
            'radio',
            'range',
            'reset',
            'search',
            'submit',
            'tel',
            'text',
            'time',
            'url',
            'week',

        ],
    ];
}


function tags($tagname)
{
    switch ($tagname) {
        case 'input':
            # code...
            break;

        default:
            # code...
            break;
    }
}