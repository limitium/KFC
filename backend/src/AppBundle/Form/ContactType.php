<?php


namespace AppBundle\Form;

use AppBundle\Entity\KfContactManagers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contactid', 'text', array(
                'required' => false
            ))
            ->add('contactDetail', new ContactDetailType())
            ->add('lastname')
            ->add('firstname')
            ->add('middlename')
            ->add('mobile')
            ->add('workphone')
            ->add('homephone')
            ->add('managers', 'collection', array(
                'type' => new UserinfoType(),
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true
            ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact',
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
