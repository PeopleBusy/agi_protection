<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d49a4a1835d7817d5e36a9f705892bf6aa88bd7622628e92e500e4b52f0e643b extends Twig_Template
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
        $__internal_8c71a60dd3349527b4daabeb5ee648e0efde69d55c6f0439bae0189a544d13d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c71a60dd3349527b4daabeb5ee648e0efde69d55c6f0439bae0189a544d13d5->enter($__internal_8c71a60dd3349527b4daabeb5ee648e0efde69d55c6f0439bae0189a544d13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_47e14748c62c1f76bea7d7f4266014853e571dafa02226a4beb9c4ab67935c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e14748c62c1f76bea7d7f4266014853e571dafa02226a4beb9c4ab67935c0c->enter($__internal_47e14748c62c1f76bea7d7f4266014853e571dafa02226a4beb9c4ab67935c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8c71a60dd3349527b4daabeb5ee648e0efde69d55c6f0439bae0189a544d13d5->leave($__internal_8c71a60dd3349527b4daabeb5ee648e0efde69d55c6f0439bae0189a544d13d5_prof);

        
        $__internal_47e14748c62c1f76bea7d7f4266014853e571dafa02226a4beb9c4ab67935c0c->leave($__internal_47e14748c62c1f76bea7d7f4266014853e571dafa02226a4beb9c4ab67935c0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
