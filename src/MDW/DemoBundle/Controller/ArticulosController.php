<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MDW\DemoBundle\Entity\Articles;
use MDW\DemoBundle\Form\ArticleType;

class ArticulosController extends Controller
{
	public function listarAction()
	{
            $em = $this->getDoctrine()->getEntityManager();

            $articulos = $em->getRepository('MDWDemoBundle:Articles')->findAll();
            $comentarios = $em->getRepository('MDWDemoBundle:Comments')->findAll();

            //return $this->render('MDWDemoBundle:Articulos:listar.html.twig', array('articulos' => $articulos));
            return $this->render('MDWDemoBundle:Articulos:listar.html.twig', array('articulos' => $articulos, 'comentarios' => $comentarios));
	}

	public function crearAction()
	{
            $articulo = new Articles();
            //$articulo->setTitle('Prueba');
            $articulo->setAuthor('Rafa Nadal');
            $articulo->setContent('Contenido');
            $articulo->setTags('ejemplo');
            $articulo->setCreated(new \DateTime());
            $articulo->setUpdated(new \DateTime());
            $articulo->setSlug('articulo-de-ejemplo-3');
            $articulo->setCategory('ejemplo');

            $errores = $this->get('validator')->validate($articulo);

            if(!empty($errores)) {
                foreach($errores as $error)
                    echo $error->getMessage();

                return new Response();
            }

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($articulo);
            $em->flush();

            return $this->render('MDWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));
	}

	public function editarAction($id)
	{
            $em = $this->getDoctrine()->getEntityManager();

            $articulo = $em->getRepository('MDWDemoBundle:Articles')->find($id);

            $articulo->setTitle('Articulo de ejemplo 1 - modificado');
            $articulo->setAuthor('Israel Romo');
            $articulo->setUpdated(new \DateTime());

            $em->persist($articulo);
            $em->flush();

            return $this->render('MDWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));
	}

	public function borrarAction($id)
	{
            $em = $this->getDoctrine()->getEntityManager();

            $articulo = $em->getRepository('MDWDemoBundle:Articles')->find($id);

            $em->remove($articulo);
            $em->flush();

            return $this->redirect(
                $this->generateUrl('articulo_listar'));

	}

	public function newAction()
        {
            //-- Obtenemos el request que contendráos datos
            $request = $this->getRequest();

            $articulo = new Articles();
            $form = $this->createForm(new ArticleType(), $articulo);

            //-- En caso de que el request haya sido invocado por POST
            //   procesaremos el formulario
            if($request->getMethod() == 'POST')
            {
                //-- Pasamos el request el médo bindRequest() del objeto 
                //   formulario el cual obtiene los datos del formulario
                //   y los carga dentro del objeto Article que estáontenido
                //   tambiédentro del objeto Type
                $form->bindRequest($request);
        
                //-- Con esto nuestro formulario ya es capaz de decirnos si
                //   los dato son vádos o no y en caso de ser asi
                if($form->isValid())
                {
                   //-- Procesamos los datos que ya estáautomácamente
                   //   cargados dentro de nuestra variable $articulo, ya sea
                   //   grabáolos en la base de datos, enviando un mail, etc
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($articulo);
                   $em->flush();

                   //-- Finalmente, al finalizar el procesamiento, siempre es
                   //   importante realizar una redireccióara no tener el
                   //   problema de que al intentar actualizar el navegador
                   //   nos dice que lo datos se deben volver a reenviar. En
                   //   este caso iremos a la pána del listado de artílos
                   return $this->redirect($this->generateURL('articulo_listar'));
               }
           }
           return $this->render('MDWDemoBundle:Articulos:new.html.twig', array('form' => $form->createView(),));
        }
}
