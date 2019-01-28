<?php

namespace App\Http\Controllers;
// use App\Mail\DemoEmail;
// use Illuminate\Support\Facades\Mail;
use App\Notifications\selectionDone;
 use App\Selected; 
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    use Notifiable;
    // $mail['message_link'] ="redirect link when user click button in mail message body";
    // $mail['mail_message'] = "Email message body";
    // $mail['greeting'] = "Greetings";
    // $mail['mail_subject'] =  "Email subject";
    // $mail['buttton_text'] =  "Button Text";
    // $mail['mail_footer'] = "Email Footer text";
    
    // Notification::send(Selected::all(), new selectionDone($mail));

    public function send()
    {
        // $objDemo = new \stdClass();
        // $objDemo->demo_one = 'Demo One Value';
        // $objDemo->demo_two = 'Demo Two Value';
        // $objDemo->sender = 'SenderUserName';
        // $objDemo->receiver = 'ReceiverUserName';
 
        // Mail::to(".com")->send(new DemoEmail($objDemo));
        Mail::send( ['text' => 'mail'], ['name' => 'Rhea'], function($message){
            // $message->attach('D:\Rhea\Pictures\aayan');
                $message->to('rheanaznin47@gmail.com', 'To Naznin')->subject('Test Email');
                
                $message->from('nazninhaque7622@gmail.com', 'Naznin');
        } );
    }
}
