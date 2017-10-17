<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_388b271783502254e0c38814af730c1c752f7b97527fa283749e2f09f03ad05f extends Twig_Template
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
        $__internal_0b8502761bec3985ce6b592c9d6516eda000beb946cf66bc2601254f5467f635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8502761bec3985ce6b592c9d6516eda000beb946cf66bc2601254f5467f635->enter($__internal_0b8502761bec3985ce6b592c9d6516eda000beb946cf66bc2601254f5467f635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2192d11eac32edba0b53f5c25ae26d762f338178f77ab071e59aa5a4a8463e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2192d11eac32edba0b53f5c25ae26d762f338178f77ab071e59aa5a4a8463e22->enter($__internal_2192d11eac32edba0b53f5c25ae26d762f338178f77ab071e59aa5a4a8463e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0b8502761bec3985ce6b592c9d6516eda000beb946cf66bc2601254f5467f635->leave($__internal_0b8502761bec3985ce6b592c9d6516eda000beb946cf66bc2601254f5467f635_prof);

        
        $__internal_2192d11eac32edba0b53f5c25ae26d762f338178f77ab071e59aa5a4a8463e22->leave($__internal_2192d11eac32edba0b53f5c25ae26d762f338178f77ab071e59aa5a4a8463e22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
