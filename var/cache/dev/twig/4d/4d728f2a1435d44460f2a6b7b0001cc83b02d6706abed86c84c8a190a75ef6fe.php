<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_e4cd2e074b69e675094b040e67a1944608a01819cf468dfa576fa7e30e32d694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cd2e074b69e675094b040e67a1944608a01819cf468dfa576fa7e30e32d694->enter($__internal_e4cd2e074b69e675094b040e67a1944608a01819cf468dfa576fa7e30e32d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e6849af04e188cd7194e9c53734b444aab4a7442466d47dadd4484a1712f2959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6849af04e188cd7194e9c53734b444aab4a7442466d47dadd4484a1712f2959->enter($__internal_e6849af04e188cd7194e9c53734b444aab4a7442466d47dadd4484a1712f2959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e4cd2e074b69e675094b040e67a1944608a01819cf468dfa576fa7e30e32d694->leave($__internal_e4cd2e074b69e675094b040e67a1944608a01819cf468dfa576fa7e30e32d694_prof);

        
        $__internal_e6849af04e188cd7194e9c53734b444aab4a7442466d47dadd4484a1712f2959->leave($__internal_e6849af04e188cd7194e9c53734b444aab4a7442466d47dadd4484a1712f2959_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
