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
        $__internal_3140408789ac5610457e30deebc49854fd64889ca531ba28c88ee260fb00e8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3140408789ac5610457e30deebc49854fd64889ca531ba28c88ee260fb00e8ed->enter($__internal_3140408789ac5610457e30deebc49854fd64889ca531ba28c88ee260fb00e8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0fe29ff6b357f9d3da84849ff538434d35fc5f86b22b4bc7e3c827f93e93c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe29ff6b357f9d3da84849ff538434d35fc5f86b22b4bc7e3c827f93e93c8b1->enter($__internal_0fe29ff6b357f9d3da84849ff538434d35fc5f86b22b4bc7e3c827f93e93c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3140408789ac5610457e30deebc49854fd64889ca531ba28c88ee260fb00e8ed->leave($__internal_3140408789ac5610457e30deebc49854fd64889ca531ba28c88ee260fb00e8ed_prof);

        
        $__internal_0fe29ff6b357f9d3da84849ff538434d35fc5f86b22b4bc7e3c827f93e93c8b1->leave($__internal_0fe29ff6b357f9d3da84849ff538434d35fc5f86b22b4bc7e3c827f93e93c8b1_prof);

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
