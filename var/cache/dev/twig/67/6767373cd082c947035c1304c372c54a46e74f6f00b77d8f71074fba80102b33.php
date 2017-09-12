<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_99ad7fdaf6e176eccd547be187523b39eb9e734ba28f4ed00da5c28d9122c367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ad7fdaf6e176eccd547be187523b39eb9e734ba28f4ed00da5c28d9122c367->enter($__internal_99ad7fdaf6e176eccd547be187523b39eb9e734ba28f4ed00da5c28d9122c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cbf65a862e563c48c281284bd4cb39f060da80351d7ede58568f68095c250d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf65a862e563c48c281284bd4cb39f060da80351d7ede58568f68095c250d2b->enter($__internal_cbf65a862e563c48c281284bd4cb39f060da80351d7ede58568f68095c250d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_99ad7fdaf6e176eccd547be187523b39eb9e734ba28f4ed00da5c28d9122c367->leave($__internal_99ad7fdaf6e176eccd547be187523b39eb9e734ba28f4ed00da5c28d9122c367_prof);

        
        $__internal_cbf65a862e563c48c281284bd4cb39f060da80351d7ede58568f68095c250d2b->leave($__internal_cbf65a862e563c48c281284bd4cb39f060da80351d7ede58568f68095c250d2b_prof);

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
", "@Framework/Form/percent_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
