<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AfricasTalkingGatewayController;
use Illuminate\Http\Request;
use App\Sms;
class SmsController extends Controller
{
    //

    public function api_key(){


        $username   =  "sandbox";
        $apikey     =  "67b79179d23bca47cc45f91899495ad461503ba99ae7eda71bb6bf8a3e8d2bfb";

    }


    public function send_user_sms($name, $recipie, $order_number, $total){


        $recipients = $recipie;
        $message    = "Dear $name, Your order have been recieved kindly pay sh $total to paypill 101010. Use $order_number as your account number.
        For any queries about your order call 0718360109 with refference number $order_number. We are jamiske the best online shop.";

                        $username   =  "jamis";
        $apikey     =  "f4722ed6140647dd19b7cd220e182361c255338c4555c641833ffff3ce10d598";

        $user_gateway    = new AfricasTalkingGatewayController($username, $apikey);
        try
        {

          $results = $user_gateway->sendMessage($recipients, $message);

          foreach($results as $result) {

            $sms = new sms();
            $sms->number = $result->number;
            $sms->cost = $result->cost;
            $sms->status = $result->status;
            $sms->msg =      $message ;

                $sms->save();
        }
    }
        catch ( AfricasTalkingGatewayController $e )
        {
          echo "Encountered an error while sending: ".$e->getMessage();
            $sms = new sms();

            $sms->error_msg = $e->getMessage();

                $sms->save();
        }

    }

    public function send_office_sms($recipie, $message){


    }
}
