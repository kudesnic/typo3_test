<?php

class Standard_action_Default_0cc30dce25fec86310c45bd61a6dbe980e97561f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <main role="main" class="container">
        <div class="row">
            <h3 class="col-12 font-italic border-bottom">
                ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.title', $array1)]);

$output0 .= '
            </h3>
            <div class="col-md-8 blog-main">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['typoscriptObjectPath'] = NULL;
$arguments2['data'] = NULL;
$arguments2['currentValueKey'] = NULL;
$arguments2['table'] = '';
$arguments2['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array4 = array();
$array4['colPos'] = 0;
$arguments2['data'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
            </div>

            <aside class="col-md-4 blog-sidebar">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array7 = array();
$array7['colPos'] = 2;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
            </aside>

        </div>

    </main>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['partial'] = 'Footer';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output10 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'Default';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '

    <main role="main" class="container">
        <div class="row">
            <h3 class="col-12 font-italic border-bottom">
                ';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.title', $array16)]);

$output15 .= '
            </h3>
            <div class="col-md-8 blog-main">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array19['colPos'] = 0;
$arguments17['data'] = $array19;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output15 .= '
            </div>

            <aside class="col-md-4 blog-sidebar">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['typoscriptObjectPath'] = NULL;
$arguments20['data'] = NULL;
$arguments20['currentValueKey'] = NULL;
$arguments20['table'] = '';
$arguments20['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array22 = array();
$array22['colPos'] = 2;
$arguments20['data'] = $array22;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output15 .= '
            </aside>

        </div>

    </main>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['partial'] = 'Footer';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output15 .= '

';
return $output15;
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['name'] = 'Main';

$output10 .= NULL;

return $output10;
}


}
#