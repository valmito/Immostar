<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HTTPFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Bien;
use App\Form\BienType;

class BienController extends AbstractController
{
    /**
     * @Route("/bien/c", name="bien_c")
     */
    public function index()
    {
        return $this->render('bien_c/index.html.twig', [
            'controller_name' => 'BienCController',
        ]);
    }
    /**
     * @Route("/bien/creerBien", name="creerBien")
     */
    public function creerBien(Request $query) {

        // On crée un objet Article
        $bien = new Bien();

        $form = $this->createForm(BienType::class, $bien);

        $form->handleRequest($query);
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire

        if ($form->isSubmitted() && $form->isValid()) {

          // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

          // On enregistre notre objet $advert dans la base de données, par exemple

            $em = $this->getDoctrine()->getManager();
            $em->persist($bien);
            $em->flush();    

            $query->getSession()
                  ->getFlashBag()
                  ->add('success','Article ajouté avec succès');

            return $this->redirectToRoute('creerBien');
        }
         return $this->render('bien_c/AjouterBien.html.twig',array('form'=>$form->createView()));    
    }
    /**
     * @Route("/bien/creerFormConnexionAction", name="creerFormConnexionActionBien")
     */
    public function creerFormConnexionAction(Request $query) {
       
    // On crée un objet Bien
    $bien = new Bien();
   
    $form = $this->createForm(ConnexionType::class, $bien);
   
    //$request = Request::createFromGlobals();
   
    $form->handleRequest($query);
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $visiteur contient les valeurs entrées dans le formulaire par le candidat
       
    if ($form->isSubmitted() && $form->isValid()) {
       
      // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

        // On enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            //$data = $form->getData();      
            $em->flush();
              
    }
    return $this->render('bien_c/AjouterBien.html.twig',array('form'=>$form->createView(),));
    }
    
     
    /**
      * @Route("/bien/afficherBien", name="afficherBien")
      */
     
    public function listerBienParCateg1(Request $request) {
       
        $em = $this->getDoctrine()->getManager();
        $valeur = $em->getRepository(Article::class)->rechercherParCateg();    
        return $this->render('article/artParCateg.html.twig',array('result'=>$valeur));
     }
     
     /**
      *
      *@Route("/article/update/{id}",name="upd_route")
      *
      */    
     public function updateAction(Request $request, Session $session, $id){
         
        $article = new Article() ;
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
       
        //$id = $session->get('login');
        $request->getSession()->getFlashBag()->add('notice', '');
       
        $form = $this->createForm(ArticleType::class, $article);
       
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', 'Article modifié avec succès.');
                return $this->redirectToRoute('upd_route',array('id'=>$id));
            }
        }
        return $this->render( 'article/update.html.twig', array(
            'form' =>$form->createView(), 'article'=>$article));
    }
   
    /**
      *
      *@Route("/article/update/register",name="r_register")
      *
      */
    public function  register(){
        return $this->render("article/register.html.twig");
    }

    /**
      *
      *@Route("/article/verif/supprimer/{id}",name="verif_del_art")
      *
      */
   
    public function deleteVerif(Session $session, $id){
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
        return $this->render('article/delete.html.twig', array('article'=>$article));
    }
   
    /**
      *
      *@Route("/article/supprimer/{id}",name="del_art")
      *
      */
    public function deleterArticle(Session $session, $id){

        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('affichage_final');
    }
    /**
      *
      *@Route("/article/afficher",name="affichage_final")
      *
      */
    public function indexAction(Session $session){
        $id = $session->get('id');
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->findAllArt();
        return $this->render('article/index.html.twig', array('articles'=>$article));
    }
}
