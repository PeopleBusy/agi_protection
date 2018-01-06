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
        $__internal_87b1107329dc79a0b9f0cdc87eba94c9c66b26a13436c864db80302ed40b7360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b1107329dc79a0b9f0cdc87eba94c9c66b26a13436c864db80302ed40b7360->enter($__internal_87b1107329dc79a0b9f0cdc87eba94c9c66b26a13436c864db80302ed40b7360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d94d621572d2152e0d94b145e3992dcb31953fb696e2a160842ac92602b2f105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94d621572d2152e0d94b145e3992dcb31953fb696e2a160842ac92602b2f105->enter($__internal_d94d621572d2152e0d94b145e3992dcb31953fb696e2a160842ac92602b2f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_87b1107329dc79a0b9f0cdc87eba94c9c66b26a13436c864db80302ed40b7360->leave($__internal_87b1107329dc79a0b9f0cdc87eba94c9c66b26a13436c864db80302ed40b7360_prof);

        
        $__internal_d94d621572d2152e0d94b145e3992dcb31953fb696e2a160842ac92602b2f105->leave($__internal_d94d621572d2152e0d94b145e3992dcb31953fb696e2a160842ac92602b2f105_prof);

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
