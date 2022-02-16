<?php

namespace App\Controller\Admin;

use App\Entity\Mainset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return $this->render('@EasyAdmin/page/content.html.twig');
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(MainsetCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
        // the name visible to end users
        ->setTitle('')
        // you can include HTML contents too (e.g. to link to an image)
        ->setTitle(' VAI <span class="text-small"> SPORT.</span>')

        // the path defined in this method is passed to the Twig asset() function
        ->setFaviconPath('favicon.svg')

        // the domain used by default is 'messages'
        ->setTranslationDomain('my-custom-domain')

        // there's no need to define the "text direction" explicitly because
        // its default value is inferred dynamically from the user locale
        ->setTextDirection('ltr')

        // set this option if you prefer the page content to span the entire
        // browser width, instead of the default design which sets a max width
        ->renderContentMaximized()

        // set this option if you prefer the sidebar (which contains the main menu)
        // to be displayed as a narrow column instead of the default expanded design


        // by default, all backend URLs include a signature hash. If a user changes any
        // query parameter (to "hack" the backend) the signature won't match and EasyAdmin
        // triggers an error. If this causes any issue in your backend, call this method
        // to disable this feature and remove all URL signature checks
        ->disableUrlSignatures()

        // by default, all backend URLs are generated as absolute URLs. If you
        // need to generate relative URLs instead, call this method
        ->generateRelativeUrls();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Test', 'fa fa-tags', Mainset::class);
    }

}
