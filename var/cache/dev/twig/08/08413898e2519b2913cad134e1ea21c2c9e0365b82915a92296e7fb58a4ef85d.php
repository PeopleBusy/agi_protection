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
        $__internal_211697af6502701a9b4f92459eab8255b7b78abc0c953f77a685c0e8dde8c696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211697af6502701a9b4f92459eab8255b7b78abc0c953f77a685c0e8dde8c696->enter($__internal_211697af6502701a9b4f92459eab8255b7b78abc0c953f77a685c0e8dde8c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f8bb2ee67a908e99a9f728fb32bd695cf144be70205bfacbfa7fe6faceb8f1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bb2ee67a908e99a9f728fb32bd695cf144be70205bfacbfa7fe6faceb8f1ca->enter($__internal_f8bb2ee67a908e99a9f728fb32bd695cf144be70205bfacbfa7fe6faceb8f1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_211697af6502701a9b4f92459eab8255b7b78abc0c953f77a685c0e8dde8c696->leave($__internal_211697af6502701a9b4f92459eab8255b7b78abc0c953f77a685c0e8dde8c696_prof);

        
        $__internal_f8bb2ee67a908e99a9f728fb32bd695cf144be70205bfacbfa7fe6faceb8f1ca->leave($__internal_f8bb2ee67a908e99a9f728fb32bd695cf144be70205bfacbfa7fe6faceb8f1ca_prof);

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
