<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5ffd182a1150690ad125cf17aeb69d97b398c046135328a9362f5efdac4e5ce1 extends Twig_Template
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
        $__internal_465bdf0897460fff9779963da6b9f785af93056ee87605586781c557efbdd1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465bdf0897460fff9779963da6b9f785af93056ee87605586781c557efbdd1e7->enter($__internal_465bdf0897460fff9779963da6b9f785af93056ee87605586781c557efbdd1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_99752977d772e7582307ac907ff04953c0551aa29eab51ca33b55377cc0d1e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99752977d772e7582307ac907ff04953c0551aa29eab51ca33b55377cc0d1e59->enter($__internal_99752977d772e7582307ac907ff04953c0551aa29eab51ca33b55377cc0d1e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_465bdf0897460fff9779963da6b9f785af93056ee87605586781c557efbdd1e7->leave($__internal_465bdf0897460fff9779963da6b9f785af93056ee87605586781c557efbdd1e7_prof);

        
        $__internal_99752977d772e7582307ac907ff04953c0551aa29eab51ca33b55377cc0d1e59->leave($__internal_99752977d772e7582307ac907ff04953c0551aa29eab51ca33b55377cc0d1e59_prof);

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
", "@Framework/Form/search_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
