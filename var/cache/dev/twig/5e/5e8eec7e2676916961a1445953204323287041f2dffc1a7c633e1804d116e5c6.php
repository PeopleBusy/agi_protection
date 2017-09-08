<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_dc8c8817a95b98653a07e245394e706df1283c842a875959fead677e2da932d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8c8817a95b98653a07e245394e706df1283c842a875959fead677e2da932d7->enter($__internal_dc8c8817a95b98653a07e245394e706df1283c842a875959fead677e2da932d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fe9d59241798c55796fb2a7ad934876f371d52f20fb072aaae3135770713c080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9d59241798c55796fb2a7ad934876f371d52f20fb072aaae3135770713c080->enter($__internal_fe9d59241798c55796fb2a7ad934876f371d52f20fb072aaae3135770713c080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dc8c8817a95b98653a07e245394e706df1283c842a875959fead677e2da932d7->leave($__internal_dc8c8817a95b98653a07e245394e706df1283c842a875959fead677e2da932d7_prof);

        
        $__internal_fe9d59241798c55796fb2a7ad934876f371d52f20fb072aaae3135770713c080->leave($__internal_fe9d59241798c55796fb2a7ad934876f371d52f20fb072aaae3135770713c080_prof);

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
