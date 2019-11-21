<?php


class Common
{
    public function register($connection,$firstName,$lastName,$email,$contact,$shopName,$shopAddress,$pincode,$paytmUpi,
                             $shopLocation,$shopImg,$state,$password) {
        $query = "INSERT INTO iv_vendor SET  firstName='$firstName',lastName='$lastName',email='$email',contact='$contact',
                  password='$password'   ";
        $result = $connection->query($query) or  die("Error in registration query".$connection->error);

        $vendorId = $connection->insert_id;

        // save shops

        $query2 = "INSERT INTO iv_shops SET name='$shopName',address='$shopAddress',pincode='$pincode',upi='$paytmUpi',
        location='$shopLocation',state='$state',image='$shopImg',vendorId='$vendorId'  ";

        $result2 = $connection->query($query2) or  die("Error in registration2 query".$connection->error);

        return $result2;



    }
}
