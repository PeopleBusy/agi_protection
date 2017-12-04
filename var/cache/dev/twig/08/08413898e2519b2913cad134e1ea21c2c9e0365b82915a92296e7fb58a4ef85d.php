<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6b65a7816dbf3ecc0488128f75d44fcfcca890cb9a1ca8461a8a30f89c18b19c extends Twig_Template
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
        $__internal_23153dd0f6170c34cfe074155af5890b32bbb07b3509bb0306bc733f8880b402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23153dd0f6170c34cfe074155af5890b32bbb07b3509bb0306bc733f8880b402->enter($__internal_23153dd0f6170c34cfe074155af5890b32bbb07b3509bb0306bc733f8880b402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1f41de456e7b13b6f40e29fb5375d97e0acb2d2f5d64904218b790fc74f94ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f41de456e7b13b6f40e29fb5375d97e0acb2d2f5d64904218b790fc74f94ee8->enter($__internal_1f41de456e7b13b6f40e29fb5375d97e0acb2d2f5d64904218b790fc74f94ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_23153dd0f6170c34cfe074155af5890b32bbb07b3509bb0306bc733f8880b402->leave($__internal_23153dd0f6170c34cfe074155af5890b32bbb07b3509bb0306bc733f8880b402_prof);

        
        $__internal_1f41de456e7b13b6f40e29fb5375d97e0acb2d2f5d64904218b790fc74f94ee8->leave($__internal_1f41de456e7b13b6f40e29fb5375d97e0acb2d2f5d64904218b790fc74f94ee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
