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
        $__internal_07997618ec167a2f0099978bed28116f8ac2305cef5d489fd84dd4685a48a3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07997618ec167a2f0099978bed28116f8ac2305cef5d489fd84dd4685a48a3ef->enter($__internal_07997618ec167a2f0099978bed28116f8ac2305cef5d489fd84dd4685a48a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_733f935709fed5817abb646326e098e70b6ea6b2ac7a9f3648b3efe490cbedfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733f935709fed5817abb646326e098e70b6ea6b2ac7a9f3648b3efe490cbedfa->enter($__internal_733f935709fed5817abb646326e098e70b6ea6b2ac7a9f3648b3efe490cbedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_07997618ec167a2f0099978bed28116f8ac2305cef5d489fd84dd4685a48a3ef->leave($__internal_07997618ec167a2f0099978bed28116f8ac2305cef5d489fd84dd4685a48a3ef_prof);

        
        $__internal_733f935709fed5817abb646326e098e70b6ea6b2ac7a9f3648b3efe490cbedfa->leave($__internal_733f935709fed5817abb646326e098e70b6ea6b2ac7a9f3648b3efe490cbedfa_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
