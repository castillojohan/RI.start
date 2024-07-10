<?php 

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(string $to, string $subject, string $content)
    {
        $email = (new Email())
            ->from('castillojohan@orange.fr')
            ->to($to)
            ->subject($subject)
            ->html($content);
        
        $this->mailer->send($email);
    }

    public function subcribeNewsletter(string $email)
    {
        $email = (new Email())
            ->from('castillojohan@orange.fr')
            ->to("castillojohan@orange.fr")
            ->subject("Je souhaite m'inscrire à votre newsletter")
            ->html(
                "<h1>Bonjour</h1>
                <p>Je souhaite m'inscrire à votre newsletter, voici mon adresse mail : {$email}</p>"
            )
        ;
        $this->mailer->send($email);
    }
}