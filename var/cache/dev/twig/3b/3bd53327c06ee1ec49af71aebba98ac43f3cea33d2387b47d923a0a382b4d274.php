<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_02b2a7a5ebe223aab47c6cc59124a29554db8ff828b862d31e763ef5c9e45f61 extends Twig_Template
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
        $__internal_069005e22747ae889a0ace14599a96c5a0f5fd3c7ac563d3ad7b5489c88b91dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069005e22747ae889a0ace14599a96c5a0f5fd3c7ac563d3ad7b5489c88b91dc->enter($__internal_069005e22747ae889a0ace14599a96c5a0f5fd3c7ac563d3ad7b5489c88b91dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_511c7d87dfae6fca0568b5cc71ac5ce91017ae43fc7401369868586a2756f77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511c7d87dfae6fca0568b5cc71ac5ce91017ae43fc7401369868586a2756f77b->enter($__internal_511c7d87dfae6fca0568b5cc71ac5ce91017ae43fc7401369868586a2756f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_069005e22747ae889a0ace14599a96c5a0f5fd3c7ac563d3ad7b5489c88b91dc->leave($__internal_069005e22747ae889a0ace14599a96c5a0f5fd3c7ac563d3ad7b5489c88b91dc_prof);

        
        $__internal_511c7d87dfae6fca0568b5cc71ac5ce91017ae43fc7401369868586a2756f77b->leave($__internal_511c7d87dfae6fca0568b5cc71ac5ce91017ae43fc7401369868586a2756f77b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
