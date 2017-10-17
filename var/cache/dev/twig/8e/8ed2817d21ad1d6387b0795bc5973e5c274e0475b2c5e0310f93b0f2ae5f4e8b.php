<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_207686c754c99085e19079cf3fc7dabc29c886ee107a9cf015144defdb79c98b extends Twig_Template
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
        $__internal_24903047e41d2a433db4a914b6a026c2bd4e12304592a8b060395f01071eaea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24903047e41d2a433db4a914b6a026c2bd4e12304592a8b060395f01071eaea5->enter($__internal_24903047e41d2a433db4a914b6a026c2bd4e12304592a8b060395f01071eaea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7f6b9d8a7d30bd019900831f2e25d5ad301d86de330357c7b256fd3fe47e7447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b9d8a7d30bd019900831f2e25d5ad301d86de330357c7b256fd3fe47e7447->enter($__internal_7f6b9d8a7d30bd019900831f2e25d5ad301d86de330357c7b256fd3fe47e7447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_24903047e41d2a433db4a914b6a026c2bd4e12304592a8b060395f01071eaea5->leave($__internal_24903047e41d2a433db4a914b6a026c2bd4e12304592a8b060395f01071eaea5_prof);

        
        $__internal_7f6b9d8a7d30bd019900831f2e25d5ad301d86de330357c7b256fd3fe47e7447->leave($__internal_7f6b9d8a7d30bd019900831f2e25d5ad301d86de330357c7b256fd3fe47e7447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
