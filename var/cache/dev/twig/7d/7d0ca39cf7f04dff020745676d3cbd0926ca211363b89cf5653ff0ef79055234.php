<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ebfeb77b3fe5e262b1879e6a96b220590389df9bf12de5706fb5a69d59c4893c extends Twig_Template
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
        $__internal_725354cf6cf2433a455685b642f0affbf1d1b1493225e74f9c920d18b9d18211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725354cf6cf2433a455685b642f0affbf1d1b1493225e74f9c920d18b9d18211->enter($__internal_725354cf6cf2433a455685b642f0affbf1d1b1493225e74f9c920d18b9d18211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_05aea6d09cd101dcad5ac8d7efc4af391863b2a23858f1943b8406ee0c8a6743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aea6d09cd101dcad5ac8d7efc4af391863b2a23858f1943b8406ee0c8a6743->enter($__internal_05aea6d09cd101dcad5ac8d7efc4af391863b2a23858f1943b8406ee0c8a6743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_725354cf6cf2433a455685b642f0affbf1d1b1493225e74f9c920d18b9d18211->leave($__internal_725354cf6cf2433a455685b642f0affbf1d1b1493225e74f9c920d18b9d18211_prof);

        
        $__internal_05aea6d09cd101dcad5ac8d7efc4af391863b2a23858f1943b8406ee0c8a6743->leave($__internal_05aea6d09cd101dcad5ac8d7efc4af391863b2a23858f1943b8406ee0c8a6743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
