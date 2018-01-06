<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b80005f94298f592105f7cbb35dbcd7cf47e9cfc202a8a87d505a7df03d29b64 extends Twig_Template
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
        $__internal_466bb62d3db4fb794dc2e89bfeeb9f0f418fbb4fed2beed05ae9f53cf9d2e263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466bb62d3db4fb794dc2e89bfeeb9f0f418fbb4fed2beed05ae9f53cf9d2e263->enter($__internal_466bb62d3db4fb794dc2e89bfeeb9f0f418fbb4fed2beed05ae9f53cf9d2e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_d9e8942037e0d45b8db30d7d89ff0b7c383e43bbb545847d6adc21e1deae2d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e8942037e0d45b8db30d7d89ff0b7c383e43bbb545847d6adc21e1deae2d6b->enter($__internal_d9e8942037e0d45b8db30d7d89ff0b7c383e43bbb545847d6adc21e1deae2d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_466bb62d3db4fb794dc2e89bfeeb9f0f418fbb4fed2beed05ae9f53cf9d2e263->leave($__internal_466bb62d3db4fb794dc2e89bfeeb9f0f418fbb4fed2beed05ae9f53cf9d2e263_prof);

        
        $__internal_d9e8942037e0d45b8db30d7d89ff0b7c383e43bbb545847d6adc21e1deae2d6b->leave($__internal_d9e8942037e0d45b8db30d7d89ff0b7c383e43bbb545847d6adc21e1deae2d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
