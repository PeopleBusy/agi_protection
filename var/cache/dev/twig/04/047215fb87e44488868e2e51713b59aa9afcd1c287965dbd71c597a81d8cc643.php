<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9bf17283dcc975e50a0ca0d294580320f9c84d57645504741a97333e4b91f77a extends Twig_Template
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
        $__internal_dcada6265c45ca9d94ac94592e23fd32630f1a3fced68d3f7dea95af3c7e31fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcada6265c45ca9d94ac94592e23fd32630f1a3fced68d3f7dea95af3c7e31fd->enter($__internal_dcada6265c45ca9d94ac94592e23fd32630f1a3fced68d3f7dea95af3c7e31fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_68087ddcaa89a65f31802334e3141db9a68e022807fbbbc0bcfb2159f9d45c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68087ddcaa89a65f31802334e3141db9a68e022807fbbbc0bcfb2159f9d45c11->enter($__internal_68087ddcaa89a65f31802334e3141db9a68e022807fbbbc0bcfb2159f9d45c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dcada6265c45ca9d94ac94592e23fd32630f1a3fced68d3f7dea95af3c7e31fd->leave($__internal_dcada6265c45ca9d94ac94592e23fd32630f1a3fced68d3f7dea95af3c7e31fd_prof);

        
        $__internal_68087ddcaa89a65f31802334e3141db9a68e022807fbbbc0bcfb2159f9d45c11->leave($__internal_68087ddcaa89a65f31802334e3141db9a68e022807fbbbc0bcfb2159f9d45c11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
