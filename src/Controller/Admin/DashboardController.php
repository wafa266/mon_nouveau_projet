<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Produits;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }
    /**
     * @Route("/admin/update", name="admin_update
     * ")
     */
    public function update()
    {
        echo 'Je suis là';die;
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mon Nouveau Projet')
            ->setTitle('<img src="..."> Innovup <span class="text-small">Store</span>')
            //->setFaviconPath('favicon.svg')

            ->setTranslationDomain('my-custom-domain')

            ->setTextDirection('ltr')
            ->renderContentMaximized()
            ->renderSidebarMinimized()
            ->disableUrlSignatures()
            ;
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Produits', 'fa fa-cart-plus', Produits::class);
        yield MenuItem::linkToCrud('Catégories', 'fa fa-cog', Categorie::class);
    }
}
