<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_a36b48caccf460d059011c8a320476d25f3dae32d4852e7d117f29b20cfba00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36b48caccf460d059011c8a320476d25f3dae32d4852e7d117f29b20cfba00e->enter($__internal_a36b48caccf460d059011c8a320476d25f3dae32d4852e7d117f29b20cfba00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_070fc26806d46c2e74acb67afc8d17bb43e4f9f9c349d73304a62fdece91ec3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070fc26806d46c2e74acb67afc8d17bb43e4f9f9c349d73304a62fdece91ec3d->enter($__internal_070fc26806d46c2e74acb67afc8d17bb43e4f9f9c349d73304a62fdece91ec3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a36b48caccf460d059011c8a320476d25f3dae32d4852e7d117f29b20cfba00e->leave($__internal_a36b48caccf460d059011c8a320476d25f3dae32d4852e7d117f29b20cfba00e_prof);

        
        $__internal_070fc26806d46c2e74acb67afc8d17bb43e4f9f9c349d73304a62fdece91ec3d->leave($__internal_070fc26806d46c2e74acb67afc8d17bb43e4f9f9c349d73304a62fdece91ec3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
