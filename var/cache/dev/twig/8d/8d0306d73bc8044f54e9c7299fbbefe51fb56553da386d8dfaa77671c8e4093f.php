<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_639c11da8caa48a3ab3d18b24bda14c79a42beb47a38bce70af13b1f0e319278 extends Twig_Template
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
        $__internal_ce876f4a3704ba9430baefd1f7d5f7e68b4acbe13056a5d0324f45d9d472562e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce876f4a3704ba9430baefd1f7d5f7e68b4acbe13056a5d0324f45d9d472562e->enter($__internal_ce876f4a3704ba9430baefd1f7d5f7e68b4acbe13056a5d0324f45d9d472562e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c84bcdcdd1d53f276a4daff619ffe6be1c9b013b0f07fb6be09e74e432b18f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84bcdcdd1d53f276a4daff619ffe6be1c9b013b0f07fb6be09e74e432b18f91->enter($__internal_c84bcdcdd1d53f276a4daff619ffe6be1c9b013b0f07fb6be09e74e432b18f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ce876f4a3704ba9430baefd1f7d5f7e68b4acbe13056a5d0324f45d9d472562e->leave($__internal_ce876f4a3704ba9430baefd1f7d5f7e68b4acbe13056a5d0324f45d9d472562e_prof);

        
        $__internal_c84bcdcdd1d53f276a4daff619ffe6be1c9b013b0f07fb6be09e74e432b18f91->leave($__internal_c84bcdcdd1d53f276a4daff619ffe6be1c9b013b0f07fb6be09e74e432b18f91_prof);

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
", "@Framework/Form/container_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
