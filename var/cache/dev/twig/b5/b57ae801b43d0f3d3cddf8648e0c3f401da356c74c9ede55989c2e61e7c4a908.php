<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_a1f54764251dad22b0e0a40b7b29f6c5e3944be7c4b16900a27c1142333cdb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f54764251dad22b0e0a40b7b29f6c5e3944be7c4b16900a27c1142333cdb89->enter($__internal_a1f54764251dad22b0e0a40b7b29f6c5e3944be7c4b16900a27c1142333cdb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_db1cffd02c886c4900ed41e481638bc24b33d92075dd3e7baef9ea836d056b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1cffd02c886c4900ed41e481638bc24b33d92075dd3e7baef9ea836d056b83->enter($__internal_db1cffd02c886c4900ed41e481638bc24b33d92075dd3e7baef9ea836d056b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a1f54764251dad22b0e0a40b7b29f6c5e3944be7c4b16900a27c1142333cdb89->leave($__internal_a1f54764251dad22b0e0a40b7b29f6c5e3944be7c4b16900a27c1142333cdb89_prof);

        
        $__internal_db1cffd02c886c4900ed41e481638bc24b33d92075dd3e7baef9ea836d056b83->leave($__internal_db1cffd02c886c4900ed41e481638bc24b33d92075dd3e7baef9ea836d056b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
