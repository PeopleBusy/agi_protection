<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_6aa05411154b9b52aa40168f5d2775c26e97ffb1bc056f28e113458e8c4f3bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa05411154b9b52aa40168f5d2775c26e97ffb1bc056f28e113458e8c4f3bd6->enter($__internal_6aa05411154b9b52aa40168f5d2775c26e97ffb1bc056f28e113458e8c4f3bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_19424c84359ada8269c11baff77030f2b970f48adfd877e7dc713cd6d35eb52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19424c84359ada8269c11baff77030f2b970f48adfd877e7dc713cd6d35eb52e->enter($__internal_19424c84359ada8269c11baff77030f2b970f48adfd877e7dc713cd6d35eb52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6aa05411154b9b52aa40168f5d2775c26e97ffb1bc056f28e113458e8c4f3bd6->leave($__internal_6aa05411154b9b52aa40168f5d2775c26e97ffb1bc056f28e113458e8c4f3bd6_prof);

        
        $__internal_19424c84359ada8269c11baff77030f2b970f48adfd877e7dc713cd6d35eb52e->leave($__internal_19424c84359ada8269c11baff77030f2b970f48adfd877e7dc713cd6d35eb52e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
