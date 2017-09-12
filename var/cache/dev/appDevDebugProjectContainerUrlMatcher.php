<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // agi_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'agi_homepage');
            }

            return array (  '_controller' => 'AgiBundle\\Controller\\AgiController::indexAction',  '_route' => 'agi_homepage',);
        }

        if (0 === strpos($pathinfo, '/agent')) {
            // ajouter_agent
            if ('/agent' === $pathinfo) {
                return array (  '_controller' => 'AgiBundle\\Controller\\AgentController::ajouterAction',  '_route' => 'ajouter_agent',);
            }

            // modifier_agent
            if (0 === strpos($pathinfo, '/agent/edit') && preg_match('#^/agent/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_agent')), array (  '_controller' => 'AgiBundle\\Controller\\AgentController::modifierAction',));
            }

            // supprimer_agent
            if (0 === strpos($pathinfo, '/agent/delete') && preg_match('#^/agent/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_agent')), array (  '_controller' => 'AgiBundle\\Controller\\AgentController::supprimerAction',));
            }

            // operation_enregistrement_agent
            if (0 === strpos($pathinfo, '/agent/details') && preg_match('#^/agent/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_enregistrement_agent')), array (  '_controller' => 'AgiBundle\\Controller\\AgentController::detailsAction',));
            }

            // liste_agent_actif
            if ('/agents/actif' === $pathinfo) {
                return array (  '_controller' => 'AgiBundle\\Controller\\AgentController::listerActifAction',  '_route' => 'liste_agent_actif',);
            }

            // liste_agent_supprime
            if ('/agents/delete' === $pathinfo) {
                return array (  '_controller' => 'AgiBundle\\Controller\\AgentController::listerSupprimeAction',  '_route' => 'liste_agent_supprime',);
            }

        }

        elseif (0 === strpos($pathinfo, '/site')) {
            // ajouter_site
            if ('/site' === $pathinfo) {
                return array (  '_controller' => 'AgiBundle\\Controller\\SiteController::ajouterAction',  '_route' => 'ajouter_site',);
            }

            // modifier_site
            if (0 === strpos($pathinfo, '/site/edit') && preg_match('#^/site/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_site')), array (  '_controller' => 'AgiBundle\\Controller\\SiteController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/site/d')) {
                // supprimer_site
                if (0 === strpos($pathinfo, '/site/delete') && preg_match('#^/site/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_site')), array (  '_controller' => 'AgiBundle\\Controller\\SiteController::supprimerAction',));
                }

                // operation_enregistrement_site
                if (0 === strpos($pathinfo, '/site/details') && preg_match('#^/site/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_enregistrement_site')), array (  '_controller' => 'AgiBundle\\Controller\\SiteController::detailsAction',));
                }

                // afficher_planning_site
                if (0 === strpos($pathinfo, '/site/display_planning') && preg_match('#^/site/display_planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_planning_site')), array (  '_controller' => 'AgiBundle\\Controller\\SiteController::displayPlanningAction',));
                }

            }

            // planning_site
            if (0 === strpos($pathinfo, '/site/planning') && preg_match('#^/site/planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_site')), array (  '_controller' => 'AgiBundle\\Controller\\SiteController::planningAction',));
            }

            if (0 === strpos($pathinfo, '/sites')) {
                // liste_site_actif
                if ('/sites/actif' === $pathinfo) {
                    return array (  '_controller' => 'AgiBundle\\Controller\\SiteController::listerActifAction',  '_route' => 'liste_site_actif',);
                }

                // liste_site_supprime
                if ('/sites/delete' === $pathinfo) {
                    return array (  '_controller' => 'AgiBundle\\Controller\\SiteController::listerSupprimeAction',  '_route' => 'liste_site_supprime',);
                }

                // liste_sites_vacations_actives
                if ('/sites/vacations/actives' === $pathinfo) {
                    return array (  '_controller' => 'AgiBundle\\Controller\\VacationController::listerActifAction',  '_route' => 'liste_sites_vacations_actives',);
                }

                // liste_sites_vacations_supprimes
                if ('/sites/vacations/supprimes' === $pathinfo) {
                    return array (  '_controller' => 'AgiBundle\\Controller\\VacationController::listerSupprimeAction',  '_route' => 'liste_sites_vacations_supprimes',);
                }

            }

            // site_enregistrer_vacation
            if (0 === strpos($pathinfo, '/site/save/vacation') && preg_match('#^/site/save/vacation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_enregistrer_vacation')), array (  '_controller' => 'AgiBundle\\Controller\\VacationController::enregistrerAction',));
            }

        }

        // site_modifier_vacation
        if (0 === strpos($pathinfo, '/vacation/edit') && preg_match('#^/vacation/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_modifier_vacation')), array (  '_controller' => 'AgiBundle\\Controller\\VacationController::modifierAction',));
        }

        // site_supprimer_vacation
        if (0 === strpos($pathinfo, '/vacation/delete') && preg_match('#^/vacation/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_supprimer_vacation')), array (  '_controller' => 'AgiBundle\\Controller\\VacationController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/config_heure')) {
            // configurer_heure
            if ('/config_heure' === $pathinfo) {
                return array (  '_controller' => 'AgiBundle\\Controller\\HeurePanierController::configurerHeureAction',  '_route' => 'configurer_heure',);
            }

            // modifier_config_heure
            if (0 === strpos($pathinfo, '/config_heure/edit') && preg_match('#^/config_heure/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_config_heure')), array (  '_controller' => 'AgiBundle\\Controller\\HeurePanierController::modifierHeureAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
