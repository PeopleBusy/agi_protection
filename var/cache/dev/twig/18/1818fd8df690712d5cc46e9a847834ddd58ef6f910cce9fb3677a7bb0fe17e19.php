<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_45e1cf2bf4d904e9546cee02ed829f60427d878009660df834d2d4258faa25ab extends Twig_Template
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
        $__internal_97c26c8fc2a97eeb945391984700b82bfcb4b6f27fdc5d10a25efeebb32396b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c26c8fc2a97eeb945391984700b82bfcb4b6f27fdc5d10a25efeebb32396b0->enter($__internal_97c26c8fc2a97eeb945391984700b82bfcb4b6f27fdc5d10a25efeebb32396b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_82bc51c3f87b8f4b26141ffb0966fa3b80c0c2afb7d3a65a1d1c37d3c1ac2ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bc51c3f87b8f4b26141ffb0966fa3b80c0c2afb7d3a65a1d1c37d3c1ac2ff0->enter($__internal_82bc51c3f87b8f4b26141ffb0966fa3b80c0c2afb7d3a65a1d1c37d3c1ac2ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_97c26c8fc2a97eeb945391984700b82bfcb4b6f27fdc5d10a25efeebb32396b0->leave($__internal_97c26c8fc2a97eeb945391984700b82bfcb4b6f27fdc5d10a25efeebb32396b0_prof);

        
        $__internal_82bc51c3f87b8f4b26141ffb0966fa3b80c0c2afb7d3a65a1d1c37d3c1ac2ff0->leave($__internal_82bc51c3f87b8f4b26141ffb0966fa3b80c0c2afb7d3a65a1d1c37d3c1ac2ff0_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
