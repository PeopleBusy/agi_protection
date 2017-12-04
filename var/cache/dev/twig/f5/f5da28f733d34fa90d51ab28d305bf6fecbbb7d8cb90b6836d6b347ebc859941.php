<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ff8434ca7e93d453d1ace8202b3dfb7f96dff1170c28adb751c1ded683fc91f6 extends Twig_Template
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
        $__internal_58b5c1e3b4ab53608e4a990001579174bd874c880f91e0066e7880bd98ed52b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b5c1e3b4ab53608e4a990001579174bd874c880f91e0066e7880bd98ed52b1->enter($__internal_58b5c1e3b4ab53608e4a990001579174bd874c880f91e0066e7880bd98ed52b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e6a524c5d5f99e920d5e8479b31ef30b5eccd854ce5601011c00a9c0f7e36136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a524c5d5f99e920d5e8479b31ef30b5eccd854ce5601011c00a9c0f7e36136->enter($__internal_e6a524c5d5f99e920d5e8479b31ef30b5eccd854ce5601011c00a9c0f7e36136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_58b5c1e3b4ab53608e4a990001579174bd874c880f91e0066e7880bd98ed52b1->leave($__internal_58b5c1e3b4ab53608e4a990001579174bd874c880f91e0066e7880bd98ed52b1_prof);

        
        $__internal_e6a524c5d5f99e920d5e8479b31ef30b5eccd854ce5601011c00a9c0f7e36136->leave($__internal_e6a524c5d5f99e920d5e8479b31ef30b5eccd854ce5601011c00a9c0f7e36136_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
