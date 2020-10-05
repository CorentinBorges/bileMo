<?php


namespace App\DTO\Users\UpdateUser;


use Symfony\Component\Validator\Constraints as Assert;

class UpdateUserFromRequestInput
{
    //todo: fix all unique properties
    /**
     * @var string
     *
     * @Assert\Length(max="64", maxMessage="the full name can't exceed 64 characters")
     * @Assert\NotBlank(message="You have to enter youre full name")
     * @Assert\Type(type="string", message="Full name has to be string type")
     */
    public $fullName;

    /**
     * @var string
     * @Assert\Length (max="50", maxMessage="the full username can't exceed 50 characters")
     * @Assert\Type(type="string", message="Username has to be string type")
     * @Assert\NotBlank(message="You have to enter a userame")
     */
    public $username;

    /**
     * @var string
     * @Assert\Email(message="Email not valid")
     * @Assert\Type(type="string", message="email has to be string type")
     * @Assert\NotBlank(message="You have to enter an email")
     */
    public $email;

    /**
     * @var string
     * @Assert\Length (max=64, maxMessage="The client name can't exceed 64 characters")
     * @Assert\Type(type="string", message="Client name has to be string type")
     * @Assert\NotBlank(message="You have to enter a client Name")
     */
    public $clientName;

}