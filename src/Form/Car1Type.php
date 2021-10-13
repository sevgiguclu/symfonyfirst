<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\Category;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class Car1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('category',EntityType::class,[
                'class' => Category::class,
                'choice_label' => 'title',
            ])
            ->add('title')
            ->add('keywords')
            ->add('description')

            ->add('image',FileType::class, [
                'label' => 'Car Main Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image File',
                    ])
                ],
            ])

            ->add('type')
            ->add('marka',ChoiceType::class,[
                'choices' => [
                    'Audi' => 'Audi',
                    'BMW' => 'BMW',
                    'Citroen' => 'Citroen',
                    'Ferrari' => 'Ferrari',
                ],
            ])
            ->add('fuel_type',ChoiceType::class,[
                'choices' => [
                    'dizel' => 'dizel',
                    'benzin' => 'benzin',
                    'lpg ' => 'lpg ',
                    'elektrik' => 'elektrik',
                ],
            ])
            ->add('gear_shape')
            ->add('model_year')
            ->add('km')
            ->add('price')
            ->add('city',ChoiceType::class,[
                'choices' => [
                    'Ankara' => 'Ankara',
                    'Istanbul' => 'Istanbul',
                    'Eskisehir ' => 'Eskisehir',
                    'Izmir' => 'Izmir',
                ],
            ])
            ->add('detail',CKEditorType::class,array(
                'config' => array(
                    'uiColor' => '#ffffff'
                ),
            ))

            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
