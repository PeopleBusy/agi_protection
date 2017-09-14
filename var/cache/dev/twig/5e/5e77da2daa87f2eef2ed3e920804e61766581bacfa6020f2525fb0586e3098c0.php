<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b7cca2d76ace8ffbc37e625cd9b6c1258fc096d1c6e8a1ebc5413e27acc662ed extends Twig_Template
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
        $__internal_f540f90a3ff3c9c1b137499d8105b9f39f7da418e39e814ae0eac606d3318342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f540f90a3ff3c9c1b137499d8105b9f39f7da418e39e814ae0eac606d3318342->enter($__internal_f540f90a3ff3c9c1b137499d8105b9f39f7da418e39e814ae0eac606d3318342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e850a0591f59e039022d6857b1c200d142091cbe1bf5c93fd25c7b34930dd30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e850a0591f59e039022d6857b1c200d142091cbe1bf5c93fd25c7b34930dd30f->enter($__internal_e850a0591f59e039022d6857b1c200d142091cbe1bf5c93fd25c7b34930dd30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f540f90a3ff3c9c1b137499d8105b9f39f7da418e39e814ae0eac606d3318342->leave($__internal_f540f90a3ff3c9c1b137499d8105b9f39f7da418e39e814ae0eac606d3318342_prof);

        
        $__internal_e850a0591f59e039022d6857b1c200d142091cbe1bf5c93fd25c7b34930dd30f->leave($__internal_e850a0591f59e039022d6857b1c200d142091cbe1bf5c93fd25c7b34930dd30f_prof);

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
