<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_89d7556ab2960bfc0c485cfda51ba43c18fa50b7f9891a7e6fc5eb50e6693ca5 extends Twig_Template
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
        $__internal_ed146633e0dfb40daeda4c279b186498f64737e48fffcda945ed103b6c581984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed146633e0dfb40daeda4c279b186498f64737e48fffcda945ed103b6c581984->enter($__internal_ed146633e0dfb40daeda4c279b186498f64737e48fffcda945ed103b6c581984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3a80b4909dc2fa297596b126905980a20c78fde7385d7605d4b228e01eb866d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a80b4909dc2fa297596b126905980a20c78fde7385d7605d4b228e01eb866d0->enter($__internal_3a80b4909dc2fa297596b126905980a20c78fde7385d7605d4b228e01eb866d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed146633e0dfb40daeda4c279b186498f64737e48fffcda945ed103b6c581984->leave($__internal_ed146633e0dfb40daeda4c279b186498f64737e48fffcda945ed103b6c581984_prof);

        
        $__internal_3a80b4909dc2fa297596b126905980a20c78fde7385d7605d4b228e01eb866d0->leave($__internal_3a80b4909dc2fa297596b126905980a20c78fde7385d7605d4b228e01eb866d0_prof);

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
", "@Framework/Form/button_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
