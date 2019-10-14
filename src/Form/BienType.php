<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HTTPFoundation\Session\Response;
use Symfony\Component\HTTPFoundation\Session\Request;
use App\Entity\Type;
use App\Entity\Bien;

class BienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('nbChambre', NumberType::class,array('label'=>'nombre de chambre','required'=>true))
            ->add('nbPiece',NumberType::class,array('label'=>'nombre de piece','required'=>true))
            ->add('superficie',NumberType::class,array('label'=>'superficie','required'=>true))
            ->add('prix', NumberType::class,array('label'=>'prix','required'=>true))
            ->add('chauffage', TextType::class,array('label'=>'chauffage','required'=>true))    
            ->add('annee', NumberType::class,array('label'=>'année','required'=>true))    
            ->add('localisation', TextType::class,array('label'=>'localisation','required'=>true))
            ->add('etat', TextType::class,array('label'=>'état','required'=>true))
            ->add('id_type', EntityType::class,array('class'=>Type::class,'label'=>'type de logement','required'=>true,'choice_label'=>'libelle'))   
            ->add('valider',SubmitType::class)
            ->add('annuler',ResetType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
