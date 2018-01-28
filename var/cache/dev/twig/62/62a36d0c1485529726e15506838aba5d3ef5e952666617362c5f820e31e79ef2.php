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
        $__internal_39bfc650f5df386d6d7ecfc386d598ee4ccaea92770390439c4002a6d4451025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bfc650f5df386d6d7ecfc386d598ee4ccaea92770390439c4002a6d4451025->enter($__internal_39bfc650f5df386d6d7ecfc386d598ee4ccaea92770390439c4002a6d4451025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f09f7cbc66026d82fbac22fab928d20a031809ee82fb3bfc4b61dfcf9f66f62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09f7cbc66026d82fbac22fab928d20a031809ee82fb3bfc4b61dfcf9f66f62b->enter($__internal_f09f7cbc66026d82fbac22fab928d20a031809ee82fb3bfc4b61dfcf9f66f62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39bfc650f5df386d6d7ecfc386d598ee4ccaea92770390439c4002a6d4451025->leave($__internal_39bfc650f5df386d6d7ecfc386d598ee4ccaea92770390439c4002a6d4451025_prof);

        
        $__internal_f09f7cbc66026d82fbac22fab928d20a031809ee82fb3bfc4b61dfcf9f66f62b->leave($__internal_f09f7cbc66026d82fbac22fab928d20a031809ee82fb3bfc4b61dfcf9f66f62b_prof);

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
