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
        $__internal_b32b193f916feb8331be994acf3095ba8dfd39da3ad3a6af6fdfb7f8fe1fb882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32b193f916feb8331be994acf3095ba8dfd39da3ad3a6af6fdfb7f8fe1fb882->enter($__internal_b32b193f916feb8331be994acf3095ba8dfd39da3ad3a6af6fdfb7f8fe1fb882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8978127f55e22560ff1c8d4a14840dc13cc4389983ab7312c9689864afdd1560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8978127f55e22560ff1c8d4a14840dc13cc4389983ab7312c9689864afdd1560->enter($__internal_8978127f55e22560ff1c8d4a14840dc13cc4389983ab7312c9689864afdd1560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b32b193f916feb8331be994acf3095ba8dfd39da3ad3a6af6fdfb7f8fe1fb882->leave($__internal_b32b193f916feb8331be994acf3095ba8dfd39da3ad3a6af6fdfb7f8fe1fb882_prof);

        
        $__internal_8978127f55e22560ff1c8d4a14840dc13cc4389983ab7312c9689864afdd1560->leave($__internal_8978127f55e22560ff1c8d4a14840dc13cc4389983ab7312c9689864afdd1560_prof);

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
