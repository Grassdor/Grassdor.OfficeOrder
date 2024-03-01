<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Avatars;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('username', TextType::class, [
            'label' => 'Имя пользователя',
            'row_attr' => [
                'class' => "form-floating mb-3"
            ],
            'attr' => [
                'class' => 'form-control',
                'placeholder' => ''
            ]
        ])
            ->add('avatars', ChoiceType::class, [
                "choices" => [
                    new Avatars("avatar1"),
                    new Avatars("avatar2"),
                    new Avatars("avatar3"),
                    new Avatars("avatar4"),
                    new Avatars("avatar5"),
                ],
                'choice_value' => 'name',
                'choice_label' => function (?Avatars $category): string {
                    return $category ? strtoupper($category->getName()) : '';
                },
                'choice_attr' => function (?Avatars $category): array {
                    return $category ? ['class' => 'category_'.strtolower($category->getName())] : [];
                },
                'group_by' => function (): string {
                    // randomly assign things into 2 groups
                    return rand(0, 1) === 1 ? 'Group A' : 'Group B';
                },
                // 'preferred_choices' => function (?Avatars $category): bool {
                //     return $category && 100 < $category->getArticleCounts();
                // },
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Войти',
                'row_attr' => [
                    'class' => 'd-flex w-100'
                ],
                'attr' => [
                    'class' => "btn mx-auto"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'row_attr' => [
                "class" => 'd-flex flex-column'
            ],
        ]);
    }
}