<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b7dbf2d294ccdf6528b818f87cf641938939033edd546cd0aa852bab60474ba8 extends Twig_Template
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
        $__internal_d61282eada615d5bd8ef4f6c67cb274b4f12cf802137da0d27b65bb6b3f7cbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61282eada615d5bd8ef4f6c67cb274b4f12cf802137da0d27b65bb6b3f7cbca->enter($__internal_d61282eada615d5bd8ef4f6c67cb274b4f12cf802137da0d27b65bb6b3f7cbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ef28f254b06a691a54894a06907009ae71562b055710c04ad60c694a31cadf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef28f254b06a691a54894a06907009ae71562b055710c04ad60c694a31cadf7b->enter($__internal_ef28f254b06a691a54894a06907009ae71562b055710c04ad60c694a31cadf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d61282eada615d5bd8ef4f6c67cb274b4f12cf802137da0d27b65bb6b3f7cbca->leave($__internal_d61282eada615d5bd8ef4f6c67cb274b4f12cf802137da0d27b65bb6b3f7cbca_prof);

        
        $__internal_ef28f254b06a691a54894a06907009ae71562b055710c04ad60c694a31cadf7b->leave($__internal_ef28f254b06a691a54894a06907009ae71562b055710c04ad60c694a31cadf7b_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
