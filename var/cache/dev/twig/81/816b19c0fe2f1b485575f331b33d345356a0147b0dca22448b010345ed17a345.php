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
        $__internal_39a3ce05796f9f4b1b574a9b57a8c683ab7f2c5dfb2e8947893b16a251cf5b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a3ce05796f9f4b1b574a9b57a8c683ab7f2c5dfb2e8947893b16a251cf5b87->enter($__internal_39a3ce05796f9f4b1b574a9b57a8c683ab7f2c5dfb2e8947893b16a251cf5b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ac3c69573e41f6114a59438320ee79405345ab3735d489fc9c877f6024d49659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3c69573e41f6114a59438320ee79405345ab3735d489fc9c877f6024d49659->enter($__internal_ac3c69573e41f6114a59438320ee79405345ab3735d489fc9c877f6024d49659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_39a3ce05796f9f4b1b574a9b57a8c683ab7f2c5dfb2e8947893b16a251cf5b87->leave($__internal_39a3ce05796f9f4b1b574a9b57a8c683ab7f2c5dfb2e8947893b16a251cf5b87_prof);

        
        $__internal_ac3c69573e41f6114a59438320ee79405345ab3735d489fc9c877f6024d49659->leave($__internal_ac3c69573e41f6114a59438320ee79405345ab3735d489fc9c877f6024d49659_prof);

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
