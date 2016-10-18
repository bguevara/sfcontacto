<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // _app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_app_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexRedirectAction',  '_route' => '_app_homepage',);
        }

        if (0 === strpos($pathinfo, '/app')) {
            if (0 === strpos($pathinfo, '/app/admin')) {
                // app_homepage
                if ($pathinfo === '/app/admin') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_homepage',);
                }

                // app_admin_create_mensajesm
                if ($pathinfo === '/app/admin/create/mensajesm') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_admin_create_mensajesm;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createMensajesmAction',  '_route' => 'app_admin_create_mensajesm',);
                }
                not_app_admin_create_mensajesm:

                // app_admin_mensajes
                if ($pathinfo === '/app/admin/Mensajes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\MensajesController::indexAction',  '_route' => 'app_admin_mensajes',);
                }

                // app_admin_edit_mensajes
                if (0 === strpos($pathinfo, '/app/admin/edit/mensajes') && preg_match('#^/app/admin/edit/mensajes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_edit_mensajes')), array (  '_controller' => 'AppBundle\\Controller\\MensajesController::editMensajesAction',));
                }

                // app_admin_update_mensajes
                if (0 === strpos($pathinfo, '/app/admin/update/mensajes') && preg_match('#^/app/admin/update/mensajes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_admin_update_mensajes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_update_mensajes')), array (  '_controller' => 'AppBundle\\Controller\\MensajesController::updateMensajesAction',));
                }
                not_app_admin_update_mensajes:

                // app_admin_new_mensajes
                if ($pathinfo === '/app/admin/new/mensajes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\MensajesController::newMensajesAction',  '_route' => 'app_admin_new_mensajes',);
                }

                // app_admin_create_mensajes
                if ($pathinfo === '/app/admin/create/mensajes') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_admin_create_mensajes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MensajesController::createMensajesAction',  '_route' => 'app_admin_create_mensajes',);
                }
                not_app_admin_create_mensajes:

                // app_admin_mensajes_search
                if ($pathinfo === '/app/admin/search/mensajes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\MensajesController::searchAction',  '_route' => 'app_admin_mensajes_search',);
                }

                // app_admin_delete_mensajes
                if (0 === strpos($pathinfo, '/app/admin/delete/mensajes') && preg_match('#^/app/admin/delete/mensajes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_delete_mensajes')), array (  '_controller' => 'AppBundle\\Controller\\MensajesController::removeMensajesAction',));
                }

                // opt_all_mensajes
                if ($pathinfo === '/app/admin/consult_mensajes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\MensajesController::selectMensajespublico',  '_route' => 'opt_all_mensajes',);
                }

                if (0 === strpos($pathinfo, '/app/admin/reportes')) {
                    // app_admin_reportes_planillareservacion
                    if ($pathinfo === '/app/admin/reportes/planillareservacion') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::reportePlanillaReservacionAction',  '_route' => 'app_admin_reportes_planillareservacion',);
                    }

                    if (0 === strpos($pathinfo, '/app/admin/reportes/generar_planilla_reservas')) {
                        // app_admin_reportes_gen_planillareserva
                        if ($pathinfo === '/app/admin/reportes/generar_planilla_reservas') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_app_admin_reportes_gen_planillareserva;
                            }

                            return array (  '_format' => 'pdf',  '_controller' => 'AppBundle\\Controller\\ReportesController::generarPlanillaReservaAction',  '_route' => 'app_admin_reportes_gen_planillareserva',);
                        }
                        not_app_admin_reportes_gen_planillareserva:

                        // app_admin_reportes_gen_planillareservaid
                        if (0 === strpos($pathinfo, '/app/admin/reportes/generar_planilla_reservasid') && preg_match('#^/app/admin/reportes/generar_planilla_reservasid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_reportes_gen_planillareservaid')), array (  '_format' => 'pdf',  '_controller' => 'AppBundle\\Controller\\ReportesController::generarPlanillaReservaidAction',));
                        }

                    }

                }

            }

            // app_publica_reportes_gen_planillareservaid
            if (0 === strpos($pathinfo, '/app/publica/reportes/generar_planilla_reservasid') && preg_match('#^/app/publica/reportes/generar_planilla_reservasid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_publica_reportes_gen_planillareservaid')), array (  '_format' => 'pdf',  '_controller' => 'AppBundle\\Controller\\ReportesController::generarPlanillaPublicaReservaidAction',));
            }

            if (0 === strpos($pathinfo, '/app/admin/reportes')) {
                // app_admin_index_reporte_tiporeservacion
                if ($pathinfo === '/app/admin/reportes/indexreportetiporeservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::index_reporte_tiporeservacionAction',  '_route' => 'app_admin_index_reporte_tiporeservacion',);
                }

                // app_admin_reporte_tiporeservacion
                if ($pathinfo === '/app/admin/reportes/reportetiporeservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::reporteTipoReservacion',  '_route' => 'app_admin_reporte_tiporeservacion',);
                }

                // app_admin_index_reporte_pagadareservacion
                if ($pathinfo === '/app/admin/reportes/indexreportepagadareservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::index_reporte_reservacionPagadaAction',  '_route' => 'app_admin_index_reporte_pagadareservacion',);
                }

                // app_admin_reporte_pagadareservacion
                if ($pathinfo === '/app/admin/reportes/reportepagadareservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::reportePagadaReservacion',  '_route' => 'app_admin_reporte_pagadareservacion',);
                }

                // app_admin_index_reporte_porpagarreservacion
                if ($pathinfo === '/app/admin/reportes/indexreporteporpagarreservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::index_reporte_reservacionPorPagarAction',  '_route' => 'app_admin_index_reporte_porpagarreservacion',);
                }

                // app_admin_reporte_porpagarreservacion
                if ($pathinfo === '/app/admin/reportes/reporteporpagarreservacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::reporteporpagarReservacion',  '_route' => 'app_admin_reporte_porpagarreservacion',);
                }

                // app_admin_index_reporte_reservacionExcel
                if ($pathinfo === '/app/admin/reportes/indexreporteExcel') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::index_reporte_reservacionExcelAction',  '_route' => 'app_admin_index_reporte_reservacionExcel',);
                }

                // app_admin_reporte_reservasexcel
                if ($pathinfo === '/app/admin/reportes/reportereservasexcel') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReportesController::generarReporteReservasEXCELAction',  '_route' => 'app_admin_reporte_reservasexcel',);
                }

            }

            if (0 === strpos($pathinfo, '/app/log')) {
                if (0 === strpos($pathinfo, '/app/login')) {
                    // app_admin_login
                    if ($pathinfo === '/app/login') {
                        return array (  '_controller' => 'UsersBundle\\Controller\\AdminController::loginAction',  '_route' => 'app_admin_login',);
                    }

                    // app_admin_login_check
                    if ($pathinfo === '/app/login_check') {
                        return array('_route' => 'app_admin_login_check');
                    }

                }

                // app_admin_logout
                if ($pathinfo === '/app/logout') {
                    return array('_route' => 'app_admin_logout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
