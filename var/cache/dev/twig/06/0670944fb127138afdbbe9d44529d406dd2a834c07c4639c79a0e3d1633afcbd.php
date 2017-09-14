<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e584a88de83b969545862ae6c63eabf67f3115ef6d4fa87631bd349fbc47b031 extends Twig_Template
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
        $__internal_f280c44ccc491df6bc3662ae3cb55816a3d5b8a4734adae709fce6e5d20be986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f280c44ccc491df6bc3662ae3cb55816a3d5b8a4734adae709fce6e5d20be986->enter($__internal_f280c44ccc491df6bc3662ae3cb55816a3d5b8a4734adae709fce6e5d20be986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5a10b16d136ed1770d13281e1e317f023182eab1ef4060e58af864d3420b3e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a10b16d136ed1770d13281e1e317f023182eab1ef4060e58af864d3420b3e48->enter($__internal_5a10b16d136ed1770d13281e1e317f023182eab1ef4060e58af864d3420b3e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f280c44ccc491df6bc3662ae3cb55816a3d5b8a4734adae709fce6e5d20be986->leave($__internal_f280c44ccc491df6bc3662ae3cb55816a3d5b8a4734adae709fce6e5d20be986_prof);

        
        $__internal_5a10b16d136ed1770d13281e1e317f023182eab1ef4060e58af864d3420b3e48->leave($__internal_5a10b16d136ed1770d13281e1e317f023182eab1ef4060e58af864d3420b3e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
