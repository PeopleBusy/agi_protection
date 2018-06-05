<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74dbdc65411cb5beb07ae33382bbae1a5b57ebd1f177c28d715da8705b1244a9 extends Twig_Template
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
        $__internal_6c4384a594be342d1aa805213acd8daa6f71923a9e7c7f49bed137edb976e335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4384a594be342d1aa805213acd8daa6f71923a9e7c7f49bed137edb976e335->enter($__internal_6c4384a594be342d1aa805213acd8daa6f71923a9e7c7f49bed137edb976e335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_96a184159381480c9f4554e71f15addad71a4690f9f5955aa36fa1296a72517b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a184159381480c9f4554e71f15addad71a4690f9f5955aa36fa1296a72517b->enter($__internal_96a184159381480c9f4554e71f15addad71a4690f9f5955aa36fa1296a72517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6c4384a594be342d1aa805213acd8daa6f71923a9e7c7f49bed137edb976e335->leave($__internal_6c4384a594be342d1aa805213acd8daa6f71923a9e7c7f49bed137edb976e335_prof);

        
        $__internal_96a184159381480c9f4554e71f15addad71a4690f9f5955aa36fa1296a72517b->leave($__internal_96a184159381480c9f4554e71f15addad71a4690f9f5955aa36fa1296a72517b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
