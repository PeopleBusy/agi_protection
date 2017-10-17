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
        $__internal_947b9a4d5f0e3011a6fb09aec22d93ceb14d915c0477ad37c6cd3b6925b0d4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947b9a4d5f0e3011a6fb09aec22d93ceb14d915c0477ad37c6cd3b6925b0d4ff->enter($__internal_947b9a4d5f0e3011a6fb09aec22d93ceb14d915c0477ad37c6cd3b6925b0d4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4a4bbffa7b3a174be93897b46f3c2227e95ef3540f2a45b94f6a37e539ff4bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4bbffa7b3a174be93897b46f3c2227e95ef3540f2a45b94f6a37e539ff4bed->enter($__internal_4a4bbffa7b3a174be93897b46f3c2227e95ef3540f2a45b94f6a37e539ff4bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_947b9a4d5f0e3011a6fb09aec22d93ceb14d915c0477ad37c6cd3b6925b0d4ff->leave($__internal_947b9a4d5f0e3011a6fb09aec22d93ceb14d915c0477ad37c6cd3b6925b0d4ff_prof);

        
        $__internal_4a4bbffa7b3a174be93897b46f3c2227e95ef3540f2a45b94f6a37e539ff4bed->leave($__internal_4a4bbffa7b3a174be93897b46f3c2227e95ef3540f2a45b94f6a37e539ff4bed_prof);

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
