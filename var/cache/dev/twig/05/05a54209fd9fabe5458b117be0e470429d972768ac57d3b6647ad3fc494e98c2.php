<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2775229b586ebda0839bec66efc4dd58d7d7e558e29ff336b14f42c60439ea56 extends Twig_Template
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
        $__internal_d31da03a36007209de39fd993fa14f316a9a28ca454060ead43d643d43d79027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31da03a36007209de39fd993fa14f316a9a28ca454060ead43d643d43d79027->enter($__internal_d31da03a36007209de39fd993fa14f316a9a28ca454060ead43d643d43d79027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_868b36d82de2f82e23a00a18e8be816ca820f536fef72b60ca9ac4dbcfcbe328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868b36d82de2f82e23a00a18e8be816ca820f536fef72b60ca9ac4dbcfcbe328->enter($__internal_868b36d82de2f82e23a00a18e8be816ca820f536fef72b60ca9ac4dbcfcbe328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d31da03a36007209de39fd993fa14f316a9a28ca454060ead43d643d43d79027->leave($__internal_d31da03a36007209de39fd993fa14f316a9a28ca454060ead43d643d43d79027_prof);

        
        $__internal_868b36d82de2f82e23a00a18e8be816ca820f536fef72b60ca9ac4dbcfcbe328->leave($__internal_868b36d82de2f82e23a00a18e8be816ca820f536fef72b60ca9ac4dbcfcbe328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
