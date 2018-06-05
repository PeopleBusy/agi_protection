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
        $__internal_5db15eaa21d13f7969680ebc33532e2c5cd7bbba68789155817ab35c6b6aa11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db15eaa21d13f7969680ebc33532e2c5cd7bbba68789155817ab35c6b6aa11d->enter($__internal_5db15eaa21d13f7969680ebc33532e2c5cd7bbba68789155817ab35c6b6aa11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6932ef1a6940a3e4a3aa5a65ab8a4e6e16dfa744b56ba51aa2cbd12f4dc8f0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6932ef1a6940a3e4a3aa5a65ab8a4e6e16dfa744b56ba51aa2cbd12f4dc8f0bf->enter($__internal_6932ef1a6940a3e4a3aa5a65ab8a4e6e16dfa744b56ba51aa2cbd12f4dc8f0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5db15eaa21d13f7969680ebc33532e2c5cd7bbba68789155817ab35c6b6aa11d->leave($__internal_5db15eaa21d13f7969680ebc33532e2c5cd7bbba68789155817ab35c6b6aa11d_prof);

        
        $__internal_6932ef1a6940a3e4a3aa5a65ab8a4e6e16dfa744b56ba51aa2cbd12f4dc8f0bf->leave($__internal_6932ef1a6940a3e4a3aa5a65ab8a4e6e16dfa744b56ba51aa2cbd12f4dc8f0bf_prof);

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
