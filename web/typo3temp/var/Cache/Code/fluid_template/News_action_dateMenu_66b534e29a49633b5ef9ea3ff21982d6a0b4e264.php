<?php

class News_action_dateMenu_66b534e29a49633b5ef9ea3ff21982d6a0b4e264 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'General';
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="news-menu-view">
		<ol class="list-unstyled mb-0">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return '
						<li class="item itemactive">
					';
};
$arguments20 = array();

$output19 .= '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return '
						<li class="item">
					';
};
$arguments22 = array();
$arguments22['if'] = NULL;

$output19 .= '';

$output19 .= '
				';
return $output19;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('year', $array13);
$array14 = array (
);$array12['1'] = $renderingContext->getVariableProvider()->getByPath('month', $array14);
$array11['0'] = $array12;
$array11['1'] = ' == ';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.year', $array16);
$array17 = array (
);$array15['1'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.month', $array17);
$array11['2'] = $array15;

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<li class="item itemactive">
					';
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<li class="item">
					';
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output31 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$output34 = '';

$output34 .= 'month.';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('month', $array35);
$arguments32['key'] = $output34;

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output31 .= ' ';
$array36 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array36)]);
return $output31;
};
$arguments24 = array();
$arguments24['action'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['pageType'] = 0;
$arguments24['noCache'] = false;
$arguments24['noCacheHash'] = false;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['linkAccessRestrictedPages'] = false;
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$array26 = array (
);$arguments24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array26);
// Rendering Array
$array27 = array();
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['year'] = $renderingContext->getVariableProvider()->getByPath('year', $array29);
$array30 = array (
);$array28['month'] = $renderingContext->getVariableProvider()->getByPath('month', $array30);
$array27['overwriteDemand'] = $array28;
$arguments24['arguments'] = $array27;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output8 .= '
					(';
$array37 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array37)]);

$output8 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('count', $array43);
$array42['1'] = ' == 1';

$expression44 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['then'] = 'entry';
$arguments40['else'] = 'entries';
$arguments38['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output8 .= ')
				</li>
			';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array7);
$arguments5['key'] = 'month';
$arguments5['as'] = 'count';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
			';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array3);
$arguments1['key'] = 'year';
$arguments1['as'] = 'months';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</ol>
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output45 = '';

$output45 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'General';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output45 .= '
<!--
	=====================
		Templates/News/DateMenu.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
	<div class="news-menu-view">
		<ol class="list-unstyled mb-0">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return '
						<li class="item itemactive">
					';
};
$arguments70 = array();

$output69 .= '';

$output69 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return '
						<li class="item">
					';
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output69 .= '';

$output69 .= '
				';
return $output69;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('year', $array63);
$array64 = array (
);$array62['1'] = $renderingContext->getVariableProvider()->getByPath('month', $array64);
$array61['0'] = $array62;
$array61['1'] = ' == ';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.year', $array66);
$array67 = array (
);$array65['1'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.month', $array67);
$array61['2'] = $array65;

$expression68 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = function() use ($renderingContext, $self) {
return '
						<li class="item itemactive">
					';
};
$arguments59['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
						<li class="item">
					';
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output81 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$output84 = '';

$output84 .= 'month.';
$array85 = array (
);
$output84 .= $renderingContext->getVariableProvider()->getByPath('month', $array85);
$arguments82['key'] = $output84;

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= ' ';
$array86 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array86)]);
return $output81;
};
$arguments74 = array();
$arguments74['action'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['controller'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['pluginName'] = NULL;
$arguments74['pageUid'] = NULL;
$arguments74['pageType'] = 0;
$arguments74['noCache'] = false;
$arguments74['noCacheHash'] = false;
$arguments74['section'] = '';
$arguments74['format'] = '';
$arguments74['linkAccessRestrictedPages'] = false;
$arguments74['additionalParams'] = array (
);
$arguments74['absolute'] = false;
$arguments74['addQueryString'] = false;
$arguments74['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments74['addQueryStringMethod'] = NULL;
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['name'] = NULL;
$arguments74['rel'] = NULL;
$arguments74['rev'] = NULL;
$arguments74['target'] = NULL;
$array76 = array (
);$arguments74['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array76);
// Rendering Array
$array77 = array();
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['year'] = $renderingContext->getVariableProvider()->getByPath('year', $array79);
$array80 = array (
);$array78['month'] = $renderingContext->getVariableProvider()->getByPath('month', $array80);
$array77['overwriteDemand'] = $array78;
$arguments74['arguments'] = $array77;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output58 .= '
					(';
$array87 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array87)]);

$output58 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('count', $array93);
$array92['1'] = ' == 1';

$expression94 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['then'] = 'entry';
$arguments90['else'] = 'entries';
$arguments88['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output58 .= ')
				</li>
			';
return $output58;
};
$arguments55 = array();
$arguments55['each'] = NULL;
$arguments55['as'] = NULL;
$arguments55['key'] = NULL;
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$array57 = array (
);$arguments55['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array57);
$arguments55['key'] = 'month';
$arguments55['as'] = 'count';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
			';
return $output54;
};
$arguments51 = array();
$arguments51['each'] = NULL;
$arguments51['as'] = NULL;
$arguments51['key'] = NULL;
$arguments51['reverse'] = false;
$arguments51['iteration'] = NULL;
$array53 = array (
);$arguments51['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array53);
$arguments51['key'] = 'year';
$arguments51['as'] = 'months';

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
		</ol>
	</div>
';
return $output50;
};
$arguments48 = array();
$arguments48['name'] = NULL;
$arguments48['name'] = 'content';

$output45 .= NULL;

$output45 .= '
';

return $output45;
}


}
#