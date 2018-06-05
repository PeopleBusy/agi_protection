<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cc453bc84f302ab3300c6f131d205a4ad577a5435f6467c480e03167ddf0919d extends Twig_Template
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
        $__internal_99787a1ccfcaad19843f74ae21fc1f34a9905d7651c46cd4865acb1639186066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99787a1ccfcaad19843f74ae21fc1f34a9905d7651c46cd4865acb1639186066->enter($__internal_99787a1ccfcaad19843f74ae21fc1f34a9905d7651c46cd4865acb1639186066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d1cee76d9b35d9b6e953ccab3f8a8846ff95fc5670e4e26f4e884b19a313dc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cee76d9b35d9b6e953ccab3f8a8846ff95fc5670e4e26f4e884b19a313dc02->enter($__internal_d1cee76d9b35d9b6e953ccab3f8a8846ff95fc5670e4e26f4e884b19a313dc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_99787a1ccfcaad19843f74ae21fc1f34a9905d7651c46cd4865acb1639186066->leave($__internal_99787a1ccfcaad19843f74ae21fc1f34a9905d7651c46cd4865acb1639186066_prof);

        
        $__internal_d1cee76d9b35d9b6e953ccab3f8a8846ff95fc5670e4e26f4e884b19a313dc02->leave($__internal_d1cee76d9b35d9b6e953ccab3f8a8846ff95fc5670e4e26f4e884b19a313dc02_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
