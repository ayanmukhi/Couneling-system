<?php

namespace src\validations\contact;

class validate
{
    //function to validate the data in request
    public function valContactData($vars, $request, $response) {

        $streetName = $vars->streetName;
        if( strlen($streetName) == 0 ) {
            return "street name is not valid";
        }

        $district = $vars->district;
        if( strlen($district) == 0 ) {
            return "district name is not valid";
        } 


        $pin = $vars->pin;
        if( preg_match("/[0-9]{6}/", $pin) == false ) {
            return "pin is not correct";
        }


        $state = $vars->state;
        if( strlen($state) == 0) {
            return "state is not valid";
        }


        $phone = $vars->phone;
        if( preg_match("/[0-9]{8,13}/", $phone) == false ) {
            
            return "phone is not correct";
        }
        

        return "no error";
    }
}