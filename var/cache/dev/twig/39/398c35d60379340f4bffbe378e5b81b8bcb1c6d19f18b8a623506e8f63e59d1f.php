<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7d69e137889a264dd5ab73f62ce18aac1871cd39255162cb0e299ac7bcd36f2f extends Twig_Template
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
        $__internal_34d1673a3a87de1b72dc5af4450c028253be3b5b346ddef78937cc67a4eff7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d1673a3a87de1b72dc5af4450c028253be3b5b346ddef78937cc67a4eff7af->enter($__internal_34d1673a3a87de1b72dc5af4450c028253be3b5b346ddef78937cc67a4eff7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_63bcda3f53adc7c53ac3a8cadd5ccf89fa51c1591d2446afe86182eb9a581ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bcda3f53adc7c53ac3a8cadd5ccf89fa51c1591d2446afe86182eb9a581ad3->enter($__internal_63bcda3f53adc7c53ac3a8cadd5ccf89fa51c1591d2446afe86182eb9a581ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_34d1673a3a87de1b72dc5af4450c028253be3b5b346ddef78937cc67a4eff7af->leave($__internal_34d1673a3a87de1b72dc5af4450c028253be3b5b346ddef78937cc67a4eff7af_prof);

        
        $__internal_63bcda3f53adc7c53ac3a8cadd5ccf89fa51c1591d2446afe86182eb9a581ad3->leave($__internal_63bcda3f53adc7c53ac3a8cadd5ccf89fa51c1591d2446afe86182eb9a581ad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
