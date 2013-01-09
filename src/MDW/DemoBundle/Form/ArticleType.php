<?php
namespace MDW\DemoBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('author')
                ->add('content')
                ->add('tags')
                ->add('slug')
                ->add('category')
                ->add('updated')
                ->add('created');
    }
    public function getName()
    {
        return 'article_form';
    }
}
