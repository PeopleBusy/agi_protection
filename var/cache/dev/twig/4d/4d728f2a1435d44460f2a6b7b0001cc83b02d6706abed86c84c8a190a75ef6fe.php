<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_1268bcfcfd43b5f6358cede337024154d8046bd3b6e75a36624380c6db5f129d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1268bcfcfd43b5f6358cede337024154d8046bd3b6e75a36624380c6db5f129d->enter($__internal_1268bcfcfd43b5f6358cede337024154d8046bd3b6e75a36624380c6db5f129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ba2c735878ccdb56fbd5faa065dd5b4222bd45ca22ea08274da7567bd87e9118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2c735878ccdb56fbd5faa065dd5b4222bd45ca22ea08274da7567bd87e9118->enter($__internal_ba2c735878ccdb56fbd5faa065dd5b4222bd45ca22ea08274da7567bd87e9118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1268bcfcfd43b5f6358cede337024154d8046bd3b6e75a36624380c6db5f129d->leave($__internal_1268bcfcfd43b5f6358cede337024154d8046bd3b6e75a36624380c6db5f129d_prof);

        
        $__internal_ba2c735878ccdb56fbd5faa065dd5b4222bd45ca22ea08274da7567bd87e9118->leave($__internal_ba2c735878ccdb56fbd5faa065dd5b4222bd45ca22ea08274da7567bd87e9118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
