<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pi_sweet4u_Accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pi_sweet4u_Accueil');
            }

            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::indexAction',  '_route' => 'pi_sweet4u_Accueil',);
        }

        // pi_sweet4u_Compte
        if ($pathinfo === '/mon-compte') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::profilAction',  '_route' => 'pi_sweet4u_Compte',);
        }

        // pi_sweet4u_apropos
        if ($pathinfo === '/apropos') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::aproposAction',  '_route' => 'pi_sweet4u_apropos',);
        }

        // pi_sweet4u_service
        if ($pathinfo === '/service') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::serviceAction',  '_route' => 'pi_sweet4u_service',);
        }

        // pi_sweet4u_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::contactAction',  '_route' => 'pi_sweet4u_contact',);
        }

        // pi_sweet4u_ListePatisserie
        if ($pathinfo === '/liste-patisserie') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listePatisserieAction',  '_route' => 'pi_sweet4u_ListePatisserie',);
        }

        if (0 === strpos($pathinfo, '/pa')) {
            if (0 === strpos($pathinfo, '/patisserie')) {
                // pi_sweet4u_ListeCatalogue
                if ($pathinfo === '/patisserie/liste-catalogue') {
                    return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listeCatalogueAction',  '_route' => 'pi_sweet4u_ListeCatalogue',);
                }

                if (0 === strpos($pathinfo, '/patisserie/catalogue')) {
                    // pi_sweet4u_ListeArticle
                    if ($pathinfo === '/patisserie/catalogue/liste-article') {
                        return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listeArticleAction',  '_route' => 'pi_sweet4u_ListeArticle',);
                    }

                    // pi_sweet4u_Article
                    if ($pathinfo === '/patisserie/catalogue/article') {
                        return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::articleAction',  '_route' => 'pi_sweet4u_Article',);
                    }

                }

            }

            // pi_sweet4u_Panier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::panierAction',  '_route' => 'pi_sweet4u_Panier',);
            }

        }

        if (0 === strpos($pathinfo, '/commande')) {
            // pi_sweet4u_ClientCommandes
            if ($pathinfo === '/commandes') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::commandesAction',  '_route' => 'pi_sweet4u_ClientCommandes',);
            }

            // pi_sweet4u_Payement
            if ($pathinfo === '/commande/payement') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::payementAction',  '_route' => 'pi_sweet4u_Payement',);
            }

        }

        // pi_sweet4u_GestionCommentaire
        if ($pathinfo === '/gestion-commentaire') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\AdminController::GestionCommentaireAction',  '_route' => 'pi_sweet4u_GestionCommentaire',);
        }

        // pi_sweet4u_BloquerCompte
        if ($pathinfo === '/Block') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\AdminController::BlockAction',  '_route' => 'pi_sweet4u_BloquerCompte',);
        }

        // pi_sweet4u_ListeAdresse
        if ($pathinfo === '/Liste-Patisserie') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::listePatisserieAction',  '_route' => 'pi_sweet4u_ListeAdresse',);
        }

        // pi_sweet4u_AjouterPatisserie
        if ($pathinfo === '/ajouter-patisserie') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterPatisserieAction',  '_route' => 'pi_sweet4u_AjouterPatisserie',);
        }

        // pi_sweet4u_ListeCataloguePatisserie
        if ($pathinfo === '/ListeCatalogue') {
            return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::cataloguePatisserieAction',  '_route' => 'pi_sweet4u_ListeCataloguePatisserie',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // pi_sweet4u_AjouterCatalogue
            if ($pathinfo === '/ajouter-catalogue') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterCatalogueAction',  '_route' => 'pi_sweet4u_AjouterCatalogue',);
            }

            // pi_sweet4u_ArticleCatalogue
            if ($pathinfo === '/article-catalogue') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::articleCatalogueAction',  '_route' => 'pi_sweet4u_ArticleCatalogue',);
            }

            // pi_sweet4u_AjouterArticle
            if ($pathinfo === '/ajouter-article') {
                return array (  '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterArticleAction',  '_route' => 'pi_sweet4u_AjouterArticle',);
            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
