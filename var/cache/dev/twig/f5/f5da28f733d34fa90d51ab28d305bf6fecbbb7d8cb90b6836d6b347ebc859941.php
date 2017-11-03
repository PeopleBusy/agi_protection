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
        $__internal_ae1a056682bfc28ac7bed2ce0696088750a1c8f8601ffba129359bc29cbcb74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1a056682bfc28ac7bed2ce0696088750a1c8f8601ffba129359bc29cbcb74e->enter($__internal_ae1a056682bfc28ac7bed2ce0696088750a1c8f8601ffba129359bc29cbcb74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_add3dd42856bfcf35d5a9c8143a7fcda40b44424dd42f74a45a4fcf9da6cd43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add3dd42856bfcf35d5a9c8143a7fcda40b44424dd42f74a45a4fcf9da6cd43e->enter($__internal_add3dd42856bfcf35d5a9c8143a7fcda40b44424dd42f74a45a4fcf9da6cd43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ae1a056682bfc28ac7bed2ce0696088750a1c8f8601ffba129359bc29cbcb74e->leave($__internal_ae1a056682bfc28ac7bed2ce0696088750a1c8f8601ffba129359bc29cbcb74e_prof);

        
        $__internal_add3dd42856bfcf35d5a9c8143a7fcda40b44424dd42f74a45a4fcf9da6cd43e->leave($__internal_add3dd42856bfcf35d5a9c8143a7fcda40b44424dd42f74a45a4fcf9da6cd43e_prof);

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
