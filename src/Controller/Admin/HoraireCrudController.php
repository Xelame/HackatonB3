<?php

namespace App\Controller\Admin;

use App\Entity\Horaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class HoraireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Horaire::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('beginDate'),
            DateTimeField::new('endDate'),
            TextField::new('user.email', 'User')
            ->hideOnForm(),
            AssociationField::new('user', 'User')
                ->setFormTypeOptions([
                    'class' => 'App\Entity\User',
                    'choice_label' => 'email',
                    'choice_value' => 'id',
                ])
            ->hideOnIndex()
            
        ];
    }
    
}
