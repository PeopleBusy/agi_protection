<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_94a9cc81f66fb2bcbe2e294aaf9365d37a4a80717ff5ac93d4e7704587f937e6 extends Twig_Template
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
        $__internal_c5ca57f9fe305462594f39bd4971fc315663755a9603651576b3a1f7f93700a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ca57f9fe305462594f39bd4971fc315663755a9603651576b3a1f7f93700a0->enter($__internal_c5ca57f9fe305462594f39bd4971fc315663755a9603651576b3a1f7f93700a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d2b0d3a2062c050721d5bea77979d6a36837d257090e15dc56a48cc1cfb6021a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b0d3a2062c050721d5bea77979d6a36837d257090e15dc56a48cc1cfb6021a->enter($__internal_d2b0d3a2062c050721d5bea77979d6a36837d257090e15dc56a48cc1cfb6021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c5ca57f9fe305462594f39bd4971fc315663755a9603651576b3a1f7f93700a0->leave($__internal_c5ca57f9fe305462594f39bd4971fc315663755a9603651576b3a1f7f93700a0_prof);

        
        $__internal_d2b0d3a2062c050721d5bea77979d6a36837d257090e15dc56a48cc1cfb6021a->leave($__internal_d2b0d3a2062c050721d5bea77979d6a36837d257090e15dc56a48cc1cfb6021a_prof);

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
", "@Framework/FormTable/form_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
