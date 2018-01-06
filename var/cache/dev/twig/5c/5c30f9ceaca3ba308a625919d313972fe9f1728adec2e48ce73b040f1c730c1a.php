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
        $__internal_de11f21b6f6d07e52d0bc6af47b21d3a10460771aba66ad7b9563c75dcd5b3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de11f21b6f6d07e52d0bc6af47b21d3a10460771aba66ad7b9563c75dcd5b3c1->enter($__internal_de11f21b6f6d07e52d0bc6af47b21d3a10460771aba66ad7b9563c75dcd5b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a0143465b5d34684d2afe16bc621d4181dd7fe58c17c453bb09207a87d50b066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0143465b5d34684d2afe16bc621d4181dd7fe58c17c453bb09207a87d50b066->enter($__internal_a0143465b5d34684d2afe16bc621d4181dd7fe58c17c453bb09207a87d50b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_de11f21b6f6d07e52d0bc6af47b21d3a10460771aba66ad7b9563c75dcd5b3c1->leave($__internal_de11f21b6f6d07e52d0bc6af47b21d3a10460771aba66ad7b9563c75dcd5b3c1_prof);

        
        $__internal_a0143465b5d34684d2afe16bc621d4181dd7fe58c17c453bb09207a87d50b066->leave($__internal_a0143465b5d34684d2afe16bc621d4181dd7fe58c17c453bb09207a87d50b066_prof);

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
