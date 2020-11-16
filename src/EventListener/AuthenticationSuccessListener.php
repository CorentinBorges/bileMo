<?php

namespace App\EventListener;

use App\Entity\Client;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;

class AuthenticationSuccessListener
{

    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        /**
         * @var Client $client
         */
        $client = $event->getUser();

        if (!$client instanceof Client) {
            return;
        }

        $data['client'] = array(
            'id' => $client->getid(),
        );

        $event->setData($data);
    }
}
