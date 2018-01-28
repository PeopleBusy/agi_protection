<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1806dfd84ac942d1ef27c112360b6c9f5652bbf3555daa9fdd5e73e5742576e6 extends Twig_Template
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
        $__internal_3db5d802aa0974313d1d4f2771ded23fa14aa9ef26b6ac0de82407e2184d1063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db5d802aa0974313d1d4f2771ded23fa14aa9ef26b6ac0de82407e2184d1063->enter($__internal_3db5d802aa0974313d1d4f2771ded23fa14aa9ef26b6ac0de82407e2184d1063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8e0147dda9ef1721625feea3c32fbcb5a8075aff878d42906aeccd406c52418c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0147dda9ef1721625feea3c32fbcb5a8075aff878d42906aeccd406c52418c->enter($__internal_8e0147dda9ef1721625feea3c32fbcb5a8075aff878d42906aeccd406c52418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3db5d802aa0974313d1d4f2771ded23fa14aa9ef26b6ac0de82407e2184d1063->leave($__internal_3db5d802aa0974313d1d4f2771ded23fa14aa9ef26b6ac0de82407e2184d1063_prof);

        
        $__internal_8e0147dda9ef1721625feea3c32fbcb5a8075aff878d42906aeccd406c52418c->leave($__internal_8e0147dda9ef1721625feea3c32fbcb5a8075aff878d42906aeccd406c52418c_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
