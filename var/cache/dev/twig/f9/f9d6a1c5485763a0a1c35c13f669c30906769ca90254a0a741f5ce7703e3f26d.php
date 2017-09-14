<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_72a84b44fbe060149dcdb12753c785672b79952a62097c48ff9682314ef56dbd extends Twig_Template
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
        $__internal_010f3ced36e2f5de25e8af86aeaf454143663ad817a14890d6334a611f67a256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010f3ced36e2f5de25e8af86aeaf454143663ad817a14890d6334a611f67a256->enter($__internal_010f3ced36e2f5de25e8af86aeaf454143663ad817a14890d6334a611f67a256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4ecf604012cbafb82d39887b50b1d8844153c8207f782f4f4a04c8abcbb4fc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecf604012cbafb82d39887b50b1d8844153c8207f782f4f4a04c8abcbb4fc26->enter($__internal_4ecf604012cbafb82d39887b50b1d8844153c8207f782f4f4a04c8abcbb4fc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_010f3ced36e2f5de25e8af86aeaf454143663ad817a14890d6334a611f67a256->leave($__internal_010f3ced36e2f5de25e8af86aeaf454143663ad817a14890d6334a611f67a256_prof);

        
        $__internal_4ecf604012cbafb82d39887b50b1d8844153c8207f782f4f4a04c8abcbb4fc26->leave($__internal_4ecf604012cbafb82d39887b50b1d8844153c8207f782f4f4a04c8abcbb4fc26_prof);

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
