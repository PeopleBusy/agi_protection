<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_55c9da395f7d8c13244f7034bd222ceb581a85090f888b97015eb16406d3211c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c9da395f7d8c13244f7034bd222ceb581a85090f888b97015eb16406d3211c->enter($__internal_55c9da395f7d8c13244f7034bd222ceb581a85090f888b97015eb16406d3211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6391a27b6799c20420f3e8cb9af140ff34d1d897f0caf19b18835c36f5339bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6391a27b6799c20420f3e8cb9af140ff34d1d897f0caf19b18835c36f5339bb9->enter($__internal_6391a27b6799c20420f3e8cb9af140ff34d1d897f0caf19b18835c36f5339bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_55c9da395f7d8c13244f7034bd222ceb581a85090f888b97015eb16406d3211c->leave($__internal_55c9da395f7d8c13244f7034bd222ceb581a85090f888b97015eb16406d3211c_prof);

        
        $__internal_6391a27b6799c20420f3e8cb9af140ff34d1d897f0caf19b18835c36f5339bb9->leave($__internal_6391a27b6799c20420f3e8cb9af140ff34d1d897f0caf19b18835c36f5339bb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
