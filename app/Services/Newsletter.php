<?php
namespace App\Services;
use MailchimpMarketing\ApiClient;
class Newsletter
{
   public function __construct(protected ApiClient $client)
   {
       //
   } 

   public function subscribe(string $email, string $list = null)
   {
        $list ??= config('services.mailchimp.lists.subscribers');
        
        return $this->client()->lists->addListMember($list, 
        [ 
        'email_address' => $email,
        'status' => 'subscribed'
        ]);
    }
    protected function client()
    {
        $mailchimp = new ApiClient();

        return $mailchimp ->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
     }


       /* 

       return $this->client->lists->addListMember($list, [
           'email_address' => $email,
           'status' => 'subscribed' */
   
   }



    //if list is null then make it equal to what's in the right side 
    //if something it is pass in the parameter then nothing happens
?>