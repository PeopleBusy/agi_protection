<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_34832029462b9bc695b2976522f25bc88bc3b308bbfc8d16101dd4d8207ff74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34832029462b9bc695b2976522f25bc88bc3b308bbfc8d16101dd4d8207ff74f->enter($__internal_34832029462b9bc695b2976522f25bc88bc3b308bbfc8d16101dd4d8207ff74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_85dc698da22997dd19c2c886d951288cba8fc13552668c779cd81fd3716b9054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc698da22997dd19c2c886d951288cba8fc13552668c779cd81fd3716b9054->enter($__internal_85dc698da22997dd19c2c886d951288cba8fc13552668c779cd81fd3716b9054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_34832029462b9bc695b2976522f25bc88bc3b308bbfc8d16101dd4d8207ff74f->leave($__internal_34832029462b9bc695b2976522f25bc88bc3b308bbfc8d16101dd4d8207ff74f_prof);

        
        $__internal_85dc698da22997dd19c2c886d951288cba8fc13552668c779cd81fd3716b9054->leave($__internal_85dc698da22997dd19c2c886d951288cba8fc13552668c779cd81fd3716b9054_prof);

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
", "@Framework/Form/form_rest.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
