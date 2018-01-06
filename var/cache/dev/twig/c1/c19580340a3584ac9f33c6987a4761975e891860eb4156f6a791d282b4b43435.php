<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5d2f59b455bd9b18eb53d215f18f9cd2063739924082f97c95ffc58ddcf2f73c extends Twig_Template
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
        $__internal_f4296981ca4ac92e1e41f64e1a11025755f9b400235eadd865880557bc88e283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4296981ca4ac92e1e41f64e1a11025755f9b400235eadd865880557bc88e283->enter($__internal_f4296981ca4ac92e1e41f64e1a11025755f9b400235eadd865880557bc88e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4761e7d64ddb6922f1fcac2f3ac5689ccb05af1e172661951879a69409e1c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4761e7d64ddb6922f1fcac2f3ac5689ccb05af1e172661951879a69409e1c15a->enter($__internal_4761e7d64ddb6922f1fcac2f3ac5689ccb05af1e172661951879a69409e1c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f4296981ca4ac92e1e41f64e1a11025755f9b400235eadd865880557bc88e283->leave($__internal_f4296981ca4ac92e1e41f64e1a11025755f9b400235eadd865880557bc88e283_prof);

        
        $__internal_4761e7d64ddb6922f1fcac2f3ac5689ccb05af1e172661951879a69409e1c15a->leave($__internal_4761e7d64ddb6922f1fcac2f3ac5689ccb05af1e172661951879a69409e1c15a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
