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
        $__internal_b5ca7cd3932771ea18e049848c311fba14f286f6d0a44a62af6ebd2f876742a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ca7cd3932771ea18e049848c311fba14f286f6d0a44a62af6ebd2f876742a0->enter($__internal_b5ca7cd3932771ea18e049848c311fba14f286f6d0a44a62af6ebd2f876742a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d7bbd71c09ceffc158bba711cb4593d8e58119e8e0827c54bb83b500b3da1c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bbd71c09ceffc158bba711cb4593d8e58119e8e0827c54bb83b500b3da1c00->enter($__internal_d7bbd71c09ceffc158bba711cb4593d8e58119e8e0827c54bb83b500b3da1c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b5ca7cd3932771ea18e049848c311fba14f286f6d0a44a62af6ebd2f876742a0->leave($__internal_b5ca7cd3932771ea18e049848c311fba14f286f6d0a44a62af6ebd2f876742a0_prof);

        
        $__internal_d7bbd71c09ceffc158bba711cb4593d8e58119e8e0827c54bb83b500b3da1c00->leave($__internal_d7bbd71c09ceffc158bba711cb4593d8e58119e8e0827c54bb83b500b3da1c00_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
