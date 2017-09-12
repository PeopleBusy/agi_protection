<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_0d19c6cba40d73feca8de33e3a11a050a756d90e6b887019ccb7da3efdad556b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d19c6cba40d73feca8de33e3a11a050a756d90e6b887019ccb7da3efdad556b->enter($__internal_0d19c6cba40d73feca8de33e3a11a050a756d90e6b887019ccb7da3efdad556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3e3bd56d0f18f4f543ec470fe720e563b8ed363e95adb22fca044215c74238fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3bd56d0f18f4f543ec470fe720e563b8ed363e95adb22fca044215c74238fa->enter($__internal_3e3bd56d0f18f4f543ec470fe720e563b8ed363e95adb22fca044215c74238fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0d19c6cba40d73feca8de33e3a11a050a756d90e6b887019ccb7da3efdad556b->leave($__internal_0d19c6cba40d73feca8de33e3a11a050a756d90e6b887019ccb7da3efdad556b_prof);

        
        $__internal_3e3bd56d0f18f4f543ec470fe720e563b8ed363e95adb22fca044215c74238fa->leave($__internal_3e3bd56d0f18f4f543ec470fe720e563b8ed363e95adb22fca044215c74238fa_prof);

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
