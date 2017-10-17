<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_87dbc825f45b4611b020774d7c1a6d2d0a1bca135598dfb75216775de5628b20 extends Twig_Template
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
        $__internal_49b67fd294d9eacdd81ce7af094753894f527c5dc474e21f0e55788869ae914f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b67fd294d9eacdd81ce7af094753894f527c5dc474e21f0e55788869ae914f->enter($__internal_49b67fd294d9eacdd81ce7af094753894f527c5dc474e21f0e55788869ae914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_055e023188118ca0fe70cf3ff2fe09580f25d21651405d2e02a0dc8fd8e18509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055e023188118ca0fe70cf3ff2fe09580f25d21651405d2e02a0dc8fd8e18509->enter($__internal_055e023188118ca0fe70cf3ff2fe09580f25d21651405d2e02a0dc8fd8e18509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_49b67fd294d9eacdd81ce7af094753894f527c5dc474e21f0e55788869ae914f->leave($__internal_49b67fd294d9eacdd81ce7af094753894f527c5dc474e21f0e55788869ae914f_prof);

        
        $__internal_055e023188118ca0fe70cf3ff2fe09580f25d21651405d2e02a0dc8fd8e18509->leave($__internal_055e023188118ca0fe70cf3ff2fe09580f25d21651405d2e02a0dc8fd8e18509_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
