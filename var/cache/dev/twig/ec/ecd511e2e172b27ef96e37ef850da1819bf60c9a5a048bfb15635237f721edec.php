<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7b840fc8b2a1e2eeaf2ce70b5df79bb64143bb7bf11176f5113a24d112eea72e extends Twig_Template
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
        $__internal_1206920fcdbd1b23dc899a7e722085a31bb2ed26c14ffc7e42cb8bc34fff7689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1206920fcdbd1b23dc899a7e722085a31bb2ed26c14ffc7e42cb8bc34fff7689->enter($__internal_1206920fcdbd1b23dc899a7e722085a31bb2ed26c14ffc7e42cb8bc34fff7689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_efe3f67808ff874eb39f72773d54201ca137cc101690df46dbb1ce41dceb9efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe3f67808ff874eb39f72773d54201ca137cc101690df46dbb1ce41dceb9efc->enter($__internal_efe3f67808ff874eb39f72773d54201ca137cc101690df46dbb1ce41dceb9efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1206920fcdbd1b23dc899a7e722085a31bb2ed26c14ffc7e42cb8bc34fff7689->leave($__internal_1206920fcdbd1b23dc899a7e722085a31bb2ed26c14ffc7e42cb8bc34fff7689_prof);

        
        $__internal_efe3f67808ff874eb39f72773d54201ca137cc101690df46dbb1ce41dceb9efc->leave($__internal_efe3f67808ff874eb39f72773d54201ca137cc101690df46dbb1ce41dceb9efc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
