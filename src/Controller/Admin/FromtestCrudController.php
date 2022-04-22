<?php

namespace App\Controller\Admin;

use App\Entity\Fromtest;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FromtestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fromtest::class;
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
