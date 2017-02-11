<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Esprit\socialproBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{

    public function loginAction(Request $request)
    {
        $authChecker = $this->get('security.authorization_checker');

        if ($authChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('espritsocialpro_homepage');
        }

        return parent::loginAction($request);
    }


}
