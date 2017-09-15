<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9a5ef0aecde799c26f96fc67fd032dd445965eae307981b86ee38a347484ef1e extends Twig_Template
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
        $__internal_38faa1099be033e67284a59399350fca4ebf55e59eb0960124473a1fd97273e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38faa1099be033e67284a59399350fca4ebf55e59eb0960124473a1fd97273e1->enter($__internal_38faa1099be033e67284a59399350fca4ebf55e59eb0960124473a1fd97273e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_df45515d89ab8d1b7cd850ec94bd392d5a70f112dfd44a7d62235ba6de84103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df45515d89ab8d1b7cd850ec94bd392d5a70f112dfd44a7d62235ba6de84103c->enter($__internal_df45515d89ab8d1b7cd850ec94bd392d5a70f112dfd44a7d62235ba6de84103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_38faa1099be033e67284a59399350fca4ebf55e59eb0960124473a1fd97273e1->leave($__internal_38faa1099be033e67284a59399350fca4ebf55e59eb0960124473a1fd97273e1_prof);

        
        $__internal_df45515d89ab8d1b7cd850ec94bd392d5a70f112dfd44a7d62235ba6de84103c->leave($__internal_df45515d89ab8d1b7cd850ec94bd392d5a70f112dfd44a7d62235ba6de84103c_prof);

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
", "@Framework/Form/form.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
