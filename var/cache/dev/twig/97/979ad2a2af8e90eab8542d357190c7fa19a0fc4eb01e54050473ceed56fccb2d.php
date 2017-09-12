<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_74d1147de71d19eecb5f15298a689516adef4ac347424eee29668a250db95f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d1147de71d19eecb5f15298a689516adef4ac347424eee29668a250db95f39->enter($__internal_74d1147de71d19eecb5f15298a689516adef4ac347424eee29668a250db95f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1b8efb2b12e8c56261ffdf346897dfa99b8e032f8040f3dea975ca462bbec42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8efb2b12e8c56261ffdf346897dfa99b8e032f8040f3dea975ca462bbec42b->enter($__internal_1b8efb2b12e8c56261ffdf346897dfa99b8e032f8040f3dea975ca462bbec42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_74d1147de71d19eecb5f15298a689516adef4ac347424eee29668a250db95f39->leave($__internal_74d1147de71d19eecb5f15298a689516adef4ac347424eee29668a250db95f39_prof);

        
        $__internal_1b8efb2b12e8c56261ffdf346897dfa99b8e032f8040f3dea975ca462bbec42b->leave($__internal_1b8efb2b12e8c56261ffdf346897dfa99b8e032f8040f3dea975ca462bbec42b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
