<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_94c335c9f0e709d7a0879f03f688d40ed0b8526a8c9560153af31c49e6ed59ea extends Twig_Template
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
        $__internal_258a1299a592908d02fc3509255aa521cd363617c525464c259a9acdb16c872b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258a1299a592908d02fc3509255aa521cd363617c525464c259a9acdb16c872b->enter($__internal_258a1299a592908d02fc3509255aa521cd363617c525464c259a9acdb16c872b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b9408f6997d3d1ce14dbbef81e448ae6359403a2d8d497901d047c88e298d349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9408f6997d3d1ce14dbbef81e448ae6359403a2d8d497901d047c88e298d349->enter($__internal_b9408f6997d3d1ce14dbbef81e448ae6359403a2d8d497901d047c88e298d349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_258a1299a592908d02fc3509255aa521cd363617c525464c259a9acdb16c872b->leave($__internal_258a1299a592908d02fc3509255aa521cd363617c525464c259a9acdb16c872b_prof);

        
        $__internal_b9408f6997d3d1ce14dbbef81e448ae6359403a2d8d497901d047c88e298d349->leave($__internal_b9408f6997d3d1ce14dbbef81e448ae6359403a2d8d497901d047c88e298d349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
