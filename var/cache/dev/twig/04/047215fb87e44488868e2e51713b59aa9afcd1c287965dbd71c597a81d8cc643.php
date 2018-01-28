<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9bf17283dcc975e50a0ca0d294580320f9c84d57645504741a97333e4b91f77a extends Twig_Template
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
        $__internal_158fbf2864417203da713398d53a0ede9dd6f443727c10725c46719512dd37cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158fbf2864417203da713398d53a0ede9dd6f443727c10725c46719512dd37cd->enter($__internal_158fbf2864417203da713398d53a0ede9dd6f443727c10725c46719512dd37cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8b7492b162ebdc93d5c327b783f93859584b98366223a3b2a2706a4f72a2d52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7492b162ebdc93d5c327b783f93859584b98366223a3b2a2706a4f72a2d52a->enter($__internal_8b7492b162ebdc93d5c327b783f93859584b98366223a3b2a2706a4f72a2d52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_158fbf2864417203da713398d53a0ede9dd6f443727c10725c46719512dd37cd->leave($__internal_158fbf2864417203da713398d53a0ede9dd6f443727c10725c46719512dd37cd_prof);

        
        $__internal_8b7492b162ebdc93d5c327b783f93859584b98366223a3b2a2706a4f72a2d52a->leave($__internal_8b7492b162ebdc93d5c327b783f93859584b98366223a3b2a2706a4f72a2d52a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
