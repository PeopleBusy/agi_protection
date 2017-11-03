<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce2bf6b26baacc28cd40a621e4dd1a12ac0306ff9a3c8e253dc379e592380e2b extends Twig_Template
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
        $__internal_98a16a82b04524873da8a86baae25f783fb94149a9b2cc1ca2a878e18434b3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a16a82b04524873da8a86baae25f783fb94149a9b2cc1ca2a878e18434b3ff->enter($__internal_98a16a82b04524873da8a86baae25f783fb94149a9b2cc1ca2a878e18434b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e6506dbe481864a2d0bf862e94a084d53aa72abacced839e7253f5c98cf5e8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6506dbe481864a2d0bf862e94a084d53aa72abacced839e7253f5c98cf5e8ad->enter($__internal_e6506dbe481864a2d0bf862e94a084d53aa72abacced839e7253f5c98cf5e8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98a16a82b04524873da8a86baae25f783fb94149a9b2cc1ca2a878e18434b3ff->leave($__internal_98a16a82b04524873da8a86baae25f783fb94149a9b2cc1ca2a878e18434b3ff_prof);

        
        $__internal_e6506dbe481864a2d0bf862e94a084d53aa72abacced839e7253f5c98cf5e8ad->leave($__internal_e6506dbe481864a2d0bf862e94a084d53aa72abacced839e7253f5c98cf5e8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
