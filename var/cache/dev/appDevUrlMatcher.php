<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/homepage/ciudad')) {
            // homepage_ciudad_index
            if (rtrim($pathinfo, '/') === '/homepage/ciudad') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homepage_ciudad_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homepage_ciudad_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CiudadController::indexAction',  '_route' => 'homepage_ciudad_index',);
            }
            not_homepage_ciudad_index:

            // homepage_ciudad_new
            if ($pathinfo === '/homepage/ciudad/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_homepage_ciudad_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CiudadController::newAction',  '_route' => 'homepage_ciudad_new',);
            }
            not_homepage_ciudad_new:

            // homepage_ciudad_show
            if (preg_match('#^/homepage/ciudad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homepage_ciudad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_ciudad_show')), array (  '_controller' => 'AppBundle\\Controller\\CiudadController::showAction',));
            }
            not_homepage_ciudad_show:

            // homepage_ciudad_edit
            if (preg_match('#^/homepage/ciudad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_homepage_ciudad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_ciudad_edit')), array (  '_controller' => 'AppBundle\\Controller\\CiudadController::editAction',));
            }
            not_homepage_ciudad_edit:

            // homepage_ciudad_delete
            if (preg_match('#^/homepage/ciudad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_homepage_ciudad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_ciudad_delete')), array (  '_controller' => 'AppBundle\\Controller\\CiudadController::deleteAction',));
            }
            not_homepage_ciudad_delete:

            // homepage_listarporprovincia
            if (0 === strpos($pathinfo, '/homepage/ciudad/listarporprovincia') && preg_match('#^/homepage/ciudad/listarporprovincia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_listarporprovincia')), array (  '_controller' => 'AppBundle\\Controller\\CiudadController::listarPorProvinciaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/correoelectronico')) {
            // correoelectronico_index
            if (rtrim($pathinfo, '/') === '/correoelectronico') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_correoelectronico_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'correoelectronico_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CorreoElectronicoController::indexAction',  '_route' => 'correoelectronico_index',);
            }
            not_correoelectronico_index:

            // correoelectronico_new
            if ($pathinfo === '/correoelectronico/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_correoelectronico_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CorreoElectronicoController::newAction',  '_route' => 'correoelectronico_new',);
            }
            not_correoelectronico_new:

            // correoelectronico_show
            if (preg_match('#^/correoelectronico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_correoelectronico_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'correoelectronico_show')), array (  '_controller' => 'AppBundle\\Controller\\CorreoElectronicoController::showAction',));
            }
            not_correoelectronico_show:

            // correoelectronico_edit
            if (preg_match('#^/correoelectronico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_correoelectronico_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'correoelectronico_edit')), array (  '_controller' => 'AppBundle\\Controller\\CorreoElectronicoController::editAction',));
            }
            not_correoelectronico_edit:

            // correoelectronico_delete
            if (preg_match('#^/correoelectronico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_correoelectronico_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'correoelectronico_delete')), array (  '_controller' => 'AppBundle\\Controller\\CorreoElectronicoController::deleteAction',));
            }
            not_correoelectronico_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // nuevo
        if ($pathinfo === '/nuevo') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::nuevoAction',  '_route' => 'nuevo',);
        }

        // rango
        if ($pathinfo === '/rango') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::rangoFechaAction',  '_route' => 'rango',);
        }

        // listar
        if ($pathinfo === '/listar') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listarAction',  '_route' => 'listar',);
        }

        // event
        if ($pathinfo === '/event') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventAction',  '_route' => 'event',);
        }

        if (0 === strpos($pathinfo, '/direccionpostal')) {
            // direccionpostal_index
            if (rtrim($pathinfo, '/') === '/direccionpostal') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_direccionpostal_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'direccionpostal_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DireccionPostalController::indexAction',  '_route' => 'direccionpostal_index',);
            }
            not_direccionpostal_index:

            // direccionpostal_new
            if ($pathinfo === '/direccionpostal/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_direccionpostal_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DireccionPostalController::newAction',  '_route' => 'direccionpostal_new',);
            }
            not_direccionpostal_new:

            // direccionpostal_show
            if (preg_match('#^/direccionpostal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_direccionpostal_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccionpostal_show')), array (  '_controller' => 'AppBundle\\Controller\\DireccionPostalController::showAction',));
            }
            not_direccionpostal_show:

            // direccionpostal_edit
            if (preg_match('#^/direccionpostal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_direccionpostal_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccionpostal_edit')), array (  '_controller' => 'AppBundle\\Controller\\DireccionPostalController::editAction',));
            }
            not_direccionpostal_edit:

            // direccionpostal_delete
            if (preg_match('#^/direccionpostal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_direccionpostal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccionpostal_delete')), array (  '_controller' => 'AppBundle\\Controller\\DireccionPostalController::deleteAction',));
            }
            not_direccionpostal_delete:

        }

        if (0 === strpos($pathinfo, '/profesion')) {
            // profesion_index
            if (rtrim($pathinfo, '/') === '/profesion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profesion_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profesion_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProfesionController::indexAction',  '_route' => 'profesion_index',);
            }
            not_profesion_index:

            // profesion_new
            if ($pathinfo === '/profesion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_profesion_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProfesionController::newAction',  '_route' => 'profesion_new',);
            }
            not_profesion_new:

            // profesion_show
            if (preg_match('#^/profesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profesion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_show')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionController::showAction',));
            }
            not_profesion_show:

            // profesion_edit
            if (preg_match('#^/profesion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_profesion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionController::editAction',));
            }
            not_profesion_edit:

            // profesion_delete
            if (preg_match('#^/profesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_profesion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionController::deleteAction',));
            }
            not_profesion_delete:

            if (0 === strpos($pathinfo, '/profesional')) {
                // profesional_index
                if (rtrim($pathinfo, '/') === '/profesional') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profesional_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'profesional_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::indexAction',  '_route' => 'profesional_index',);
                }
                not_profesional_index:

                // profesional_new
                if ($pathinfo === '/profesional/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_profesional_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::newAction',  '_route' => 'profesional_new',);
                }
                not_profesional_new:

                // profesional_show
                if (preg_match('#^/profesional/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profesional_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesional_show')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::showAction',));
                }
                not_profesional_show:

                // profesional_edit
                if (preg_match('#^/profesional/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_profesional_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesional_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::editAction',));
                }
                not_profesional_edit:

                // profesional_delete
                if (preg_match('#^/profesional/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_profesional_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesional_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProfesionalController::deleteAction',));
                }
                not_profesional_delete:

            }

        }

        if (0 === strpos($pathinfo, '/homepage/provincia')) {
            // homepage_provincia_index
            if (rtrim($pathinfo, '/') === '/homepage/provincia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homepage_provincia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homepage_provincia_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProvinciaController::indexAction',  '_route' => 'homepage_provincia_index',);
            }
            not_homepage_provincia_index:

            // homepage_provincia_new
            if ($pathinfo === '/homepage/provincia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_homepage_provincia_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProvinciaController::newAction',  '_route' => 'homepage_provincia_new',);
            }
            not_homepage_provincia_new:

            // homepage_provincia_show
            if (preg_match('#^/homepage/provincia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homepage_provincia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_provincia_show')), array (  '_controller' => 'AppBundle\\Controller\\ProvinciaController::showAction',));
            }
            not_homepage_provincia_show:

            // homepage_provincia_edit
            if (preg_match('#^/homepage/provincia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_homepage_provincia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_provincia_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProvinciaController::editAction',));
            }
            not_homepage_provincia_edit:

            // homepage_provincia_delete
            if (preg_match('#^/homepage/provincia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_homepage_provincia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage_provincia_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProvinciaController::deleteAction',));
            }
            not_homepage_provincia_delete:

        }

        if (0 === strpos($pathinfo, '/telefono')) {
            // telefono_index
            if (rtrim($pathinfo, '/') === '/telefono') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_telefono_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'telefono_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TelefonoController::indexAction',  '_route' => 'telefono_index',);
            }
            not_telefono_index:

            // telefono_new
            if ($pathinfo === '/telefono/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_telefono_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TelefonoController::newAction',  '_route' => 'telefono_new',);
            }
            not_telefono_new:

            // telefono_show
            if (preg_match('#^/telefono/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_telefono_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_show')), array (  '_controller' => 'AppBundle\\Controller\\TelefonoController::showAction',));
            }
            not_telefono_show:

            // telefono_edit
            if (preg_match('#^/telefono/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_telefono_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_edit')), array (  '_controller' => 'AppBundle\\Controller\\TelefonoController::editAction',));
            }
            not_telefono_edit:

            // telefono_delete
            if (preg_match('#^/telefono/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_telefono_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_delete')), array (  '_controller' => 'AppBundle\\Controller\\TelefonoController::deleteAction',));
            }
            not_telefono_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
