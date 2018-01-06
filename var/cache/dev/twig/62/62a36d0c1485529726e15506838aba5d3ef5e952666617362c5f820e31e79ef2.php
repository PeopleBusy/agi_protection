<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c3b8678ef2136e68cddc2777f74934eb38e79beeef68e8714eaed9c1eaeab3fe extends Twig_Template
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
        $__internal_81a15b49035c52a21b9d5a58c841b1445c27574f0326f724a134d092ae5f6f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a15b49035c52a21b9d5a58c841b1445c27574f0326f724a134d092ae5f6f01->enter($__internal_81a15b49035c52a21b9d5a58c841b1445c27574f0326f724a134d092ae5f6f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1520abd011773f624e3d9885304040ba2be42a14cbd327c1be0ef41e753d3571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1520abd011773f624e3d9885304040ba2be42a14cbd327c1be0ef41e753d3571->enter($__internal_1520abd011773f624e3d9885304040ba2be42a14cbd327c1be0ef41e753d3571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81a15b49035c52a21b9d5a58c841b1445c27574f0326f724a134d092ae5f6f01->leave($__internal_81a15b49035c52a21b9d5a58c841b1445c27574f0326f724a134d092ae5f6f01_prof);

        
        $__internal_1520abd011773f624e3d9885304040ba2be42a14cbd327c1be0ef41e753d3571->leave($__internal_1520abd011773f624e3d9885304040ba2be42a14cbd327c1be0ef41e753d3571_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
