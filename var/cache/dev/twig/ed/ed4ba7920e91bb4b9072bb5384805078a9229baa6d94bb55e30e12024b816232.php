<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5bed711bd529d97aafdec2aae391b2878ca236620972aa93d7d25bbd6b0e0859 extends Twig_Template
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
        $__internal_920fa8ce70545602c91c46f545dee7670ea915170de699a5de029d115153260c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920fa8ce70545602c91c46f545dee7670ea915170de699a5de029d115153260c->enter($__internal_920fa8ce70545602c91c46f545dee7670ea915170de699a5de029d115153260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cb078b88fb98f9e333d4bba109d4db404fbee5745fdcdebb53460e98c149dbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb078b88fb98f9e333d4bba109d4db404fbee5745fdcdebb53460e98c149dbc9->enter($__internal_cb078b88fb98f9e333d4bba109d4db404fbee5745fdcdebb53460e98c149dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_920fa8ce70545602c91c46f545dee7670ea915170de699a5de029d115153260c->leave($__internal_920fa8ce70545602c91c46f545dee7670ea915170de699a5de029d115153260c_prof);

        
        $__internal_cb078b88fb98f9e333d4bba109d4db404fbee5745fdcdebb53460e98c149dbc9->leave($__internal_cb078b88fb98f9e333d4bba109d4db404fbee5745fdcdebb53460e98c149dbc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
