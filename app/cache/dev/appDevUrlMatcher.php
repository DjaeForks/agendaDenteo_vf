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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // command_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'command_homepage');
            }

            return array (  '_controller' => 'command\\commandBundle\\Controller\\DefaultController::indexAction',  '_route' => 'command_homepage',);
        }

        if (0 === strpos($pathinfo, '/patient')) {
            // patient_index
            if (rtrim($pathinfo, '/') === '/patient') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patient_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patient_index');
                }

                return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::indexAction',  '_route' => 'patient_index',);
            }
            not_patient_index:

            // patient_show
            if (preg_match('#^/patient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patient_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_show')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::showAction',));
            }
            not_patient_show:

            // patient_new
            if ($pathinfo === '/patient/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_patient_new;
                }

                return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::newAction',  '_route' => 'patient_new',);
            }
            not_patient_new:

            // patient_edit
            if (preg_match('#^/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_patient_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_edit')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::editAction',));
            }
            not_patient_edit:

            // patient_delete
            if (preg_match('#^/patient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_patient_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_delete')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::deleteAction',));
            }
            not_patient_delete:

        }

        // patient_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'patient_homepage');
            }

            return array (  '_controller' => 'PatientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'patient_homepage',);
        }

        if (0 === strpos($pathinfo, '/rdvType')) {
            // rdvtype_new
            if ($pathinfo === '/rdvType/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rdvtype_new;
                }

                return array (  '_controller' => 'EvenementBundle\\Controller\\RdvTypeController::newAction',  '_route' => 'rdvtype_new',);
            }
            not_rdvtype_new:

            // rdvtype_edit
            if (preg_match('#^/rdvType/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rdvtype_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvtype_edit')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvTypeController::editAction',));
            }
            not_rdvtype_edit:

            // rdvtype_delete
            if (0 === strpos($pathinfo, '/rdvType/delete') && preg_match('#^/rdvType/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rdvtype_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvtype_delete')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvTypeController::deleteAction',));
            }
            not_rdvtype_delete:

        }

        // evenement_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'evenement_homepage');
            }

            return array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::allRdvsAction',  '_route' => 'evenement_homepage',);
        }

        // agenda
        if ($pathinfo === '/agenda') {
            return array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::newAction',  '_route' => 'agenda',);
        }

        // new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::newRdvAction',  '_route' => 'new',);
        }

        // allRdvs
        if ($pathinfo === '/all') {
            return array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::allRdvsAction',  '_route' => 'allRdvs',);
        }

        // drop
        if (0 === strpos($pathinfo, '/drop') && preg_match('#^/drop(?:/(?P<id>[^/]++)(?:/(?P<start>[^/]++)(?:/(?P<startH>[^/]++)(?:/(?P<end>[^/]++)(?:/(?P<endH>[^/]++))?)?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'drop')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::dropAction',  'id' => 1,  'start' => 2,  'startH' => 3,  'end' => 4,  'endH' => 5,));
        }

        // resize_rdv
        if (0 === strpos($pathinfo, '/resize') && preg_match('#^/resize(?:/(?P<id>[^/]++)(?:/(?P<end>[^/]++)(?:/(?P<endH>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resize_rdv')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::resizeAction',  'id' => 1,  'end' => 2,  'endH' => 3,));
        }

        // deleteRdv
        if (0 === strpos($pathinfo, '/deleted') && preg_match('#^/deleted(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteRdv')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::deletedAction',  'id' => 1,));
        }

        // selectRdv
        if (0 === strpos($pathinfo, '/select') && preg_match('#^/select(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'selectRdv')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::getSelectedAction',  'id' => 1,));
        }

        // updateRdv
        if (0 === strpos($pathinfo, '/rdv_modif') && preg_match('#^/rdv_modif(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateRdv')), array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::editerAction',  'id' => 1,));
        }

        // addDel
        if (0 === strpos($pathinfo, '/addDel') && preg_match('#^/addDel(?:/(?P<start>[^/]++)(?:/(?P<end>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addDel')), array (  '_controller' => 'EvenementBundle\\Controller\\DelimiteurController::addDelAction',  'start' => 1,  'end' => 2,));
        }

        // load_events
        if ($pathinfo === '/load') {
            return array (  '_controller' => 'EvenementBundle\\Controller\\RdvController::chargeEventsAction',  '_route' => 'load_events',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // configuration_edit
            if (0 === strpos($pathinfo, '/configuration/edit') && preg_match('#^/configuration/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_configuration_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuration_edit')), array (  '_controller' => 'EvenementBundle\\Controller\\ConfigurationController::editAction',));
            }
            not_configuration_edit:

            // cronJob_Test
            if (rtrim($pathinfo, '/') === '/cronJobTest') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cronJob_Test');
                }

                return array (  '_controller' => 'EvenementBundle\\Controller\\ConfigurationController::testJobQueueAction',  '_route' => 'cronJob_Test',);
            }

        }

        // dashboord_test
        if ($pathinfo === '/dashboord') {
            return array (  '_controller' => 'EvenementBundle\\Controller\\AcueilController::dashboordAction',  '_route' => 'dashboord_test',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            // test_mailler
            if (0 === strpos($pathinfo, '/testMailler') && preg_match('#^/testMailler(?:/(?P<mail>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_mailler')), array (  '_controller' => 'EvenementBundle\\Controller\\AcueilController::sendMailToPatientAction',  'mail' => 1,));
            }

            // test_twilio
            if ($pathinfo === '/testTwilio') {
                return array (  '_controller' => 'EvenementBundle\\Controller\\AcueilController::sendSmsToPatientAction',  '_route' => 'test_twilio',);
            }

        }

        // users_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'users_homepage');
            }

            return array (  '_controller' => 'UsersBundle\\Controller\\UsersController::indexAction',  '_route' => 'users_homepage',);
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

        if (0 === strpos($pathinfo, '/j')) {
            // fos_js_routing_js
            if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            }

            if (0 === strpos($pathinfo, '/jobs')) {
                // jms_jobs_overview
                if (rtrim($pathinfo, '/') === '/jobs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'jms_jobs_overview');
                    }

                    return array (  '_controller' => 'JMS\\JobQueueBundle\\Controller\\JobController::overviewAction',  '_route' => 'jms_jobs_overview',);
                }

                // jms_jobs_details
                if (preg_match('#^/jobs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_jobs_details')), array (  '_controller' => 'JMS\\JobQueueBundle\\Controller\\JobController::detailsAction',));
                }

                // jms_jobs_retry_job
                if (preg_match('#^/jobs/(?P<id>[^/]++)/retry$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_jobs_retry_job')), array (  '_controller' => 'JMS\\JobQueueBundle\\Controller\\JobController::retryJobAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
