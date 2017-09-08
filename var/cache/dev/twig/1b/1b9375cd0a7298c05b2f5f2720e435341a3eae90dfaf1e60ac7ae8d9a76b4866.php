<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_fe3caac7210d0890cc91f033de891dd311404dee2744848efae500c1bc160d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3caac7210d0890cc91f033de891dd311404dee2744848efae500c1bc160d0a->enter($__internal_fe3caac7210d0890cc91f033de891dd311404dee2744848efae500c1bc160d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a097271dbee7766accd82eea6b1c2c1dcff691030b68402e0e5e860b80c911ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a097271dbee7766accd82eea6b1c2c1dcff691030b68402e0e5e860b80c911ae->enter($__internal_a097271dbee7766accd82eea6b1c2c1dcff691030b68402e0e5e860b80c911ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_fe3caac7210d0890cc91f033de891dd311404dee2744848efae500c1bc160d0a->leave($__internal_fe3caac7210d0890cc91f033de891dd311404dee2744848efae500c1bc160d0a_prof);

        
        $__internal_a097271dbee7766accd82eea6b1c2c1dcff691030b68402e0e5e860b80c911ae->leave($__internal_a097271dbee7766accd82eea6b1c2c1dcff691030b68402e0e5e860b80c911ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
