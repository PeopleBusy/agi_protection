<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_15ae758182a2ce503e295613aab4677bb85fed7dabdff6220be2ceaab2afd357 extends Twig_Template
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
        $__internal_ca5adc052c7921c64460a02a73ddbdb3e89b08e68b1b4581d8bada8c1ef571fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5adc052c7921c64460a02a73ddbdb3e89b08e68b1b4581d8bada8c1ef571fa->enter($__internal_ca5adc052c7921c64460a02a73ddbdb3e89b08e68b1b4581d8bada8c1ef571fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dc58195795049221bce9e2ea85093ab5ee76f18de35cc6536fdcbe1d753cbbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc58195795049221bce9e2ea85093ab5ee76f18de35cc6536fdcbe1d753cbbd4->enter($__internal_dc58195795049221bce9e2ea85093ab5ee76f18de35cc6536fdcbe1d753cbbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ca5adc052c7921c64460a02a73ddbdb3e89b08e68b1b4581d8bada8c1ef571fa->leave($__internal_ca5adc052c7921c64460a02a73ddbdb3e89b08e68b1b4581d8bada8c1ef571fa_prof);

        
        $__internal_dc58195795049221bce9e2ea85093ab5ee76f18de35cc6536fdcbe1d753cbbd4->leave($__internal_dc58195795049221bce9e2ea85093ab5ee76f18de35cc6536fdcbe1d753cbbd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
