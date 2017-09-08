<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_6ba445c102f627628102a66544cb1a89071d05dfe163fc9a429447880f4a851c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba445c102f627628102a66544cb1a89071d05dfe163fc9a429447880f4a851c->enter($__internal_6ba445c102f627628102a66544cb1a89071d05dfe163fc9a429447880f4a851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d9c5b9db4c64235d793a0ac432fea6adcb5b990c75fb1c342a843f790495ab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c5b9db4c64235d793a0ac432fea6adcb5b990c75fb1c342a843f790495ab7c->enter($__internal_d9c5b9db4c64235d793a0ac432fea6adcb5b990c75fb1c342a843f790495ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6ba445c102f627628102a66544cb1a89071d05dfe163fc9a429447880f4a851c->leave($__internal_6ba445c102f627628102a66544cb1a89071d05dfe163fc9a429447880f4a851c_prof);

        
        $__internal_d9c5b9db4c64235d793a0ac432fea6adcb5b990c75fb1c342a843f790495ab7c->leave($__internal_d9c5b9db4c64235d793a0ac432fea6adcb5b990c75fb1c342a843f790495ab7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
