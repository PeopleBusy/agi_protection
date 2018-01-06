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
        $__internal_d413aee9f3e018941654cd33ed23ebade58614332b9d9b25d06dbb4a2d6ea267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d413aee9f3e018941654cd33ed23ebade58614332b9d9b25d06dbb4a2d6ea267->enter($__internal_d413aee9f3e018941654cd33ed23ebade58614332b9d9b25d06dbb4a2d6ea267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4f2d4a5230d5af662c7efbac5949ee6df24e2818cf928dae392774239c2933c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2d4a5230d5af662c7efbac5949ee6df24e2818cf928dae392774239c2933c6->enter($__internal_4f2d4a5230d5af662c7efbac5949ee6df24e2818cf928dae392774239c2933c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d413aee9f3e018941654cd33ed23ebade58614332b9d9b25d06dbb4a2d6ea267->leave($__internal_d413aee9f3e018941654cd33ed23ebade58614332b9d9b25d06dbb4a2d6ea267_prof);

        
        $__internal_4f2d4a5230d5af662c7efbac5949ee6df24e2818cf928dae392774239c2933c6->leave($__internal_4f2d4a5230d5af662c7efbac5949ee6df24e2818cf928dae392774239c2933c6_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
