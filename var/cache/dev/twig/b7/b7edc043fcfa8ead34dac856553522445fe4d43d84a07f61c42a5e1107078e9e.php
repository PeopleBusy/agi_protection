<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_235a1da8d367eb2343146ee1efe177c589e50ed249bcd9584677b6f5e9a48da9 extends Twig_Template
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
        $__internal_8858513d5d571140d4c94fd98eadcd95138bd29df59bc5ef286536baa5b9aa33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8858513d5d571140d4c94fd98eadcd95138bd29df59bc5ef286536baa5b9aa33->enter($__internal_8858513d5d571140d4c94fd98eadcd95138bd29df59bc5ef286536baa5b9aa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_02797de6984ad8cfb427adb4289f9bc2d6aef2ec3285d47c489931d41a56c007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02797de6984ad8cfb427adb4289f9bc2d6aef2ec3285d47c489931d41a56c007->enter($__internal_02797de6984ad8cfb427adb4289f9bc2d6aef2ec3285d47c489931d41a56c007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8858513d5d571140d4c94fd98eadcd95138bd29df59bc5ef286536baa5b9aa33->leave($__internal_8858513d5d571140d4c94fd98eadcd95138bd29df59bc5ef286536baa5b9aa33_prof);

        
        $__internal_02797de6984ad8cfb427adb4289f9bc2d6aef2ec3285d47c489931d41a56c007->leave($__internal_02797de6984ad8cfb427adb4289f9bc2d6aef2ec3285d47c489931d41a56c007_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
