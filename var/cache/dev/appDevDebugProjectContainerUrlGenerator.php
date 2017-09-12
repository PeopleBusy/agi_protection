<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'agi_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgiController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_agent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_agent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/agent/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_agent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/agent/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_agent_actif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::listerActifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/actif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_agent_supprime' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::listerSupprimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agents/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'operation_enregistrement_agent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\AgentController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/agent/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/site',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_site' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_site' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planning_site' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::planningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/planning',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficher_planning_site' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::displayPlanningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/display_planning',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_site_actif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::listerActifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sites/actif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_site_supprime' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::listerSupprimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sites/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'operation_enregistrement_site' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\SiteController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'site_enregistrer_vacation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\VacationController::enregistrerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/site/save/vacation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'site_modifier_vacation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\VacationController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vacation/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'site_supprimer_vacation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\VacationController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vacation/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_sites_vacations_actives' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\VacationController::listerActifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sites/vacations/actives',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_sites_vacations_supprimes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\VacationController::listerSupprimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sites/vacations/supprimes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'configurer_heure' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\HeurePanierController::configurerHeureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/config_heure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_config_heure' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AgiBundle\\Controller\\HeurePanierController::modifierHeureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/config_heure/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
