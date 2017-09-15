<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_81431630b39aefc41140629a93c240095e0ea1be4d0275d6a68cd0d56781c973 extends Twig_Template
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
        $__internal_4adebf12e99f0193ba013efcb660ed30f65c60e52c783f7cda8eece3901a62db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adebf12e99f0193ba013efcb660ed30f65c60e52c783f7cda8eece3901a62db->enter($__internal_4adebf12e99f0193ba013efcb660ed30f65c60e52c783f7cda8eece3901a62db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f46eb4873c3357bf6e0128406469418d16adb5de6165e27df33e17604c952bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46eb4873c3357bf6e0128406469418d16adb5de6165e27df33e17604c952bb6->enter($__internal_f46eb4873c3357bf6e0128406469418d16adb5de6165e27df33e17604c952bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4adebf12e99f0193ba013efcb660ed30f65c60e52c783f7cda8eece3901a62db->leave($__internal_4adebf12e99f0193ba013efcb660ed30f65c60e52c783f7cda8eece3901a62db_prof);

        
        $__internal_f46eb4873c3357bf6e0128406469418d16adb5de6165e27df33e17604c952bb6->leave($__internal_f46eb4873c3357bf6e0128406469418d16adb5de6165e27df33e17604c952bb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
