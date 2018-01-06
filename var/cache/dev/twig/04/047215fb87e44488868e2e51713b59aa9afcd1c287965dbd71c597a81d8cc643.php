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
        $__internal_71caf23ab634635a20769289a172cad8525256856e0b769e1892fff3b18a55d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71caf23ab634635a20769289a172cad8525256856e0b769e1892fff3b18a55d9->enter($__internal_71caf23ab634635a20769289a172cad8525256856e0b769e1892fff3b18a55d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_76c94bdee036fc0782521d11481a3e849474b7483ba339d3a539777f86487a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c94bdee036fc0782521d11481a3e849474b7483ba339d3a539777f86487a64->enter($__internal_76c94bdee036fc0782521d11481a3e849474b7483ba339d3a539777f86487a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_71caf23ab634635a20769289a172cad8525256856e0b769e1892fff3b18a55d9->leave($__internal_71caf23ab634635a20769289a172cad8525256856e0b769e1892fff3b18a55d9_prof);

        
        $__internal_76c94bdee036fc0782521d11481a3e849474b7483ba339d3a539777f86487a64->leave($__internal_76c94bdee036fc0782521d11481a3e849474b7483ba339d3a539777f86487a64_prof);

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
