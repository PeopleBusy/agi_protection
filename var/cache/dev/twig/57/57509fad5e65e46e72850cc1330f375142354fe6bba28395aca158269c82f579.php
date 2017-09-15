<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_36dbb604ce8df0524805ea994b73b86b5a6b2b2bf9a145ac2df6f8c640894e74 extends Twig_Template
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
        $__internal_405644756251ef0213b79d6730c34196a55b410dcdea24cd55da672a043455f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405644756251ef0213b79d6730c34196a55b410dcdea24cd55da672a043455f1->enter($__internal_405644756251ef0213b79d6730c34196a55b410dcdea24cd55da672a043455f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_21407825cf6b6d9d97cb9d9e6d7286f6546973f2dfd2357d6175ab6dc11f0815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21407825cf6b6d9d97cb9d9e6d7286f6546973f2dfd2357d6175ab6dc11f0815->enter($__internal_21407825cf6b6d9d97cb9d9e6d7286f6546973f2dfd2357d6175ab6dc11f0815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_405644756251ef0213b79d6730c34196a55b410dcdea24cd55da672a043455f1->leave($__internal_405644756251ef0213b79d6730c34196a55b410dcdea24cd55da672a043455f1_prof);

        
        $__internal_21407825cf6b6d9d97cb9d9e6d7286f6546973f2dfd2357d6175ab6dc11f0815->leave($__internal_21407825cf6b6d9d97cb9d9e6d7286f6546973f2dfd2357d6175ab6dc11f0815_prof);

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
