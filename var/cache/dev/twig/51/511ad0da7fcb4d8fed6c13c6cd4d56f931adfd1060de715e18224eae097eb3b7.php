<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_922c05d9bd9f3f59d39300cce22fbc65deb05c689a7d2b3584d25f31f2ae837f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922c05d9bd9f3f59d39300cce22fbc65deb05c689a7d2b3584d25f31f2ae837f->enter($__internal_922c05d9bd9f3f59d39300cce22fbc65deb05c689a7d2b3584d25f31f2ae837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b6d5404c7af0121a359edf6ef796f34947e6530b74ead2a1b4fd1530c71778b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d5404c7af0121a359edf6ef796f34947e6530b74ead2a1b4fd1530c71778b7->enter($__internal_b6d5404c7af0121a359edf6ef796f34947e6530b74ead2a1b4fd1530c71778b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_922c05d9bd9f3f59d39300cce22fbc65deb05c689a7d2b3584d25f31f2ae837f->leave($__internal_922c05d9bd9f3f59d39300cce22fbc65deb05c689a7d2b3584d25f31f2ae837f_prof);

        
        $__internal_b6d5404c7af0121a359edf6ef796f34947e6530b74ead2a1b4fd1530c71778b7->leave($__internal_b6d5404c7af0121a359edf6ef796f34947e6530b74ead2a1b4fd1530c71778b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
