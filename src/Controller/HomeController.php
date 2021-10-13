<?php

namespace App\Controller;

use App\Entity\Admin\Messages;
use App\Entity\Car;
use App\Form\Admin\MessagesType;
use App\Repository\Admin\CommentRepository;
use App\Repository\Admin\SettingRepository;
use App\Repository\CarRepository;
use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Bridge\Google\Smtp\GmailTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SettingRepository $settingRepository,CarRepository $carRepository)
    {
        $setting=$settingRepository->findAll();
        $slider=$carRepository->findBy([],['title'=>'ASC'],3);
        $cars=$carRepository->findBy([],['title'=>'DESC'],3);
        $newCars=$carRepository->findBy([],['title'=>'DESC'],10);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'setting' => $setting,
            'slider' => $slider,//veriyi slider olarak gönderecek
            'cars' => $cars,
            'newCars' => $newCars,
        ]);
    }

    /**
     * @Route("/car/{id}", name="car_show", methods={"GET"})
     */
    public function show(Car $car,$id,ImageRepository $imageRepository,CommentRepository $commentRepository): Response
    {

        $images=$imageRepository->findBy(['car'=>$id]);
        $comments=$commentRepository->findBy(['carid'=>$id,'status'=>'True']);

        return $this->render('home/carshow.html.twig', [
            'car' => $car,
            'images' => $images,
            'comments' => $comments,
        ]);
    }



    /**
     * @Route("/about", name="home_about")
     */
    public function about(SettingRepository $settingRepository): Response
        //titleların aboutusa gidebilmesi için setting yaptık
    {
        $setting=$settingRepository->findAll();
        return $this->render('home/aboutus.html.twig', [
            'setting' => $setting,
        ]);
    }


    /**
     * @Route("/contact", name="home_contact", methods={"GET","POST"})
     */
    public function contact(SettingRepository $settingRepository,Request $request): Response
        //titleların aboutusa gidebilmesi için setting yaptık
    {
        $message = new Messages();
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);
        $submittedToken = $request->request->get('token');

        $setting=$settingRepository->findAll();
        if ($form->isSubmitted()) {
            if ($this->isCsrfTokenValid('form-messeage',$submittedToken)){    //tokenı kontrol et
            $entityManager = $this->getDoctrine()->getManager();
            $message->setStatus('New');
            $message->setIp($_SERVER['REMOTE_ADDR']);


            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success','Mesajınız Başarıyla Gönderilmiştir');

            //***** SEND MAIL********////
                $email = (new Email())
                    ->from($setting[0]->getSmtpemail())->to($form['email']->getData())
                    //->cc('cc@example.com')
                    //->bcc('bcc@example.com')
                    //->replyTo('fabien@example.com')
                    //->priority(Email::PRIORITY_HIGH)
                    ->subject('AllCar Your Request')
                    //->text('Sending emails is fun again!')
                    ->html("Dear ".$form['name']->getData() ."<br>
                    <p> We will evulate your requests and contact you as soon as possible</p>
                    Thank You <br>
                    ===================================
                    <br>".$setting[0]->getCompany()." <br>
                    Address:".$setting[0]->getAddress()." <br>
                    Phone:".$setting[0]->getPhone()." <br>"
            );

                $transport = new GmailTransport($setting[0]->getSmtpemail(),$setting[0]->getSmtppassword());
                $mailer = new Mailer($transport);
                $mailer->send($email);
                // $messageId = $sentEmail->getMessageId();

                // ***** SEND MAİL *******////



            return $this->redirectToRoute('home_contact');
            }
        }


        $setting=$settingRepository->findAll();
        return $this->render('home/contact.html.twig', [
            'setting' => $setting,
            'form' => $form->createView(),//form gönderildi
        ]);
    }


}
