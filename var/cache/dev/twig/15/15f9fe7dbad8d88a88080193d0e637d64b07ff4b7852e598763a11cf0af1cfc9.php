<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9f9bd82cbf3e2d616e8b1fdd1ac49e8c2b2c9b00478f6a08a51cc47e6c0dc6e0 extends Twig_Template
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
        $__internal_5d58091a7a6d6b7fea042edfc2dbe2ddbdb80afb3b759b02b70a108d16a5ca7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d58091a7a6d6b7fea042edfc2dbe2ddbdb80afb3b759b02b70a108d16a5ca7f->enter($__internal_5d58091a7a6d6b7fea042edfc2dbe2ddbdb80afb3b759b02b70a108d16a5ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9de16cdf878ca41d32be027547fff7dd33ed1b161570e9e877865f307ac79c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de16cdf878ca41d32be027547fff7dd33ed1b161570e9e877865f307ac79c5a->enter($__internal_9de16cdf878ca41d32be027547fff7dd33ed1b161570e9e877865f307ac79c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5d58091a7a6d6b7fea042edfc2dbe2ddbdb80afb3b759b02b70a108d16a5ca7f->leave($__internal_5d58091a7a6d6b7fea042edfc2dbe2ddbdb80afb3b759b02b70a108d16a5ca7f_prof);

        
        $__internal_9de16cdf878ca41d32be027547fff7dd33ed1b161570e9e877865f307ac79c5a->leave($__internal_9de16cdf878ca41d32be027547fff7dd33ed1b161570e9e877865f307ac79c5a_prof);

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
