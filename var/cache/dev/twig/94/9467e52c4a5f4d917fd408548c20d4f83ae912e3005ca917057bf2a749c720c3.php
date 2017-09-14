<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_79fd1f747e58fab2b884a82ce84c2efb1018b0a2704ee01775d61420d57350b8 extends Twig_Template
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
        $__internal_9beab3d1389e7f42bad7a45b630fb418d7bea26ca3f4cfeea291a2b9d80f2b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beab3d1389e7f42bad7a45b630fb418d7bea26ca3f4cfeea291a2b9d80f2b58->enter($__internal_9beab3d1389e7f42bad7a45b630fb418d7bea26ca3f4cfeea291a2b9d80f2b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ac5abede8380248724cded8502d230d95f3ecaf5ab9760c61c7dc1617f47de81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5abede8380248724cded8502d230d95f3ecaf5ab9760c61c7dc1617f47de81->enter($__internal_ac5abede8380248724cded8502d230d95f3ecaf5ab9760c61c7dc1617f47de81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9beab3d1389e7f42bad7a45b630fb418d7bea26ca3f4cfeea291a2b9d80f2b58->leave($__internal_9beab3d1389e7f42bad7a45b630fb418d7bea26ca3f4cfeea291a2b9d80f2b58_prof);

        
        $__internal_ac5abede8380248724cded8502d230d95f3ecaf5ab9760c61c7dc1617f47de81->leave($__internal_ac5abede8380248724cded8502d230d95f3ecaf5ab9760c61c7dc1617f47de81_prof);

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
", "@Framework/Form/button_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
