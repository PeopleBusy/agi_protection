<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_38a4258dac045b281f70cd55ac3b4c7b631d7ce26e79cd425a48a8643b86eba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a4258dac045b281f70cd55ac3b4c7b631d7ce26e79cd425a48a8643b86eba2->enter($__internal_38a4258dac045b281f70cd55ac3b4c7b631d7ce26e79cd425a48a8643b86eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9371c66d12b8eb3f4b0c1d24f8b89680f1c4160a15e3c450aee807cc5abd3a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9371c66d12b8eb3f4b0c1d24f8b89680f1c4160a15e3c450aee807cc5abd3a14->enter($__internal_9371c66d12b8eb3f4b0c1d24f8b89680f1c4160a15e3c450aee807cc5abd3a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_38a4258dac045b281f70cd55ac3b4c7b631d7ce26e79cd425a48a8643b86eba2->leave($__internal_38a4258dac045b281f70cd55ac3b4c7b631d7ce26e79cd425a48a8643b86eba2_prof);

        
        $__internal_9371c66d12b8eb3f4b0c1d24f8b89680f1c4160a15e3c450aee807cc5abd3a14->leave($__internal_9371c66d12b8eb3f4b0c1d24f8b89680f1c4160a15e3c450aee807cc5abd3a14_prof);

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
