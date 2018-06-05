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
        $__internal_2f9b90b28b4640503bb7a097cd4283fc96c3605dcebca9b8673ce9cee3b54938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9b90b28b4640503bb7a097cd4283fc96c3605dcebca9b8673ce9cee3b54938->enter($__internal_2f9b90b28b4640503bb7a097cd4283fc96c3605dcebca9b8673ce9cee3b54938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_80f0458e461d549aa6c8b6172e11e1c022756bf61e7eba98357d9e77fb966f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f0458e461d549aa6c8b6172e11e1c022756bf61e7eba98357d9e77fb966f09->enter($__internal_80f0458e461d549aa6c8b6172e11e1c022756bf61e7eba98357d9e77fb966f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2f9b90b28b4640503bb7a097cd4283fc96c3605dcebca9b8673ce9cee3b54938->leave($__internal_2f9b90b28b4640503bb7a097cd4283fc96c3605dcebca9b8673ce9cee3b54938_prof);

        
        $__internal_80f0458e461d549aa6c8b6172e11e1c022756bf61e7eba98357d9e77fb966f09->leave($__internal_80f0458e461d549aa6c8b6172e11e1c022756bf61e7eba98357d9e77fb966f09_prof);

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
