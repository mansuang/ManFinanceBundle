<?php

namespace Man\FinanceBundle\Form\Card;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CardType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('begin_cost')
            ->add('card_status')
            ->add('contract_style')
            ->add('contract_date')
            ->add('cycle_day')
            ->add('interest_percent')
            ->add('interest_last_percent')
            ->add('allow_day_late')
            ->add('last_payment_date')
            ->add('next_payment_date')
            ->add('current_due_date')
            ->add('next_due_date')
            ->add('current_cost')
            ->add('current_interest')
            ->add('current_fine')
            ->add('ip_address')
            ->add('is_deleted')
            ->add('created_at')
            ->add('update_at')
            ->add('branch')
            ->add('employee')
            ->add('owner')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\Card'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'man_financebundle_card_dec';
    }
}
