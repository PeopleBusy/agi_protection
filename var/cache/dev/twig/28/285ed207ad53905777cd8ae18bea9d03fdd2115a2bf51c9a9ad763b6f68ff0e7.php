<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bd3d807c998b1927b6d1f2d9bd86514baf2d8c8b291a8752ac24cc83d3cc49ba extends Twig_Template
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
        $__internal_52d847296867276625bc478ce41d4e2cd582acc9daf3272401a9f146bd09aac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d847296867276625bc478ce41d4e2cd582acc9daf3272401a9f146bd09aac9->enter($__internal_52d847296867276625bc478ce41d4e2cd582acc9daf3272401a9f146bd09aac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a395b8b55c2f0703f7910930dd4273ededcaed4b3bc58cd4d9726c1edc1049a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a395b8b55c2f0703f7910930dd4273ededcaed4b3bc58cd4d9726c1edc1049a9->enter($__internal_a395b8b55c2f0703f7910930dd4273ededcaed4b3bc58cd4d9726c1edc1049a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_52d847296867276625bc478ce41d4e2cd582acc9daf3272401a9f146bd09aac9->leave($__internal_52d847296867276625bc478ce41d4e2cd582acc9daf3272401a9f146bd09aac9_prof);

        
        $__internal_a395b8b55c2f0703f7910930dd4273ededcaed4b3bc58cd4d9726c1edc1049a9->leave($__internal_a395b8b55c2f0703f7910930dd4273ededcaed4b3bc58cd4d9726c1edc1049a9_prof);

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
