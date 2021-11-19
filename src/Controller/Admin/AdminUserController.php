<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class AdminUserController extends AdminBaseController
{
    #[Route('/admin/user', name: 'admin_user')]
    public function index(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $forRender = parent::renderDefault();
        $forRender['title'] = 'Users';
        $forRender['users'] = $users;
        return $this->render('admin/user/index.html.twig',  $forRender);
    }
}
