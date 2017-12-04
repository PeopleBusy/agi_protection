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
        $__internal_e3e68dcec046f3ad1cec52b43eab2dd95186c726743778ca8e5190595c6e4acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e68dcec046f3ad1cec52b43eab2dd95186c726743778ca8e5190595c6e4acb->enter($__internal_e3e68dcec046f3ad1cec52b43eab2dd95186c726743778ca8e5190595c6e4acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b034ad5b24280a62e4ea373a3cea847bcf4a7d4f51e077b8661bbd8cc77e4d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b034ad5b24280a62e4ea373a3cea847bcf4a7d4f51e077b8661bbd8cc77e4d46->enter($__internal_b034ad5b24280a62e4ea373a3cea847bcf4a7d4f51e077b8661bbd8cc77e4d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e3e68dcec046f3ad1cec52b43eab2dd95186c726743778ca8e5190595c6e4acb->leave($__internal_e3e68dcec046f3ad1cec52b43eab2dd95186c726743778ca8e5190595c6e4acb_prof);

        
        $__internal_b034ad5b24280a62e4ea373a3cea847bcf4a7d4f51e077b8661bbd8cc77e4d46->leave($__internal_b034ad5b24280a62e4ea373a3cea847bcf4a7d4f51e077b8661bbd8cc77e4d46_prof);

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
