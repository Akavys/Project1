<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_presse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::ajouterPresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/presse/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_presse' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::allPresseAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_all_presse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::lsAllPresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/presse/liste/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_presse' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::modifierPresseAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_presse' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::supprimerPresseAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::ajouterReferenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/reference/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_reference' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::allReferenceAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::modifierReferenceAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::supprimerReferenceAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_moule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::ajouterMouleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/moule/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_moule' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::allMouleAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/moule/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_moule' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::modifierMouleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/moule/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_moule' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::supprimerMouleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/moule/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_loc_defaut' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::ajouterLocalisationDefautAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/loc_defaut/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_loc_defaut' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::allLocalisationDefautAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/loc_defaut/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_loc_defaut' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::modifierLocalisationDefautAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/loc_defaut/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_loc_defaut' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::supprimerLocalisationDefautAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/loc_defaut/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
