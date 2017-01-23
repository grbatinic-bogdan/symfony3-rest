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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        if (0 === strpos($pathinfo, '/battles')) {
            // battle_new
            if ($pathinfo === '/battles/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_battle_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Web\\BattleController::newAction',  '_route' => 'battle_new',);
            }
            not_battle_new:

            // battle_show
            if (preg_match('#^/battles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_battle_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'battle_show')), array (  '_controller' => 'AppBundle\\Controller\\Web\\BattleController::showAction',));
            }
            not_battle_show:

            // battle_list
            if ($pathinfo === '/battles') {
                return array (  '_controller' => 'AppBundle\\Controller\\Web\\BattleController::listAction',  '_route' => 'battle_list',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\Web\\DefaultController::homepageAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/programmers')) {
            if (0 === strpos($pathinfo, '/programmers/new')) {
                // programmer_new
                if ($pathinfo === '/programmers/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programmer_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\ProgrammerController::newAction',  '_route' => 'programmer_new',);
                }
                not_programmer_new:

                // programmer_new_handle
                if ($pathinfo === '/programmers/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_programmer_new_handle;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\ProgrammerController::handleNewAction',  '_route' => 'programmer_new_handle',);
                }
                not_programmer_new_handle:

            }

            // programmer_choose
            if ($pathinfo === '/programmers/choose') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programmer_choose;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Web\\ProgrammerController::chooseAction',  '_route' => 'programmer_choose',);
            }
            not_programmer_choose:

            // programmer_show
            if (preg_match('#^/programmers/(?P<nickname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programmer_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programmer_show')), array (  '_controller' => 'AppBundle\\Controller\\Web\\ProgrammerController::showAction',));
            }
            not_programmer_show:

            // programmer_powerup
            if (preg_match('#^/programmers/(?P<nickname>[^/]++)/power/up$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_programmer_powerup;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programmer_powerup')), array (  '_controller' => 'AppBundle\\Controller\\Web\\ProgrammerController::powerUpAction',));
            }
            not_programmer_powerup:

        }

        if (0 === strpos($pathinfo, '/tokens')) {
            // user_tokens
            if ($pathinfo === '/tokens') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_tokens;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Web\\TokenController::indexAction',  '_route' => 'user_tokens',);
            }
            not_user_tokens:

            if (0 === strpos($pathinfo, '/tokens/new')) {
                // user_tokens_new
                if ($pathinfo === '/tokens/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\TokenController::newAction',  '_route' => 'user_tokens_new',);
                }

                // user_tokens_new_process
                if ($pathinfo === '/tokens/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\TokenController::newAction',  '_route' => 'user_tokens_new_process',);
                }

            }

            // user_tokens_delete
            if (preg_match('#^/tokens/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_tokens_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_tokens_delete')), array (  '_controller' => 'AppBundle\\Controller\\Web\\TokenController::deleteAction',));
            }
            not_user_tokens_delete:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // user_register
            if ($pathinfo === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_register;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Web\\UserController::registerAction',  '_route' => 'user_register',);
            }
            not_user_register:

            // user_register_handle
            if ($pathinfo === '/register') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_register_handle;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Web\\UserController::registerHandleAction',  '_route' => 'user_register_handle',);
            }
            not_user_register_handle:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // security_login_form
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\UserController::loginAction',  '_route' => 'security_login_form',);
                }

                // security_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Web\\UserController::loginCheckAction',  '_route' => 'security_login_check',);
                }

            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\Web\\UserController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/api/programmers')) {
            // app_api_programmer_new
            if ($pathinfo === '/api/programmers') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_api_programmer_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Api\\ProgrammerController::newAction',  '_format' => 'json',  '_route' => 'app_api_programmer_new',);
            }
            not_app_api_programmer_new:

            // api_programmers_show
            if (preg_match('#^/api/programmers/(?P<nickname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_programmers_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_programmers_show')), array (  '_controller' => 'AppBundle\\Controller\\Api\\ProgrammerController::showAction',  '_format' => 'json',));
            }
            not_api_programmers_show:

            // app_api_programmer_list
            if ($pathinfo === '/api/programmers') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_api_programmer_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Api\\ProgrammerController::listAction',  '_format' => 'json',  '_route' => 'app_api_programmer_list',);
            }
            not_app_api_programmer_list:

            // app_api_programmer_update
            if (preg_match('#^/api/programmers/(?P<nickname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('PUT', 'PATCH'));
                    goto not_app_api_programmer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_programmer_update')), array (  '_controller' => 'AppBundle\\Controller\\Api\\ProgrammerController::updateAction',  '_format' => 'json',));
            }
            not_app_api_programmer_update:

            // app_api_programmer_delete
            if (preg_match('#^/api/programmers/(?P<nickname>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_api_programmer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_programmer_delete')), array (  '_controller' => 'AppBundle\\Controller\\Api\\ProgrammerController::deleteAction',  '_format' => 'json',));
            }
            not_app_api_programmer_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
