<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_9dd5868a303b45b46df1875bd05f0fae1a26f03da88a7b1bfd47bce750ec5913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd5868a303b45b46df1875bd05f0fae1a26f03da88a7b1bfd47bce750ec5913->enter($__internal_9dd5868a303b45b46df1875bd05f0fae1a26f03da88a7b1bfd47bce750ec5913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ac9c4ae4d3ebb14e6e355e50600ac8534d305f79caaade9996494405030cad4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9c4ae4d3ebb14e6e355e50600ac8534d305f79caaade9996494405030cad4b->enter($__internal_ac9c4ae4d3ebb14e6e355e50600ac8534d305f79caaade9996494405030cad4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9dd5868a303b45b46df1875bd05f0fae1a26f03da88a7b1bfd47bce750ec5913->leave($__internal_9dd5868a303b45b46df1875bd05f0fae1a26f03da88a7b1bfd47bce750ec5913_prof);

        
        $__internal_ac9c4ae4d3ebb14e6e355e50600ac8534d305f79caaade9996494405030cad4b->leave($__internal_ac9c4ae4d3ebb14e6e355e50600ac8534d305f79caaade9996494405030cad4b_prof);

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
