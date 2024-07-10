<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Data\Data;
use App\Form\ContactType;
use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    private $data;

    public function __construct()
    {
        $this->data = new Data();
    }

    #[Route("/", name: "app_main", methods:["GET"])]
    public function getHomePage(): Response
    {
        return $this->render('home.html.twig', [
            "introductionText"=>$this->data->introductionText,
            "stats"=> $this->data->statistics
        ]);
    }

    #[Route("/formation", name: "app_formation", methods:["GET"])]
    public function getFormationPage(): Response
    {
        return $this->render('formation.html.twig', [
            "data" => $this->data,
            "obfuscatedPhone"=>$this->data->getObfuscatedString($this->data::REFERENT_PHONE),
            "obfuscatedMail"=>$this->data->getObfuscatedString($this->data::REFERENT_MAIL)]);
    }

    #[Route("/assistance", name: "app_assistance", methods:["GET"])]
    public function getAssistancePage(): Response
    {
        return $this->render('assistance.html.twig', ['data'=> $this->data->assistance]);
    }

    #[Route("/contact", name: "app_contact", methods:["GET", "POST"])]
    public function getContactPage(Request $request, MailerService $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        $payload = $request->getPayload()->all();

        if($form->isSubmitted() && $form->isValid()){
            $isHuman = $payload['contact']['is_human'];
            $reactionTime = $payload['contact']['reaction_time'];
            if(!$isHuman || $reactionTime < 5000){
                $this->addFlash('error', "La validation captcha à échoué veuillez reéssayer en rechargeant votre navigateur." );
                return $this->redirectToRoute('app_contact');
            }
    
            $data = $form->getData();
            $mailer->sendEmail(
                "castillojohan@orange.fr",
                "Contact de {$data->getFirstName()} {$data->getLastName()}",
                "<h1>Email de contact:{$data->getEmail()}</h1>
                <p>{$data->getMessage()}</p>"
            );
            $this->addFlash('success', "Votre email à bien été envoyé, nous vous répondrons dès que possible.");
        }

        return $this->render('contact.html.twig', [
            "form" => $form,
        ]);
    }

    #[Route('/cgu', name: 'app_cgu', methods:'GET')]
    public function getCguPage(): Response
    {
        return $this->render('cgu.html.twig');
    }

    #[Route('/confidentialite', name: 'app_confidentialite', methods:'GET')]
    public function getConfidentialitePage(): Response
    {
        return $this->render('confidentialite.html.twig');
    }

    #[Route('/cgv', name: 'app_cgv', methods:'GET')]
    public function getCgvPage(): Response
    {
        return $this->render('cgv.html.twig');
    }

    #[Route('/a-propos', name: 'app_about', methods:'GET')]
    public function getAboutPage(): Response
    {
        return $this->render('a-propos.html.twig');
    }

    #[Route('/subscribe', name: 'app_subscribe', methods:'POST')]
    public function subscribeMethod(Request $request, MailerService $mailer)
    {
        $uri = $request->server->get('HTTP_REFERER');

        $payload = $request->getPayload()->all();
        $email = $payload['newsletter']['email'];
        $reactionTime = $payload['newsletter']['reaction-time'];
        
        $emailTrimmed = trim($email);
        
        if(empty($emailTrimmed)){
            $this->addFlash('error', "L'adresse mail est vide.");
            return $this->redirect($uri, 302);
        }
        if(filter_var($emailTrimmed, FILTER_VALIDATE_EMAIL) && $reactionTime > 5000){
            $emailSanitized = htmlspecialchars($emailTrimmed);
            try{
                $mailer->subcribeNewsletter($emailSanitized);
                $this->addFlash('success', "Merci pour votre souscription !");
                return $this->redirect($uri);
            } catch(\Exception $ex){
                $this->addFlash('error', "Une erreur est survenue lors de l'envoie de votre adresse mail.");
            }
        }
        $this->addFlash('error', "L'adresse email semble incorrecte, veuillez réessayer avec une adresse email valide.");
        return $this->redirect($uri);
    }
}