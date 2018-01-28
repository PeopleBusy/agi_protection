<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f2dcc0c59c079039d9d2a4a845cb2fc5db009f8b77077aa79b48a4288fa5abb6 extends Twig_Template
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
        $__internal_3bdeeec4bad8f0f87edfcbc730d9850cd5659843ead3497b84439ae8f8309ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdeeec4bad8f0f87edfcbc730d9850cd5659843ead3497b84439ae8f8309ef5->enter($__internal_3bdeeec4bad8f0f87edfcbc730d9850cd5659843ead3497b84439ae8f8309ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cdc3d9455d49ad21e7de258ebba2831153db4544925b571cefefee113be96796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc3d9455d49ad21e7de258ebba2831153db4544925b571cefefee113be96796->enter($__internal_cdc3d9455d49ad21e7de258ebba2831153db4544925b571cefefee113be96796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3bdeeec4bad8f0f87edfcbc730d9850cd5659843ead3497b84439ae8f8309ef5->leave($__internal_3bdeeec4bad8f0f87edfcbc730d9850cd5659843ead3497b84439ae8f8309ef5_prof);

        
        $__internal_cdc3d9455d49ad21e7de258ebba2831153db4544925b571cefefee113be96796->leave($__internal_cdc3d9455d49ad21e7de258ebba2831153db4544925b571cefefee113be96796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
