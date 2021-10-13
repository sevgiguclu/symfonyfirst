<?php

namespace App\Controller\Admin;

use App\Entity\Admin\Advertisement;
use App\Form\Admin\AdvertisementType;
use App\Repository\Admin\AdvertisementRepository;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\File;

/**
 * @Route("/admin/advertisement")
 */
class AdvertisementController extends AbstractController
{
    /**
     * @Route("/", name="admin_advertisement_index", methods={"GET"})
     */
    public function index(AdvertisementRepository $advertisementRepository): Response
    {
        return $this->render('admin/advertisement/index.html.twig', [
            'advertisements' => $advertisementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="admin_advertisement_new", methods={"GET","POST"})
     */
    public function new(Request $request,$id,CarRepository $carRepository,AdvertisementRepository $advertisementRepository): Response
    {

        $advertisements=$advertisementRepository->findBy(['carid'=>$id]);
        $car=$carRepository->findOneBy(['id'=>$id]);
        $advertisement = new Advertisement();
        $form = $this->createForm(AdvertisementType::class, $advertisement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //*** file upload *//
            /** @var file $file */
            $file = $form['image']->getData();
            if ($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                try{
                    $file->move(
                        $this->getParameter('images_directory'), //Servis.yaml de tanımladığımız resim yolu
                        $fileName
                    );
                }catch (FileException $e){

                }
                $advertisement->setImage($fileName);
            }
            //*** file upload *//

            $entityManager = $this->getDoctrine()->getManager();

            //$advertisement->setCarid($id);
            $advertisement->setCarid($car->getId());
            $entityManager->persist($advertisement);
            $entityManager->flush();

            return $this->redirectToRoute('admin_advertisement_new',['id'=>$id]);
        }

        return $this->render('admin/advertisement/new.html.twig', [
            'car' => $car,
            'advertisement' => $advertisement,
            'advertisements' => $advertisements,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }


    /**
     * @Route("/{id}", name="admin_advertisement_show", methods={"GET"})
     */
    public function show(Advertisement $advertisement): Response
    {
        return $this->render('admin/advertisement/show.html.twig', [
            'advertisement' => $advertisement,
        ]);
    }

    /**
     * @Route("/{id}/edit/{hid}", name="admin_advertisement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request,$hid, Advertisement $advertisement): Response
    {
        $form = $this->createForm(AdvertisementType::class, $advertisement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //*** file upload *//
            /** @var file $file */
            $file = $form['image']->getData();
            if ($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                try{
                    $file->move(
                        $this->getParameter('images_directory'), //Servis.yaml de tanımladığımız resim yolu
                        $fileName
                    );
                }catch (FileException $e){

                }
                $advertisement->setImage($fileName);
            }
            //*** file upload *//
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_advertisement_new',['id'=>$hid]);
        }

        return $this->render('admin/advertisement/edit.html.twig', [
            'advertisement' => $advertisement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/{hid}", name="admin_advertisement_delete", methods={"DELETE"})
     */
    public function delete(Request $request,$hid, Advertisement $advertisement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$advertisement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($advertisement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_advertisement_new',['id'=>$hid]);
    }
}
