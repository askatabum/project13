<?php
namespace AppBundle\Service;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {

    protected $router;
    protected $authorizationChecker;

    public function __construct(Router $router, AuthorizationChecker $authorizationChecker) {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

        $response = null;

        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('admin_homepage'));
        }
        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $response = new RedirectResponse($this->router->generate('admin_homepage'));
        }
        if ($this->authorizationChecker->isGranted('ROLE_CRM')) {
            $response = new RedirectResponse($this->router->generate('crm_homepage'));
        }
        if ($this->authorizationChecker->isGranted('ROLE_CUSTOMER')) {
            $response = new RedirectResponse($this->router->generate('customer_homepage'));
        }
        if ($this->authorizationChecker->isGranted('ROLE_SERVICE')) {
            $response = new RedirectResponse($this->router->generate('service_homepage'));
        }
        if ($this->authorizationChecker->isGranted('ROLE_SERVICEMAN')) {
            $response = new RedirectResponse($this->router->generate('serviceman_homepage'));
        }       
        if ($this->authorizationChecker->isGranted('ROLE_OPERATOR')) {
            $response = new RedirectResponse($this->router->generate('operator_homepage'));
        }     
        return $response;
    }

}
