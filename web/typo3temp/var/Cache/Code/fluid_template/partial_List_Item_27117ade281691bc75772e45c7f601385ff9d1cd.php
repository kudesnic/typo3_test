<?php

class partial_List_Item_27117ade281691bc75772e45c7f601385ff9d1cd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<!--
	=====================
		Partials/List/Item.html
-->

<div class="blog-post posttype-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array1)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['newsItem'] = NULL;
$array9 = array (
);$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array9);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '

	<h2 class="blog-post-title">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
			<span itemprop="headline">';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array16)]);

$output15 .= '</span>
		';
return $output15;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['newsItem'] = NULL;
$arguments10['settings'] = array (
);
$arguments10['uriOnly'] = false;
$arguments10['configuration'] = array (
);
$arguments10['content'] = '';
$arguments10['section'] = NULL;
$array12 = array (
);$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array12);
$array13 = array (
);$arguments10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array13);
$array14 = array (
);$arguments10['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array14);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
	</h2>
	<p class="blog-post-meta">
		<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['date'] = NULL;
$arguments17['format'] = '';
$arguments17['base'] = NULL;
$array19 = array (
);$arguments17['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array19);
$arguments17['format'] = 'F d, Y';
$renderChildrenClosure18 = ($arguments17['date'] !== null) ? function() use ($arguments17) { return $arguments17['date']; } : $renderChildrenClosure18;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '">
			<!--';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array24);
};
$arguments20 = array();
$arguments20['date'] = NULL;
$arguments20['format'] = '';
$arguments20['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['key'] = 'dateFormat';
$arguments20['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$renderChildrenClosure21 = ($arguments20['date'] !== null) ? function() use ($arguments20) { return $arguments20['date']; } : $renderChildrenClosure21;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output0 .= '-->
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array27);
};
$arguments25 = array();
$arguments25['date'] = NULL;
$arguments25['format'] = '';
$arguments25['base'] = NULL;
$arguments25['format'] = 'F d, Y';
$renderChildrenClosure26 = ($arguments25['date'] !== null) ? function() use ($arguments25) { return $arguments25['date']; } : $renderChildrenClosure26;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output0 .= '
		</time>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
			<span class="news-list-author">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['key'] = 'author';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array37);
$arguments34['arguments'] = $array36;

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '
			</span>
		';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
	</p>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['alt'] = NULL;
$arguments136['ismap'] = NULL;
$arguments136['longdesc'] = NULL;
$arguments136['usemap'] = NULL;
$arguments136['src'] = NULL;
$arguments136['treatIdAsReference'] = NULL;
$arguments136['image'] = NULL;
$arguments136['crop'] = NULL;
$arguments136['cropVariant'] = 'default';
$arguments136['width'] = NULL;
$arguments136['height'] = NULL;
$arguments136['minWidth'] = NULL;
$arguments136['minHeight'] = NULL;
$arguments136['maxWidth'] = NULL;
$arguments136['maxHeight'] = NULL;
$arguments136['absolute'] = false;
$array138 = array (
);$arguments136['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array138);
$array139 = array (
);$arguments136['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array139);
$array140 = array (
);$arguments136['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array140);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$array146 = array (
);$arguments141['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array146);
$array147 = array (
);$arguments141['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array147);
$arguments136['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$array153 = array (
);$arguments148['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array153);
$array154 = array (
);$arguments148['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array154);
$arguments136['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
						';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array133);
$array132['1'] = ' == 2';

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['renderable'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array164);
$arguments161['arguments'] = $array163;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
						';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array158);
$array157['1'] = ' == 4';

$expression159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output129 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['alt'] = NULL;
$arguments171['ismap'] = NULL;
$arguments171['longdesc'] = NULL;
$arguments171['usemap'] = NULL;
$arguments171['src'] = NULL;
$arguments171['treatIdAsReference'] = NULL;
$arguments171['image'] = NULL;
$arguments171['crop'] = NULL;
$arguments171['cropVariant'] = 'default';
$arguments171['width'] = NULL;
$arguments171['height'] = NULL;
$arguments171['minWidth'] = NULL;
$arguments171['minHeight'] = NULL;
$arguments171['maxWidth'] = NULL;
$arguments171['maxHeight'] = NULL;
$arguments171['absolute'] = false;
$array173 = array (
);$arguments171['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array173);
$array174 = array (
);$arguments171['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array174);
$array175 = array (
);$arguments171['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array175);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$array181 = array (
);$arguments176['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array181);
$array182 = array (
);$arguments176['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array182);
$arguments171['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$array188 = array (
);$arguments183['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array188);
$array189 = array (
);$arguments183['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array189);
$arguments171['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
						';
return $output170;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array168);
$array167['1'] = ' == 5';

$expression169 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = $renderChildrenClosure166;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output129 .= '
					';
return $output129;
};
$arguments125 = array();
$arguments125['map'] = NULL;
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array128);
$arguments125['map'] = $array127;

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
				';
return $output124;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['newsItem'] = NULL;
$arguments119['settings'] = array (
);
$arguments119['uriOnly'] = false;
$arguments119['configuration'] = array (
);
$arguments119['content'] = '';
$arguments119['section'] = NULL;
$array121 = array (
);$arguments119['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array121);
$array122 = array (
);$arguments119['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array122);
$array123 = array (
);$arguments119['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array123);

$output118 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
			</div>
		';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '

	';
return $output115;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['alt'] = NULL;
$arguments58['ismap'] = NULL;
$arguments58['longdesc'] = NULL;
$arguments58['usemap'] = NULL;
$arguments58['src'] = NULL;
$arguments58['treatIdAsReference'] = NULL;
$arguments58['image'] = NULL;
$arguments58['crop'] = NULL;
$arguments58['cropVariant'] = 'default';
$arguments58['width'] = NULL;
$arguments58['height'] = NULL;
$arguments58['minWidth'] = NULL;
$arguments58['minHeight'] = NULL;
$arguments58['maxWidth'] = NULL;
$arguments58['maxHeight'] = NULL;
$arguments58['absolute'] = false;
$array60 = array (
);$arguments58['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array60);
$array61 = array (
);$arguments58['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array61);
$array62 = array (
);$arguments58['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array62);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$array68 = array (
);$arguments63['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array68);
$array69 = array (
);$arguments63['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array69);
$arguments58['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$array75 = array (
);$arguments70['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array75);
$array76 = array (
);$arguments70['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array76);
$arguments58['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
						';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array55);
$array54['1'] = ' == 2';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array86);
$arguments83['arguments'] = $array85;

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
						';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array80);
$array79['1'] = ' == 4';

$expression81 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output51 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['alt'] = NULL;
$arguments93['ismap'] = NULL;
$arguments93['longdesc'] = NULL;
$arguments93['usemap'] = NULL;
$arguments93['src'] = NULL;
$arguments93['treatIdAsReference'] = NULL;
$arguments93['image'] = NULL;
$arguments93['crop'] = NULL;
$arguments93['cropVariant'] = 'default';
$arguments93['width'] = NULL;
$arguments93['height'] = NULL;
$arguments93['minWidth'] = NULL;
$arguments93['minHeight'] = NULL;
$arguments93['maxWidth'] = NULL;
$arguments93['maxHeight'] = NULL;
$arguments93['absolute'] = false;
$array95 = array (
);$arguments93['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array95);
$array96 = array (
);$arguments93['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array96);
$array97 = array (
);$arguments93['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array97);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$array103 = array (
);$arguments98['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array103);
$array104 = array (
);$arguments98['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array104);
$arguments93['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array108);

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$array110 = array (
);$arguments105['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array110);
$array111 = array (
);$arguments105['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array111);
$arguments93['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
						';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array90);
$array89['1'] = ' == 5';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output51 .= '
					';
return $output51;
};
$arguments47 = array();
$arguments47['map'] = NULL;
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array50);
$arguments47['map'] = $array49;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
				';
return $output46;
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['newsItem'] = NULL;
$arguments41['settings'] = array (
);
$arguments41['uriOnly'] = false;
$arguments41['configuration'] = array (
);
$arguments41['content'] = '';
$arguments41['section'] = NULL;
$array43 = array (
);$arguments41['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array43);
$array44 = array (
);$arguments41['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array44);
$array45 = array (
);$arguments41['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array45);

$output40 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
			</div>
		';
return $output40;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '


	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$array227 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array227);
};
$arguments222 = array();
$arguments222['maxCharacters'] = NULL;
$arguments222['append'] = '...';
$arguments222['respectWordBoundaries'] = true;
$arguments222['respectHtml'] = true;
$array224 = array (
);$arguments222['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array224);
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array225['0'] = 1;

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);
};
$arguments220 = array();
$arguments220['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '</div>
				';
return $output219;
};
$arguments217 = array();

$output216 .= '';

$output216 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$array238 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array238);
};
$arguments233 = array();
$arguments233['maxCharacters'] = NULL;
$arguments233['append'] = '...';
$arguments233['respectWordBoundaries'] = true;
$arguments233['respectHtml'] = true;
$array235 = array (
);$arguments233['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array235);
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array236['0'] = 1;

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments233['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);
};
$arguments231 = array();
$arguments231['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '</div>
				';
return $output230;
};
$arguments228 = array();
$arguments228['if'] = NULL;

$output216 .= '';

$output216 .= '
			';
return $output216;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$array203 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array203);
};
$arguments198 = array();
$arguments198['maxCharacters'] = NULL;
$arguments198['append'] = '...';
$arguments198['respectWordBoundaries'] = true;
$arguments198['respectHtml'] = true;
$array200 = array (
);$arguments198['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array200);
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array201['0'] = 1;

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
};
$arguments196 = array();
$arguments196['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '</div>
				';
return $output195;
};
$arguments193['__elseClosures'][] = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array212 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array212);
};
$arguments207 = array();
$arguments207['maxCharacters'] = NULL;
$arguments207['append'] = '...';
$arguments207['respectWordBoundaries'] = true;
$arguments207['respectHtml'] = true;
$array209 = array (
);$arguments207['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array209);
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array210['0'] = 1;

$expression211 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments207['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);
};
$arguments205 = array();
$arguments205['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '</div>
				';
return $output204;
};

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
		';
return $output192;
};
$arguments190 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['key'] = 'more-link';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '
		';
return $output244;
};
$arguments239 = array();
$arguments239['additionalAttributes'] = NULL;
$arguments239['data'] = NULL;
$arguments239['class'] = NULL;
$arguments239['dir'] = NULL;
$arguments239['id'] = NULL;
$arguments239['lang'] = NULL;
$arguments239['style'] = NULL;
$arguments239['title'] = NULL;
$arguments239['accesskey'] = NULL;
$arguments239['tabindex'] = NULL;
$arguments239['onclick'] = NULL;
$arguments239['newsItem'] = NULL;
$arguments239['settings'] = array (
);
$arguments239['uriOnly'] = false;
$arguments239['configuration'] = array (
);
$arguments239['content'] = '';
$arguments239['section'] = NULL;
$array241 = array (
);$arguments239['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array241);
$array242 = array (
);$arguments239['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array242);
$arguments239['class'] = 'more';
$array243 = array (
);$arguments239['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array243);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output0 .= '
	</div>
	<div class="post-footer border-top">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
			<!-- Tags -->
			<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
						<span class="badge badge-secondary btn mr-2">';
$array257 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array257)]);

$output256 .= '</span>
					';
return $output256;
};
$arguments253 = array();
$arguments253['each'] = NULL;
$arguments253['as'] = NULL;
$arguments253['key'] = NULL;
$arguments253['reverse'] = false;
$arguments253['iteration'] = NULL;
$array255 = array (
);$arguments253['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array255);
$arguments253['as'] = 'tag';

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
				</span>
		';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output0 .= '
	</div>

</div>


';

return $output0;
}


}
#