<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_72f02a130cf758dd7d5ebc5c9d4cfb32d5467f8b01ddcf4fcee6d260255c985d extends Twig_Template
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
        $__internal_0d45fe86899328551c14de11a586124f14f35fd0ecc1ba561167b4357237285f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d45fe86899328551c14de11a586124f14f35fd0ecc1ba561167b4357237285f->enter($__internal_0d45fe86899328551c14de11a586124f14f35fd0ecc1ba561167b4357237285f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_05cb463f453d094c5dc3d5ca8f92cb03e3ccd2eb69b1ddcf87f0a94e7d919a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cb463f453d094c5dc3d5ca8f92cb03e3ccd2eb69b1ddcf87f0a94e7d919a06->enter($__internal_05cb463f453d094c5dc3d5ca8f92cb03e3ccd2eb69b1ddcf87f0a94e7d919a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0d45fe86899328551c14de11a586124f14f35fd0ecc1ba561167b4357237285f->leave($__internal_0d45fe86899328551c14de11a586124f14f35fd0ecc1ba561167b4357237285f_prof);

        
        $__internal_05cb463f453d094c5dc3d5ca8f92cb03e3ccd2eb69b1ddcf87f0a94e7d919a06->leave($__internal_05cb463f453d094c5dc3d5ca8f92cb03e3ccd2eb69b1ddcf87f0a94e7d919a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
