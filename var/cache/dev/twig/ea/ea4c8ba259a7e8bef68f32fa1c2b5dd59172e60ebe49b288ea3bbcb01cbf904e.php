<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_df48ad307a27a8f16089cbdc93909dfbfe0f2bfe72ecee10cf2cb52dbbab567d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df48ad307a27a8f16089cbdc93909dfbfe0f2bfe72ecee10cf2cb52dbbab567d->enter($__internal_df48ad307a27a8f16089cbdc93909dfbfe0f2bfe72ecee10cf2cb52dbbab567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_44a747497fd8b9230fbc6beb375cfa50de3aa9d095f900cee484fa999a8aa052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a747497fd8b9230fbc6beb375cfa50de3aa9d095f900cee484fa999a8aa052->enter($__internal_44a747497fd8b9230fbc6beb375cfa50de3aa9d095f900cee484fa999a8aa052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_df48ad307a27a8f16089cbdc93909dfbfe0f2bfe72ecee10cf2cb52dbbab567d->leave($__internal_df48ad307a27a8f16089cbdc93909dfbfe0f2bfe72ecee10cf2cb52dbbab567d_prof);

        
        $__internal_44a747497fd8b9230fbc6beb375cfa50de3aa9d095f900cee484fa999a8aa052->leave($__internal_44a747497fd8b9230fbc6beb375cfa50de3aa9d095f900cee484fa999a8aa052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
