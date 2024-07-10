<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    #[Assert\NotBlank]
    #[Assert\Length(
        min:2,
        max:40,
        minMessage:"Votre nom ne peut pas comporter moins de {{ limit }} caractères",
        maxMessage:"Votre nom est trop long , max {{ limit }}",
    )]
    private ?string $lastName;

    #[Assert\NotBlank]
    #[Assert\Length(
        min:2,
        max:40,
        minMessage:"Votre prénom ne peut pas comporter moins de {{ limit }} caractères",
        maxMessage:"Votre prénom est trop long , max {{ limit }}",
    )]
    private ?string $firstName;

    #[Assert\NotBlank]
    #[Assert\Email(
        message:"L'email que vous avez rentré {{ value }} n'est pas valable"
    )]
    private ?string $email;

    #[Assert\NotBlank]
    #[Assert\Length(
        min:10,
        max:500,
        minMessage:"Le message ne peut pas comporter moins de {{ limit }} caractères",
        maxMessage:"Le message est trop long , max {{ limit }}",
    )]
    private ?string $message;

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this->firstName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this->email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this->message;
    }
}