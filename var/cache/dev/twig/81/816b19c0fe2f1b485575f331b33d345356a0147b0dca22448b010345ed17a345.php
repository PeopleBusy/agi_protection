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
        $__internal_a61efd754ddb5054b263be561d37e5ad242d45d65f484852d2b1808c760efbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61efd754ddb5054b263be561d37e5ad242d45d65f484852d2b1808c760efbbc->enter($__internal_a61efd754ddb5054b263be561d37e5ad242d45d65f484852d2b1808c760efbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_39da826f1dfbf054d61fda8e03a6ea425deed26bef10033f28ddf9aa36235ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39da826f1dfbf054d61fda8e03a6ea425deed26bef10033f28ddf9aa36235ab0->enter($__internal_39da826f1dfbf054d61fda8e03a6ea425deed26bef10033f28ddf9aa36235ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a61efd754ddb5054b263be561d37e5ad242d45d65f484852d2b1808c760efbbc->leave($__internal_a61efd754ddb5054b263be561d37e5ad242d45d65f484852d2b1808c760efbbc_prof);

        
        $__internal_39da826f1dfbf054d61fda8e03a6ea425deed26bef10033f28ddf9aa36235ab0->leave($__internal_39da826f1dfbf054d61fda8e03a6ea425deed26bef10033f28ddf9aa36235ab0_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
