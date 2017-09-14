<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d9c18a36e598e5222961ac5edafa3437d9730b86bd1543d17c5975b0c4c2fa91 extends Twig_Template
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
        $__internal_2040c1a3088ddcf325ac849c5d8db73e6946254e52a2ff03cb7d8c87203ef999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2040c1a3088ddcf325ac849c5d8db73e6946254e52a2ff03cb7d8c87203ef999->enter($__internal_2040c1a3088ddcf325ac849c5d8db73e6946254e52a2ff03cb7d8c87203ef999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_890b874058baa32b2ed00b9043203e53968eb9d17cdee8a9322c03b188f4d717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890b874058baa32b2ed00b9043203e53968eb9d17cdee8a9322c03b188f4d717->enter($__internal_890b874058baa32b2ed00b9043203e53968eb9d17cdee8a9322c03b188f4d717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2040c1a3088ddcf325ac849c5d8db73e6946254e52a2ff03cb7d8c87203ef999->leave($__internal_2040c1a3088ddcf325ac849c5d8db73e6946254e52a2ff03cb7d8c87203ef999_prof);

        
        $__internal_890b874058baa32b2ed00b9043203e53968eb9d17cdee8a9322c03b188f4d717->leave($__internal_890b874058baa32b2ed00b9043203e53968eb9d17cdee8a9322c03b188f4d717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
