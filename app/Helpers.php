<?php



function TagList()
{
    return [

        'input',
        'label',


    ];
}

function ElementsList()
{
    return [
        'input' => [
            'text',
            'password',
            'email',
            'tel',
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