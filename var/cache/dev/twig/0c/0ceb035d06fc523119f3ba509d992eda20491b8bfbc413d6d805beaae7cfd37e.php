<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_153b1f6cff49e12cac7e85fc86618cfaf390020130a61ef4be9a9d531e8c2b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153b1f6cff49e12cac7e85fc86618cfaf390020130a61ef4be9a9d531e8c2b01->enter($__internal_153b1f6cff49e12cac7e85fc86618cfaf390020130a61ef4be9a9d531e8c2b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f1165ba7252d3249810a47d4fa09c7d754ba5ba227610788e37d2686cfea86f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1165ba7252d3249810a47d4fa09c7d754ba5ba227610788e37d2686cfea86f0->enter($__internal_f1165ba7252d3249810a47d4fa09c7d754ba5ba227610788e37d2686cfea86f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_153b1f6cff49e12cac7e85fc86618cfaf390020130a61ef4be9a9d531e8c2b01->leave($__internal_153b1f6cff49e12cac7e85fc86618cfaf390020130a61ef4be9a9d531e8c2b01_prof);

        
        $__internal_f1165ba7252d3249810a47d4fa09c7d754ba5ba227610788e37d2686cfea86f0->leave($__internal_f1165ba7252d3249810a47d4fa09c7d754ba5ba227610788e37d2686cfea86f0_prof);

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
