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
        $__internal_f128db0ef1200a899ca70ed9b7a73f4ccb0bbab2f5e607eedd45906095648380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f128db0ef1200a899ca70ed9b7a73f4ccb0bbab2f5e607eedd45906095648380->enter($__internal_f128db0ef1200a899ca70ed9b7a73f4ccb0bbab2f5e607eedd45906095648380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_12438b89763c15b428ead77fa875645f695008c4d98f58d55efdb88ec3499c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12438b89763c15b428ead77fa875645f695008c4d98f58d55efdb88ec3499c8c->enter($__internal_12438b89763c15b428ead77fa875645f695008c4d98f58d55efdb88ec3499c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f128db0ef1200a899ca70ed9b7a73f4ccb0bbab2f5e607eedd45906095648380->leave($__internal_f128db0ef1200a899ca70ed9b7a73f4ccb0bbab2f5e607eedd45906095648380_prof);

        
        $__internal_12438b89763c15b428ead77fa875645f695008c4d98f58d55efdb88ec3499c8c->leave($__internal_12438b89763c15b428ead77fa875645f695008c4d98f58d55efdb88ec3499c8c_prof);

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
