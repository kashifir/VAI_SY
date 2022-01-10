<?php

namespace App\Controller\Admin;

use App\Entity\TestDev;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestDevCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestDev::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
