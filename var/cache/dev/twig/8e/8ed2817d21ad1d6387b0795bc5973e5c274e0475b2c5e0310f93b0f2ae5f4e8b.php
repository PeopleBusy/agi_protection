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
        $__internal_a6bc018b1dd0a5f1014ad38c4cc1a4112f7c5194cb4c224a2adbb386b1c23a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bc018b1dd0a5f1014ad38c4cc1a4112f7c5194cb4c224a2adbb386b1c23a04->enter($__internal_a6bc018b1dd0a5f1014ad38c4cc1a4112f7c5194cb4c224a2adbb386b1c23a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2c65c754d7647ae6eba70ea90995c49d17db45775efa15863fe6ad267dcf8841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c65c754d7647ae6eba70ea90995c49d17db45775efa15863fe6ad267dcf8841->enter($__internal_2c65c754d7647ae6eba70ea90995c49d17db45775efa15863fe6ad267dcf8841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a6bc018b1dd0a5f1014ad38c4cc1a4112f7c5194cb4c224a2adbb386b1c23a04->leave($__internal_a6bc018b1dd0a5f1014ad38c4cc1a4112f7c5194cb4c224a2adbb386b1c23a04_prof);

        
        $__internal_2c65c754d7647ae6eba70ea90995c49d17db45775efa15863fe6ad267dcf8841->leave($__internal_2c65c754d7647ae6eba70ea90995c49d17db45775efa15863fe6ad267dcf8841_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
