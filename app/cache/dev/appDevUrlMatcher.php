<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // gestion_yamaha_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestion_yamaha_homepage');
            }

            return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_yamaha_homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/employer')) {
            // employer
            if (rtrim($pathinfo, '/') === '/employer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'employer');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::indexAction',  '_route' => 'employer',);
            }

            // recherche_employer
            if ($pathinfo === '/employer/recherche') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::indexAction',  '_route' => 'recherche_employer',);
            }

            // employer_show
            if (preg_match('#^/employer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employer_show')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::showAction',));
            }

            // employer_new
            if ($pathinfo === '/employer/new') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::newAction',  '_route' => 'employer_new',);
            }

            // employer_create
            if ($pathinfo === '/employer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_employer_create;
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::createAction',  '_route' => 'employer_create',);
            }
            not_employer_create:

            // employer_edit
            if (preg_match('#^/employer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employer_edit')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::editAction',));
            }

            // employer_update
            if (preg_match('#^/employer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_employer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employer_update')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::updateAction',));
            }
            not_employer_update:

            // employer_delete
            if (preg_match('#^/employer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_employer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employer_delete')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\EmployerController::deleteAction',));
            }
            not_employer_delete:

        }

        if (0 === strpos($pathinfo, '/produit')) {
            // produit
            if (rtrim($pathinfo, '/') === '/produit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit',);
            }

            // recherche_produit
            if ($pathinfo === '/produit/recherche') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::indexAction',  '_route' => 'recherche_produit',);
            }

            // produit_show
            if (preg_match('#^/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::showAction',));
            }

            // produit_new
            if ($pathinfo === '/produit/new') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit_new',);
            }

            // produit_create
            if ($pathinfo === '/produit/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_produit_create;
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::createAction',  '_route' => 'produit_create',);
            }
            not_produit_create:

            // produit_edit
            if (preg_match('#^/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::editAction',));
            }

            // produit_update
            if (preg_match('#^/produit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_produit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::updateAction',));
            }
            not_produit_update:

            // produit_delete
            if (preg_match('#^/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_produit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\ProduitController::deleteAction',));
            }
            not_produit_delete:

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // stock
            if (rtrim($pathinfo, '/') === '/stock') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stock');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::indexAction',  '_route' => 'stock',);
            }

            // recherche_stock
            if (rtrim($pathinfo, '/') === '/stock') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'recherche_stock');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::indexAction',  '_route' => 'recherche_stock',);
            }

            // stock_show
            if (preg_match('#^/stock/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_show')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::showAction',));
            }

            // stock_new
            if ($pathinfo === '/stock/new') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::newAction',  '_route' => 'stock_new',);
            }

            // stock_create
            if ($pathinfo === '/stock/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stock_create;
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::createAction',  '_route' => 'stock_create',);
            }
            not_stock_create:

            // stock_edit
            if (preg_match('#^/stock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_edit')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::editAction',));
            }

            // stock_update
            if (preg_match('#^/stock/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_stock_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_update')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::updateAction',));
            }
            not_stock_update:

            // stock_delete
            if (preg_match('#^/stock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_stock_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_delete')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\StockController::deleteAction',));
            }
            not_stock_delete:

        }

        if (0 === strpos($pathinfo, '/commande')) {
            // commande
            if (rtrim($pathinfo, '/') === '/commande') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'commande');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande',);
            }

            // recherche_commande
            if (rtrim($pathinfo, '/') === '/commande') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'recherche_commande');
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::indexAction',  '_route' => 'recherche_commande',);
            }

            // commande_show
            if (preg_match('#^/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::showAction',));
            }

            // commande_new
            if ($pathinfo === '/commande/new') {
                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::newAction',  '_route' => 'commande_new',);
            }

            // commande_create
            if ($pathinfo === '/commande/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_commande_create;
                }

                return array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::createAction',  '_route' => 'commande_create',);
            }
            not_commande_create:

            // commande_edit
            if (preg_match('#^/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_edit')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::editAction',));
            }

            // commande_update
            if (preg_match('#^/commande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_commande_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::updateAction',));
            }
            not_commande_update:

            // commande_delete
            if (preg_match('#^/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_commande_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'Gestion\\YamahaBundle\\Controller\\CommandeController::deleteAction',));
            }
            not_commande_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
