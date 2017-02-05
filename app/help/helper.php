<?php

function getSetting($settingname='sitename'){

    return \App\siteSetting::where('nameSiteSetting' , $settingname)->get()[0]->value;

}

function bu_type(){

    $array=[
      'vilaa',
        'sh2aa',
        'shaleh'


    ];

    return $array;
}