<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _assetic_19874bd
        if ($pathinfo === '/css/19874bd.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '19874bd',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_19874bd',);
        }

        // _assetic_19874bd_0
        if ($pathinfo === '/css/19874bd_screen_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '19874bd',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_19874bd_0',);
        }

        // _assetic_19874bd_1
        if ($pathinfo === '/css/19874bd_menu_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '19874bd',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_19874bd_1',);
        }

        // _assetic_c9001be
        if ($pathinfo === '/css/c9001be.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9001be',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c9001be',);
        }

        // _assetic_c9001be_0
        if ($pathinfo === '/css/c9001be_ie_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9001be',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_c9001be_0',);
        }

        // _assetic_2642646
        if ($pathinfo === '/js/2642646.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2642646',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2642646',);
        }

        // _assetic_2642646_0
        if ($pathinfo === '/js/2642646_menu_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2642646',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_2642646_0',);
        }

        // _assetic_f665d50
        if ($pathinfo === '/css/f665d50.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f665d50',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f665d50',);
        }

        // _assetic_f665d50_0
        if ($pathinfo === '/css/f665d50_screen_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f665d50',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_f665d50_0',);
        }

        // _assetic_f665d50_1
        if ($pathinfo === '/css/f665d50_content_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f665d50',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_f665d50_1',);
        }

        // _assetic_f665d50_2
        if ($pathinfo === '/css/f665d50_login_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f665d50',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_f665d50_2',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // kingston_hyperx_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'kingston_hyperx_default_index'));
        }

        // review
        if (rtrim($pathinfo, '/') === '/review') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'review');
            }

            return array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::indexAction',  '_route' => 'review',);
        }

        // review_show
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::showAction',)), array('_route' => 'review_show'));
        }

        // review_new
        if ($pathinfo === '/review/new') {
            return array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::newAction',  '_route' => 'review_new',);
        }

        // review_create
        if ($pathinfo === '/review/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_create;
            }

            return array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::createAction',  '_route' => 'review_create',);
        }
        not_review_create:

        // review_edit
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::editAction',)), array('_route' => 'review_edit'));
        }

        // review_update
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::updateAction',)), array('_route' => 'review_update'));
        }
        not_review_update:

        // review_delete
        if (0 === strpos($pathinfo, '/review') && preg_match('#^/review/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_review_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Kingston\\HyperxBundle\\Controller\\ReviewController::deleteAction',)), array('_route' => 'review_delete'));
        }
        not_review_delete:

        // acme_store_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'acme_store_default_index'));
        }

        // product
        if (rtrim($pathinfo, '/') === '/product') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'product');
            }

            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
        }

        // product_show
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::showAction',)), array('_route' => 'product_show'));
        }

        // product_new
        if ($pathinfo === '/product/new') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
        }

        // product_create
        if ($pathinfo === '/product/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_product_create;
            }

            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
        }
        not_product_create:

        // product_edit
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::editAction',)), array('_route' => 'product_edit'));
        }

        // product_update
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_product_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::updateAction',)), array('_route' => 'product_update'));
        }
        not_product_update:

        // product_delete
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_product_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\ProductController::deleteAction',)), array('_route' => 'product_delete'));
        }
        not_product_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
