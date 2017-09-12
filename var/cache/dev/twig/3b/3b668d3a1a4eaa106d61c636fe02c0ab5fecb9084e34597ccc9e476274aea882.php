<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_feaa0754dc1ba98a5670025b61cedbb8ffe6fa9c7bc258468edad32ffcf94407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaa0754dc1ba98a5670025b61cedbb8ffe6fa9c7bc258468edad32ffcf94407->enter($__internal_feaa0754dc1ba98a5670025b61cedbb8ffe6fa9c7bc258468edad32ffcf94407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b94591e043cc6f17cbb197c6cf36f7cab1dccd12c147de60a99af071bf432fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94591e043cc6f17cbb197c6cf36f7cab1dccd12c147de60a99af071bf432fc7->enter($__internal_b94591e043cc6f17cbb197c6cf36f7cab1dccd12c147de60a99af071bf432fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_feaa0754dc1ba98a5670025b61cedbb8ffe6fa9c7bc258468edad32ffcf94407->leave($__internal_feaa0754dc1ba98a5670025b61cedbb8ffe6fa9c7bc258468edad32ffcf94407_prof);

        
        $__internal_b94591e043cc6f17cbb197c6cf36f7cab1dccd12c147de60a99af071bf432fc7->leave($__internal_b94591e043cc6f17cbb197c6cf36f7cab1dccd12c147de60a99af071bf432fc7_prof);

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
", "@Framework/FormTable/button_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
