<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'pi_sweet4u_Accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_Compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mon-compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_apropos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::aproposAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apropos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_service' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::serviceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\Sweet4uController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ListePatisserie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listePatisserieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-patisserie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ListeCatalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listeCatalogueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patisserie/liste-catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ListeArticle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::listeArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patisserie/catalogue/liste-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_Article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::articleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patisserie/catalogue/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_Panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ClientCommandes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::commandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_Payement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ClientController::payementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande/payement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_GestionCommentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\AdminController::GestionCommentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion-commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_BloquerCompte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\AdminController::BlockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Block',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ListeAdresse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::listePatisserieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liste-Patisserie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_AjouterPatisserie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterPatisserieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter-patisserie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ListeCataloguePatisserie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::cataloguePatisserieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ListeCatalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_AjouterCatalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterCatalogueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter-catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_ArticleCatalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::articleCatalogueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article-catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pi_sweet4u_AjouterArticle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Sweet4uBundle\\Controller\\ResponsableController::ajouterArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
