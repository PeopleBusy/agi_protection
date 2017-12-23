<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_207686c754c99085e19079cf3fc7dabc29c886ee107a9cf015144defdb79c98b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8595660698b9246740ab5d05c5de693dbba22f0d9bc89bd0299593a73556d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8595660698b9246740ab5d05c5de693dbba22f0d9bc89bd0299593a73556d4->enter($__internal_bd8595660698b9246740ab5d05c5de693dbba22f0d9bc89bd0299593a73556d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b8550510f806578da7b9de23e9ad230731f0b5314b2b5f75c28250e75c7e7de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8550510f806578da7b9de23e9ad230731f0b5314b2b5f75c28250e75c7e7de1->enter($__internal_b8550510f806578da7b9de23e9ad230731f0b5314b2b5f75c28250e75c7e7de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bd8595660698b9246740ab5d05c5de693dbba22f0d9bc89bd0299593a73556d4->leave($__internal_bd8595660698b9246740ab5d05c5de693dbba22f0d9bc89bd0299593a73556d4_prof);

        
        $__internal_b8550510f806578da7b9de23e9ad230731f0b5314b2b5f75c28250e75c7e7de1->leave($__internal_b8550510f806578da7b9de23e9ad230731f0b5314b2b5f75c28250e75c7e7de1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
