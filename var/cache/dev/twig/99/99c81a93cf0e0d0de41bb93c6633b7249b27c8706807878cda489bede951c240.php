<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4750f6d53c6d6d09bad25e001bcf6d01332c1a96c54d08f7d1a90cdc39964f42 extends Twig_Template
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
        $__internal_a04b6154c7015a1d46e7d40dacfbe00e358c994f3da4230dd97b25049f7322f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04b6154c7015a1d46e7d40dacfbe00e358c994f3da4230dd97b25049f7322f1->enter($__internal_a04b6154c7015a1d46e7d40dacfbe00e358c994f3da4230dd97b25049f7322f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a8ae14c6f5f94a69af223e23564646fe0dddb2d7de3a664b9eb9764724e2d716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ae14c6f5f94a69af223e23564646fe0dddb2d7de3a664b9eb9764724e2d716->enter($__internal_a8ae14c6f5f94a69af223e23564646fe0dddb2d7de3a664b9eb9764724e2d716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a04b6154c7015a1d46e7d40dacfbe00e358c994f3da4230dd97b25049f7322f1->leave($__internal_a04b6154c7015a1d46e7d40dacfbe00e358c994f3da4230dd97b25049f7322f1_prof);

        
        $__internal_a8ae14c6f5f94a69af223e23564646fe0dddb2d7de3a664b9eb9764724e2d716->leave($__internal_a8ae14c6f5f94a69af223e23564646fe0dddb2d7de3a664b9eb9764724e2d716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
