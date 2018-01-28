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
        $__internal_320f0910c0fc1315ec643f1fa76685ef75bc12d240918e6749dc179c5f10ef26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320f0910c0fc1315ec643f1fa76685ef75bc12d240918e6749dc179c5f10ef26->enter($__internal_320f0910c0fc1315ec643f1fa76685ef75bc12d240918e6749dc179c5f10ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_637bd1125062b070d6d93faec80cb82e335e8bb5209f95e6c0f6742c81671922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637bd1125062b070d6d93faec80cb82e335e8bb5209f95e6c0f6742c81671922->enter($__internal_637bd1125062b070d6d93faec80cb82e335e8bb5209f95e6c0f6742c81671922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_320f0910c0fc1315ec643f1fa76685ef75bc12d240918e6749dc179c5f10ef26->leave($__internal_320f0910c0fc1315ec643f1fa76685ef75bc12d240918e6749dc179c5f10ef26_prof);

        
        $__internal_637bd1125062b070d6d93faec80cb82e335e8bb5209f95e6c0f6742c81671922->leave($__internal_637bd1125062b070d6d93faec80cb82e335e8bb5209f95e6c0f6742c81671922_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
