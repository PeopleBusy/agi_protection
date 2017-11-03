<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f3a7e6d5def90a844c0e81a7b916886786f85c0657e9615c9510d79ca81dcd5 extends Twig_Template
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
        $__internal_5885346b75478864980cab77577a853946887253ddb051549544d1ec179a9b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5885346b75478864980cab77577a853946887253ddb051549544d1ec179a9b17->enter($__internal_5885346b75478864980cab77577a853946887253ddb051549544d1ec179a9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_88b143d3a0b999cde3ca5a8f98471f4d6cd73d6c80b6e31a52c4b3a0e1c68fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b143d3a0b999cde3ca5a8f98471f4d6cd73d6c80b6e31a52c4b3a0e1c68fd5->enter($__internal_88b143d3a0b999cde3ca5a8f98471f4d6cd73d6c80b6e31a52c4b3a0e1c68fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5885346b75478864980cab77577a853946887253ddb051549544d1ec179a9b17->leave($__internal_5885346b75478864980cab77577a853946887253ddb051549544d1ec179a9b17_prof);

        
        $__internal_88b143d3a0b999cde3ca5a8f98471f4d6cd73d6c80b6e31a52c4b3a0e1c68fd5->leave($__internal_88b143d3a0b999cde3ca5a8f98471f4d6cd73d6c80b6e31a52c4b3a0e1c68fd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
