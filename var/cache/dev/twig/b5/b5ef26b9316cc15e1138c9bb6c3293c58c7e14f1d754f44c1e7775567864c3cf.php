<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c230a4dc2e561a5f539ac1b538d80868b21a13844f3a3fcb1c3e9fa752c0b5ea extends Twig_Template
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
        $__internal_c7069f6a5a756cb97afd68fe12173054cfbb74ebd514d731e8df189f8775819e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7069f6a5a756cb97afd68fe12173054cfbb74ebd514d731e8df189f8775819e->enter($__internal_c7069f6a5a756cb97afd68fe12173054cfbb74ebd514d731e8df189f8775819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_46ac2800624c1d1263153f2dd65111d1802361318d0fd4ddf5b14a1ccc7b2e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ac2800624c1d1263153f2dd65111d1802361318d0fd4ddf5b14a1ccc7b2e9a->enter($__internal_46ac2800624c1d1263153f2dd65111d1802361318d0fd4ddf5b14a1ccc7b2e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c7069f6a5a756cb97afd68fe12173054cfbb74ebd514d731e8df189f8775819e->leave($__internal_c7069f6a5a756cb97afd68fe12173054cfbb74ebd514d731e8df189f8775819e_prof);

        
        $__internal_46ac2800624c1d1263153f2dd65111d1802361318d0fd4ddf5b14a1ccc7b2e9a->leave($__internal_46ac2800624c1d1263153f2dd65111d1802361318d0fd4ddf5b14a1ccc7b2e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
