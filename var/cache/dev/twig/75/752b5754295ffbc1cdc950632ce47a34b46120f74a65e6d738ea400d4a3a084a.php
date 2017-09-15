<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fc6c7e3378394713787e107458144cb032fa1d628ddb8b847d5ac5dd882ab5aa extends Twig_Template
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
        $__internal_e5cd95a4047bc74d493ab7d02537c7e73709f82b172f8a9b5c84662c6ff7c4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cd95a4047bc74d493ab7d02537c7e73709f82b172f8a9b5c84662c6ff7c4f4->enter($__internal_e5cd95a4047bc74d493ab7d02537c7e73709f82b172f8a9b5c84662c6ff7c4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_035fec071c066c459ac1e656ce6562d3c195fff4c739a38959462e9883c1016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035fec071c066c459ac1e656ce6562d3c195fff4c739a38959462e9883c1016f->enter($__internal_035fec071c066c459ac1e656ce6562d3c195fff4c739a38959462e9883c1016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5cd95a4047bc74d493ab7d02537c7e73709f82b172f8a9b5c84662c6ff7c4f4->leave($__internal_e5cd95a4047bc74d493ab7d02537c7e73709f82b172f8a9b5c84662c6ff7c4f4_prof);

        
        $__internal_035fec071c066c459ac1e656ce6562d3c195fff4c739a38959462e9883c1016f->leave($__internal_035fec071c066c459ac1e656ce6562d3c195fff4c739a38959462e9883c1016f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
