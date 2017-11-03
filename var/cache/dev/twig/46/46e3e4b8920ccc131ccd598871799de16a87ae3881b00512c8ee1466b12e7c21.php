<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_15ae758182a2ce503e295613aab4677bb85fed7dabdff6220be2ceaab2afd357 extends Twig_Template
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
        $__internal_cd58e3d0f82924857a5c4f9490c56811e7a6a33888d82b09974a600a1a94d980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd58e3d0f82924857a5c4f9490c56811e7a6a33888d82b09974a600a1a94d980->enter($__internal_cd58e3d0f82924857a5c4f9490c56811e7a6a33888d82b09974a600a1a94d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2ee1a198f3223d365f55e67deadd6359b8cec5763e7334f9c8ced4a9d4897f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee1a198f3223d365f55e67deadd6359b8cec5763e7334f9c8ced4a9d4897f92->enter($__internal_2ee1a198f3223d365f55e67deadd6359b8cec5763e7334f9c8ced4a9d4897f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd58e3d0f82924857a5c4f9490c56811e7a6a33888d82b09974a600a1a94d980->leave($__internal_cd58e3d0f82924857a5c4f9490c56811e7a6a33888d82b09974a600a1a94d980_prof);

        
        $__internal_2ee1a198f3223d365f55e67deadd6359b8cec5763e7334f9c8ced4a9d4897f92->leave($__internal_2ee1a198f3223d365f55e67deadd6359b8cec5763e7334f9c8ced4a9d4897f92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
