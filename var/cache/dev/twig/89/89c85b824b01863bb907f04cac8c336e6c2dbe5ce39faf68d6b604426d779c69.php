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
        $__internal_fb67ef04b2b079d2e29ceca0c584f079eebbea65e6681a9cac664d7b1b2a36c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb67ef04b2b079d2e29ceca0c584f079eebbea65e6681a9cac664d7b1b2a36c2->enter($__internal_fb67ef04b2b079d2e29ceca0c584f079eebbea65e6681a9cac664d7b1b2a36c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_df1988f3a4c963c72425a5941f1c134f1e2e6dbe8ab9db592ef3dfe6423cc211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1988f3a4c963c72425a5941f1c134f1e2e6dbe8ab9db592ef3dfe6423cc211->enter($__internal_df1988f3a4c963c72425a5941f1c134f1e2e6dbe8ab9db592ef3dfe6423cc211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_fb67ef04b2b079d2e29ceca0c584f079eebbea65e6681a9cac664d7b1b2a36c2->leave($__internal_fb67ef04b2b079d2e29ceca0c584f079eebbea65e6681a9cac664d7b1b2a36c2_prof);

        
        $__internal_df1988f3a4c963c72425a5941f1c134f1e2e6dbe8ab9db592ef3dfe6423cc211->leave($__internal_df1988f3a4c963c72425a5941f1c134f1e2e6dbe8ab9db592ef3dfe6423cc211_prof);

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
", "@Framework/Form/form_start.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
