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
        $__internal_1d1e43de5fb383d66ff2b0084d959642442fdd793570f8ee0aec27441d54b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1e43de5fb383d66ff2b0084d959642442fdd793570f8ee0aec27441d54b547->enter($__internal_1d1e43de5fb383d66ff2b0084d959642442fdd793570f8ee0aec27441d54b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ff5c7136507d165f18e078260e368371b157fe9c624fc582a4ef14a38ede04c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5c7136507d165f18e078260e368371b157fe9c624fc582a4ef14a38ede04c7->enter($__internal_ff5c7136507d165f18e078260e368371b157fe9c624fc582a4ef14a38ede04c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1d1e43de5fb383d66ff2b0084d959642442fdd793570f8ee0aec27441d54b547->leave($__internal_1d1e43de5fb383d66ff2b0084d959642442fdd793570f8ee0aec27441d54b547_prof);

        
        $__internal_ff5c7136507d165f18e078260e368371b157fe9c624fc582a4ef14a38ede04c7->leave($__internal_ff5c7136507d165f18e078260e368371b157fe9c624fc582a4ef14a38ede04c7_prof);

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
