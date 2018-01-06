<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_efc50dbcb39cde3da0075686b9a08803aa74b42b48e24f1c52a8db87bb00ceec extends Twig_Template
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
        $__internal_1641a0842a84a4ac17d0b4da7f623904e8dbef7484e71ace22f3b622ad8c2ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1641a0842a84a4ac17d0b4da7f623904e8dbef7484e71ace22f3b622ad8c2ff6->enter($__internal_1641a0842a84a4ac17d0b4da7f623904e8dbef7484e71ace22f3b622ad8c2ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_260be3ab119f39562b8f8b894679ce1373a5f895b868f61ed840a3a2a292c267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260be3ab119f39562b8f8b894679ce1373a5f895b868f61ed840a3a2a292c267->enter($__internal_260be3ab119f39562b8f8b894679ce1373a5f895b868f61ed840a3a2a292c267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1641a0842a84a4ac17d0b4da7f623904e8dbef7484e71ace22f3b622ad8c2ff6->leave($__internal_1641a0842a84a4ac17d0b4da7f623904e8dbef7484e71ace22f3b622ad8c2ff6_prof);

        
        $__internal_260be3ab119f39562b8f8b894679ce1373a5f895b868f61ed840a3a2a292c267->leave($__internal_260be3ab119f39562b8f8b894679ce1373a5f895b868f61ed840a3a2a292c267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
