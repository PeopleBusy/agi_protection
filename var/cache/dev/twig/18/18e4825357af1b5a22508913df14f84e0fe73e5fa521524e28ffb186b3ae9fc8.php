<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_461fed3294067ab5e7373a8b92cedc12b6e83b899d945e51b07a6e0df96844d6 extends Twig_Template
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
        $__internal_fb813fbce832a828bec9cda0fb42ecd0b01b90a7efe1682ab37a1a49f9d12c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb813fbce832a828bec9cda0fb42ecd0b01b90a7efe1682ab37a1a49f9d12c31->enter($__internal_fb813fbce832a828bec9cda0fb42ecd0b01b90a7efe1682ab37a1a49f9d12c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ebfde90c23b3697d7e23755d0d4c092995ccff4cba88397e66b3454c84f331bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfde90c23b3697d7e23755d0d4c092995ccff4cba88397e66b3454c84f331bd->enter($__internal_ebfde90c23b3697d7e23755d0d4c092995ccff4cba88397e66b3454c84f331bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fb813fbce832a828bec9cda0fb42ecd0b01b90a7efe1682ab37a1a49f9d12c31->leave($__internal_fb813fbce832a828bec9cda0fb42ecd0b01b90a7efe1682ab37a1a49f9d12c31_prof);

        
        $__internal_ebfde90c23b3697d7e23755d0d4c092995ccff4cba88397e66b3454c84f331bd->leave($__internal_ebfde90c23b3697d7e23755d0d4c092995ccff4cba88397e66b3454c84f331bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
