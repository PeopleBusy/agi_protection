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
        $__internal_f42dbf8f6e32c622f322e06316500d8230df1292586ba3107366eba2207f90f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42dbf8f6e32c622f322e06316500d8230df1292586ba3107366eba2207f90f8->enter($__internal_f42dbf8f6e32c622f322e06316500d8230df1292586ba3107366eba2207f90f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bf05216a3dd331bedc6434efe33bbd038b7eb0af3615a6aef54c9ceb58970365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf05216a3dd331bedc6434efe33bbd038b7eb0af3615a6aef54c9ceb58970365->enter($__internal_bf05216a3dd331bedc6434efe33bbd038b7eb0af3615a6aef54c9ceb58970365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f42dbf8f6e32c622f322e06316500d8230df1292586ba3107366eba2207f90f8->leave($__internal_f42dbf8f6e32c622f322e06316500d8230df1292586ba3107366eba2207f90f8_prof);

        
        $__internal_bf05216a3dd331bedc6434efe33bbd038b7eb0af3615a6aef54c9ceb58970365->leave($__internal_bf05216a3dd331bedc6434efe33bbd038b7eb0af3615a6aef54c9ceb58970365_prof);

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
