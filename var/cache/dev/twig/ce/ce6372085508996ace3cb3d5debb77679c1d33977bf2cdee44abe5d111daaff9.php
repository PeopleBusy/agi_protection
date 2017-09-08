<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_8508555a4d36739949fa3dbd1f50c17081882802a5f1e41f618305bad2c6b67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8508555a4d36739949fa3dbd1f50c17081882802a5f1e41f618305bad2c6b67e->enter($__internal_8508555a4d36739949fa3dbd1f50c17081882802a5f1e41f618305bad2c6b67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9baf3480c3df08c904d0d06761fcdd4c4aa99a2f4263950e351e2b7d89ab7c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9baf3480c3df08c904d0d06761fcdd4c4aa99a2f4263950e351e2b7d89ab7c58->enter($__internal_9baf3480c3df08c904d0d06761fcdd4c4aa99a2f4263950e351e2b7d89ab7c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8508555a4d36739949fa3dbd1f50c17081882802a5f1e41f618305bad2c6b67e->leave($__internal_8508555a4d36739949fa3dbd1f50c17081882802a5f1e41f618305bad2c6b67e_prof);

        
        $__internal_9baf3480c3df08c904d0d06761fcdd4c4aa99a2f4263950e351e2b7d89ab7c58->leave($__internal_9baf3480c3df08c904d0d06761fcdd4c4aa99a2f4263950e351e2b7d89ab7c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
