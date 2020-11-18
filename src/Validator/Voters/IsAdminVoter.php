<?php

namespace App\Validator\Voters;

use App\Entity\Client;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class IsAdminVoter extends Voter
{
    public const IS_ADMIN = 'admin_client';

    protected function supports(string $attribute, $subject)
    {
        if (!in_array($attribute, [self::IS_ADMIN])) {
            return false;
        }
        return true;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token)
    {
        $client = $token->getUser();

        if (!$client instanceof Client) {
            return false;
        }

        if (!$client->isAdmin()) {
            return false;
        }

        return true;
    }
}
