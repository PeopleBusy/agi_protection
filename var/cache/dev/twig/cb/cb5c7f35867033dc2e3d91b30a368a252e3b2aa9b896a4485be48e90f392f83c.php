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
        $__internal_27684ec943a0cb1d4dc56e9dd20080b57a265d34f862b39653d30b008f7b95f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27684ec943a0cb1d4dc56e9dd20080b57a265d34f862b39653d30b008f7b95f8->enter($__internal_27684ec943a0cb1d4dc56e9dd20080b57a265d34f862b39653d30b008f7b95f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8ee8661af360a3b2ae40c37234800835553b6ac816d813230a455de149a57d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee8661af360a3b2ae40c37234800835553b6ac816d813230a455de149a57d37->enter($__internal_8ee8661af360a3b2ae40c37234800835553b6ac816d813230a455de149a57d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_27684ec943a0cb1d4dc56e9dd20080b57a265d34f862b39653d30b008f7b95f8->leave($__internal_27684ec943a0cb1d4dc56e9dd20080b57a265d34f862b39653d30b008f7b95f8_prof);

        
        $__internal_8ee8661af360a3b2ae40c37234800835553b6ac816d813230a455de149a57d37->leave($__internal_8ee8661af360a3b2ae40c37234800835553b6ac816d813230a455de149a57d37_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
