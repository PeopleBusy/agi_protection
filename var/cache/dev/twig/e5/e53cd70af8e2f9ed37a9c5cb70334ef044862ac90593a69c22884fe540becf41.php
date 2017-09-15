<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_26c54d3ab39487cd9daab69be81bc162bc7512825c8c9fc920fc351059b8eead extends Twig_Template
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
        $__internal_815c853f40878a7d30c3a7b67be90249b9ad680bab2d6eaa773acce14db8cf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815c853f40878a7d30c3a7b67be90249b9ad680bab2d6eaa773acce14db8cf9e->enter($__internal_815c853f40878a7d30c3a7b67be90249b9ad680bab2d6eaa773acce14db8cf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_858aefe9f21c51417041b5d2b3b72f1cee3bdc4ce307361682446ce9fde7a2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858aefe9f21c51417041b5d2b3b72f1cee3bdc4ce307361682446ce9fde7a2c1->enter($__internal_858aefe9f21c51417041b5d2b3b72f1cee3bdc4ce307361682446ce9fde7a2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_815c853f40878a7d30c3a7b67be90249b9ad680bab2d6eaa773acce14db8cf9e->leave($__internal_815c853f40878a7d30c3a7b67be90249b9ad680bab2d6eaa773acce14db8cf9e_prof);

        
        $__internal_858aefe9f21c51417041b5d2b3b72f1cee3bdc4ce307361682446ce9fde7a2c1->leave($__internal_858aefe9f21c51417041b5d2b3b72f1cee3bdc4ce307361682446ce9fde7a2c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
