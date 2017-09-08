<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0276c52c211fe8c0e2c968491d68e7f9a877bfdcde0b99ea58ca9834a619fa8f extends Twig_Template
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
        $__internal_2d61b869b90ad299131d9d216b5ff8d4ad0d50e533d4f76ef85aef88d26c3eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d61b869b90ad299131d9d216b5ff8d4ad0d50e533d4f76ef85aef88d26c3eaf->enter($__internal_2d61b869b90ad299131d9d216b5ff8d4ad0d50e533d4f76ef85aef88d26c3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_62e935a6bb39275ac1a2b399cffd8e79ea3b47e0fab8bf086f7f9dd3cbd08dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e935a6bb39275ac1a2b399cffd8e79ea3b47e0fab8bf086f7f9dd3cbd08dee->enter($__internal_62e935a6bb39275ac1a2b399cffd8e79ea3b47e0fab8bf086f7f9dd3cbd08dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2d61b869b90ad299131d9d216b5ff8d4ad0d50e533d4f76ef85aef88d26c3eaf->leave($__internal_2d61b869b90ad299131d9d216b5ff8d4ad0d50e533d4f76ef85aef88d26c3eaf_prof);

        
        $__internal_62e935a6bb39275ac1a2b399cffd8e79ea3b47e0fab8bf086f7f9dd3cbd08dee->leave($__internal_62e935a6bb39275ac1a2b399cffd8e79ea3b47e0fab8bf086f7f9dd3cbd08dee_prof);

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
