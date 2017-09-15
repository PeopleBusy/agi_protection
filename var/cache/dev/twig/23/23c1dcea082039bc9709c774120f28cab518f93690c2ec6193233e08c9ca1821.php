<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_afec9bd66eb37436018bfd9c1a35b9da85ce0586803b6b63727c48d08510508e extends Twig_Template
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
        $__internal_f1b986f1599f0fb7b3780279d729ca5c920624c1c1a526c3193d8c4e0001938c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b986f1599f0fb7b3780279d729ca5c920624c1c1a526c3193d8c4e0001938c->enter($__internal_f1b986f1599f0fb7b3780279d729ca5c920624c1c1a526c3193d8c4e0001938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_af96b5b1f5d2b5870b659aa3746e63a269c6c9c18d7d95210e9ecb04c4c62b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af96b5b1f5d2b5870b659aa3746e63a269c6c9c18d7d95210e9ecb04c4c62b31->enter($__internal_af96b5b1f5d2b5870b659aa3746e63a269c6c9c18d7d95210e9ecb04c4c62b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f1b986f1599f0fb7b3780279d729ca5c920624c1c1a526c3193d8c4e0001938c->leave($__internal_f1b986f1599f0fb7b3780279d729ca5c920624c1c1a526c3193d8c4e0001938c_prof);

        
        $__internal_af96b5b1f5d2b5870b659aa3746e63a269c6c9c18d7d95210e9ecb04c4c62b31->leave($__internal_af96b5b1f5d2b5870b659aa3746e63a269c6c9c18d7d95210e9ecb04c4c62b31_prof);

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
