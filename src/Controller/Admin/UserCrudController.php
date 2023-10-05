<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'ID')
                ->hideOnForm()
                ->hideOnIndex(),
            TextField::new('email')
                ->setFormType(EmailType::class)
                ->formatValue(function ($email) {
                    // remove the @ynov.com or something else
                    return substr($email, 0, strpos($email, '@'));
                }),
            TextField::new('password')
                ->onlyWhenCreating()
                ->setFormType(PasswordType::class),
            ArrayField::new('roles'),
            IntegerField::new('etat.id', 'Etat')
            ->formatValue(function ($value) {
                if ($value == 1)
                    return '<button disabled style="background-color:red; border:none; border-radius:5px; padding:5px; color:white;">Closed</button>';
                if ($value == 2)
                    return '<button disabled style="background-color:orange; border:none; border-radius:5px; padding:5px; color:white;">Key Needed</button>';
                if ($value == 3)
                    return '<button disabled style="background-color:green; border:none; border-radius:5px; padding:5px; color:white;">Open</button>';
                return null;
            })
            ->hideOnForm(),
            AssociationField::new('etat')
            ->hideOnIndex()
                ->setFormType(EntityType::class)
                ->setFormTypeOptions([
                    'class' => 'App\Entity\Etat',
                    'choice_label' => 'Label',
                ]),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions;
        // ->remove(Crud::PAGE_INDEX, Action::NEW);
    }
}
