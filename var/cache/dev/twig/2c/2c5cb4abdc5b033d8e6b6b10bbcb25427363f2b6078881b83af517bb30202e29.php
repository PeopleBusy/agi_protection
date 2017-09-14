<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_aef09618e155debaf3e87baa49cac8552e848fcd3c516476415b50a234d4f36d extends Twig_Template
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
        $__internal_f359f57799562288b9e5aa45eabe1f5328cbdcccece9bbe14952f163eff686cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f359f57799562288b9e5aa45eabe1f5328cbdcccece9bbe14952f163eff686cd->enter($__internal_f359f57799562288b9e5aa45eabe1f5328cbdcccece9bbe14952f163eff686cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_73c07c2baa097f206605200630a24704f67764eccb6e336e71b0d1f0b78f7fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c07c2baa097f206605200630a24704f67764eccb6e336e71b0d1f0b78f7fdd->enter($__internal_73c07c2baa097f206605200630a24704f67764eccb6e336e71b0d1f0b78f7fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f359f57799562288b9e5aa45eabe1f5328cbdcccece9bbe14952f163eff686cd->leave($__internal_f359f57799562288b9e5aa45eabe1f5328cbdcccece9bbe14952f163eff686cd_prof);

        
        $__internal_73c07c2baa097f206605200630a24704f67764eccb6e336e71b0d1f0b78f7fdd->leave($__internal_73c07c2baa097f206605200630a24704f67764eccb6e336e71b0d1f0b78f7fdd_prof);

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
