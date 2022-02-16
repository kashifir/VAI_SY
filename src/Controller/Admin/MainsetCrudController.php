<?php

namespace App\Controller\Admin;

use App\Entity\Mainset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MainsetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mainset::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions

            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER)
            ;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the names of the Doctrine entity properties where the search is made on
            // (by default it looks for in all properties)
            ->setSearchFields(['noms', 'dataCategory'])
            // use dots (e.g. 'seller.email') to search in Doctrine associations
           // ->setSearchFields(['name', 'description', 'seller.email', 'seller.address.zipCode'])
            // set it to null to disable and hide the search box
            ->setSearchFields(['noms','dataCategory'])

            // defines the initial sorting applied to the list of entities
            // (user can later change this sorting by clicking on the table columns)

            // you can sort by Doctrine associations up to two levels

            // the max number of entities to display per page
            ->setPaginatorPageSize(100)

            // the number of pages to display on each side of the current page
            // e.g. if num pages = 35, current page = 7 and you set ->setPaginatorRangeSize(4)
            // the paginator displays: [Previous]  1 ... 3  4  5  6  [7]  8  9  10  11 ... 35  [Next]
            // set this number to 0 to display a simple "< Previous | Next >" pager
            ->setPaginatorRangeSize(4)

            // these are advanced options related to Doctrine Pagination
            // (see https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/tutorials/pagination.html)
            ->setPaginatorUseOutputWalkers(true)
            ->setPaginatorFetchJoinCollection(true)
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('noms'),
            TextField::new('UnitDeMesure'),
            TextField::new('thresholdMin'),
            TextField::new('thresholdMax'),
            TextField::new('condition1'),
            TextField::new('barre'),
            TextField::new('Points1deBarre'),
            TextField::new('Condition2deBarre'),
            TextField::new('Points2deBarre'),
            TextField::new('Condition3deBarre'),
            TextField::new('Points3deBarre'),
            TextField::new('Condition4deBarre'),
            TextField::new('Points4deBarre'),
            TextField::new('Condition5deBarre'),
            TextField::new('Points5deBarre'),
            TextField::new('Condition6deBarre'),
            TextField::new('Points6deBarre'),
            TextField::new('Barre2'),
            TextField::new('Points1deBarre2'),
            TextField::new('Condition2deBarre2'),
            TextField::new('Points2deBarre2'),
            TextField::new('Condition3deBarre2'),
            TextField::new('Points3deBarre2'),
            TextField::new('Condition4deBarre2'),
            TextField::new('Points4deBarre2'),


        ];
    }

}
