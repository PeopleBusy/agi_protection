<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_382dad1afdf54170201ca9306241f579feaf0786496f7eca8d3044e15f603260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382dad1afdf54170201ca9306241f579feaf0786496f7eca8d3044e15f603260->enter($__internal_382dad1afdf54170201ca9306241f579feaf0786496f7eca8d3044e15f603260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0ee299f7319915c204ee13fd5c3bda2fdc56133d9e815fccce331e3734e2715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee299f7319915c204ee13fd5c3bda2fdc56133d9e815fccce331e3734e2715c->enter($__internal_0ee299f7319915c204ee13fd5c3bda2fdc56133d9e815fccce331e3734e2715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_382dad1afdf54170201ca9306241f579feaf0786496f7eca8d3044e15f603260->leave($__internal_382dad1afdf54170201ca9306241f579feaf0786496f7eca8d3044e15f603260_prof);

        
        $__internal_0ee299f7319915c204ee13fd5c3bda2fdc56133d9e815fccce331e3734e2715c->leave($__internal_0ee299f7319915c204ee13fd5c3bda2fdc56133d9e815fccce331e3734e2715c_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
