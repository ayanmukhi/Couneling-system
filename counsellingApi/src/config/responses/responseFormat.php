<?php

namespace src\config\responses;

use src\config\connection as dbconnectns;

class userResponses {

    //return the proper login response format
    function loginresponse($result) {
        
        $jwt = new \src\config\jwt();

        //extracting the id and role from the record.
        $id = $result[0]->_impl->_fields['_kp_Id_n'][0];
        $role = $result[0]->_impl->_fields['Role_t'][0];
        $name = $result[0]->_impl->_fields['Name_t'][0];

        //generating the token
        $token = $jwt->jwttokenencryption($id, $role, $name);

        return array('token'=>$token); 
    }

    function getActivityRes($result) {
        return array(
            'activities' => $result->_impl->_fields['activities'][0]
        );
    }

    //return the proper get response format
    function getresponse($result) {
        
        $allBookings = [];
        $mainId = $result->_impl->_fields['_kp_Id_n'][0];
        $role = $result->_impl->_fields['Role_t'][0];
        $dob = "";

        if ( $result->_impl->_fields['Dob_d'][0] != "" ) {
            $dob = date("Y-m-d", strtotime($result->_impl->_fields['Dob_d'][0]));
        }


        if( $role == "counselor") {
            

            $Availability = [];

            $availabilityDetails = \availability\apiClass::getCounselorAvailabilityDetails($mainId);
            
            
            if( $availabilityDetails != null) {
                foreach ($availabilityDetails as $details) {

                    $id = $details->_impl->_fields['_kp_AvailabilityId_n'][0];
                    $bookings = \bookings\apiClass::getCounselorBookings($id, true);
                    
                    
                    if( $bookings !=  null ) {

                        //structuring all the client dates
                        array_push($allBookings, array(
                            'SeekerId' => $bookings->_impl->_fields['_kf_Id_n'][0],
                            'Date' => $bookings->_impl->_fields['Date_d'][0],
                            'AvailabilityId' => $bookings->_impl->_fields['_kf_AvailabilityId_n'][0],
                               
                        ));

                    }
                    $day = explode("\n", $details->_impl->_fields['Day_t'][0]);
                    if( count($day) > 1 ) {
                        $day = array_slice( $day, 0 , count($day) -1 );
                    }
                    



                    array_push($Availability, array(
                        'Id' => $details->_impl->_fields['_kp_AvailabilityId_n'][0],
                        'Status'=>$details->_impl->_fields['Status_t'][0],
                        'Time'=>$details->_impl->_fields['Time_t'][0],
                        'Day'=> $day,
                        'Type'=>$details->_impl->_fields['Type_t'][0],
                        'Location'=>$details->_impl->_fields['Location_t'][0],
                        'Rating_t'=>$details->_impl->_fields['Rating_n'][0]
                    ));
                }
            } 
            
            
            
            return array(
                'id' => $mainId,
                'name' => $result->_impl->_fields['Name_t'][0],
                'gender' => $result->_impl->_fields['Gender_t'][0],
                'dob' => $dob,
                'username' => $result->_impl->_fields['_ka_Username_t'][0],
                'password' => $result->_impl->_fields['Password_t'][0],
                'role' => $role,
                'image' => $result->_impl->_fields['ImageFileRef_t'][0],
                'contact' => null,
                'availability' => $Availability,
                'bookings' => $allBookings
            );
        }
        else {
            $appointment = \bookings\apiClass::getCounselorBookings($mainId, false);
            
            if( $appointment != null ) {
                //structuring all appoinments of the seeker
                foreach($appointment as $bookings) {
                    array_push($allBookings, array(
                        'SeekerId' => $bookings->_impl->_fields['_kf_Id_n'][0],
                        'Date' => $bookings->_impl->_fields['Date_d'][0],
                        'AvailabilityId' => $bookings->_impl->_fields['_kf_AvailabilityId_n'][0],
                        'BookingId' => $bookings->_impl->_fields['_kp_BookingId_n'][0], 
                        'Rating' => $bookings->_impl->_fields['Rating_t'][0], 
                    ));
                }
            }

            

            return array(
                'id' => $mainId,
                'name' => $result->_impl->_fields['Name_t'][0],
                'gender' => $result->_impl->_fields['Gender_t'][0],
                'dob' => $dob,
                'username' => $result->_impl->_fields['_ka_Username_t'][0],
                'password' => $result->_impl->_fields['Password_t'][0],
                'role' => $role,
                'image' => $result->_impl->_fields['ImageFileRef_t'][0],
                'contact' => null,
                'bookings' => $allBookings
            );
        }
        
    }
 
    // function to get response format for all records
    function getAllRecords($result) {
        
        //database connection
        $dbobj = new dbconnectns\dbconnection();
        $fm = $dbobj->connect();
        

        $records=[];
        $counselorData=[];

        //looping through each records
        foreach ($result as $rec) {
            $temp = userResponses::getresponse($rec);
            array_push($records, $temp);
            
        }

        return $records;
    }


    //function to for insert new user response format
    function insertUser($vars) {

        //changing angular date format to FileMaker date format
        $dob = date("m/d/Y", strtotime($vars->dob));

        //creating the required response format
        $student = array(
            'Name_t' => $vars->name,
            'Dob_d' => $dob,
            'Gender_t' => $vars->gender,
            '_ka_Username_t' => $vars->username,
            'Password_t' => $vars->password,
            'Image_t' => $vars->image
        );
        return $student;
    }    
    
}