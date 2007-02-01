<?php

require_once("Attribute.php");
require_once("WikiDataGlobals.php");

function initializeWiktionaryZAttributes($filterOnLanguage, $hasMetaDataAttributes) {
	global
		$languageAttribute, $spellingAttribute, $textAttribute;
	
	$languageAttribute = new Attribute("language", "Language", "language");
	$spellingAttribute = new Attribute("spelling", "Spelling", "spelling");
	$textAttribute = new Attribute("text", "Text", "text");
	
	global
		$expressionIdAttribute, $identicalMeaningAttribute;
		
	$expressionIdAttribute = new Attribute("expression-id", "Expression Id", "expression-id");
	$identicalMeaningAttribute = new Attribute("indentical-meaning", "Identical meaning?", "boolean");
	
	global
		$expressionStructure, $expressionAttribute;
	
	if ($filterOnLanguage) 
		$expressionAttribute = new Attribute("expression", "Spelling", "spelling");
	else {
		$expressionStructure = new Structure($languageAttribute, $spellingAttribute);
		$expressionAttribute = new Attribute("expression", "Expression", new RecordType($expressionStructure));
	}
	
	global
		$definedMeaningIdAttribute, $definedMeaningDefiningExpressionAttribute;
	
	$definedMeaningIdAttribute = new Attribute("defined-meaning-id", "Defined meaning identifier", "defined-meaning-id");
	$definedMeaningDefiningExpressionAttribute = new Attribute("defined-meaning-defining-expression", "Defined meaning defining expression", "short-text");
	
	global
		$definedMeaningReferenceStructure, $definedMeaningLabelAttribute, $definedMeaningReferenceKeyStructure, $definedMeaningReferenceType,
		$definedMeaningReferenceAttribute;
		
	$definedMeaningLabelAttribute = new Attribute("defined-meaning-label", "Defined meaning label", "short-text");
	$definedMeaningReferenceStructure = new Structure($definedMeaningIdAttribute, $definedMeaningLabelAttribute, $definedMeaningDefiningExpressionAttribute);
	$definedMeaningReferenceKeyStructure = new Structure($definedMeaningIdAttribute);
	$definedMeaningReferenceType = new RecordType($definedMeaningReferenceStructure);
	$definedMeaningReferenceAttribute = new Attribute("defined-meaning", "Defined meaning", $definedMeaningReferenceType);
	
	global
		$collectionIdAttribute, $collectionMeaningType, $collectionMeaningAttribute, $sourceIdentifierAttribute;
	
	$collectionIdAttribute = new Attribute("collection", "Collection", "collection-id");
	$collectionMeaningType = new RecordType($definedMeaningReferenceStructure);
	$collectionMeaningAttribute = new Attribute("collection-meaning", "Collection", $collectionMeaningType);
	$sourceIdentifierAttribute = new Attribute("source-identifier", "Source identifier", "short-text"); 
	
	global
		$collectionMembershipAttribute;
	
	$collectionMembershipAttribute = new Attribute("collection-membership", "Collection membership", new RecordSetType(new Structure($collectionIdAttribute, $collectionMeaningAttribute, $sourceIdentifierAttribute)));
	
	global
		 $classMembershipIdAttribute, $classAttribute;
		 
	$classMembershipIdAttribute = new Attribute("class-membership-id", "Class membership id", "integer");	 
	$classAttribute = new Attribute("class", "Class", new RecordType($definedMeaningReferenceStructure));
		
	global
		$classMembershipStructure, $classMembershipKeyStructure, $classMembershipAttribute, $wgClassMembershipAttributeName;
	
	$classMembershipStructure = new Structure($classMembershipIdAttribute, $classAttribute);
	$classMembershipKeyStructure = new Structure($classMembershipIdAttribute);
	$classMembershipAttribute = new Attribute("class-membership", $wgClassMembershipAttributeName, new RecordSetType($classMembershipStructure));
	
	global
		 $possiblySynonymousIdAttribute, $possibleSynonymAttribute;
		 
	$possiblySynonymousIdAttribute = new Attribute("possibly-synonymous-id", "Possibly synonymous id", "integer");	 
	$possibleSynonymAttribute = new Attribute("possible-synonym", "Possible synonym", new RecordType($definedMeaningReferenceStructure));
		
	global
		$possiblySynonymousStructure, $possiblySynonymousKeyStructure, $possiblySynonymousAttribute,
		$wgPossiblySynonymousAttributeName;
	
	$possiblySynonymousStructure = new Structure($possiblySynonymousIdAttribute, $possiblySynonymousAttribute);
	$possiblySynonymousKeyStructure = new Structure($possiblySynonymousIdAttribute);
	$possiblySynonymousAttribute = new Attribute("possibly-synonymous", $wgPossiblySynonymousAttributeName, new RecordSetType($possiblySynonymousStructure));

	global
		$relationIdAttribute, $relationTypeAttribute, $relationTypeType, $otherDefinedMeaningAttribute,
		$wgRelationTypeAttributeName, $wgOtherDefinedMeaningAttributeName;
	
	$relationIdAttribute = new Attribute("relation-id", "Relation identifier", "object-id");
	$relationTypeType = new RecordType($definedMeaningReferenceStructure);	
	$relationTypeAttribute = new Attribute("relation-type", $wgRelationTypeAttributeName, $relationTypeType); 
	$otherDefinedMeaningAttribute = new Attribute("other-defined-meaning", $wgOtherDefinedMeaningAttributeName, $definedMeaningReferenceType);
	
	global
		$relationsAttribute, $relationStructure, $relationKeyStructure, $reciprocalRelationsAttribute, $objectAttributesAttribute,
		$wgRelationsAttributeName, $wgIncomingRelationsAttributeName;
		
	$relationStructure = new Structure($relationIdAttribute, $relationTypeAttribute, $otherDefinedMeaningAttribute, $objectAttributesAttribute);
	$relationKeyStructure = new Structure($relationIdAttribute);	
	$relationsAttribute = new Attribute("relations", $wgRelationsAttributeName, new RecordSetType($relationStructure));
	$reciprocalRelationsAttribute = new Attribute("reciprocal-relations", $wgIncomingRelationsAttributeName, new RecordSetType($relationStructure));
	
	global
		$translatedTextIdAttribute, $translatedTextStructure;
		
	$translatedTextIdAttribute = new Attribute("translated-text-id", "Translated text ID", "integer");	
	$translatedTextStructure = new Structure($languageAttribute, $textAttribute);	
	
	global
		$definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute,
		$wgAlternativeDefinitionAttributeName, $wgSourceAttributeName;
	
	$definitionIdAttribute = new Attribute("definition-id", "Definition identifier", "integer");

	if ($filterOnLanguage && !$hasMetaDataAttributes)
		$alternativeDefinitionAttribute = new Attribute("alternative-definition", $wgAlternativeDefinitionAttributeName, "text");
	else
		$alternativeDefinitionAttribute = new Attribute("alternative-definition", $wgAlternativeDefinitionAttributeName, new RecordSetType($translatedTextStructure));
	
	$sourceAttribute = new Attribute("source-id", $wgSourceAttributeName, $definedMeaningReferenceType);
	
	global
		$alternativeDefinitionsAttribute, $wgAlternativeDefinitionsAttributeName;
		
	$alternativeDefinitionsAttribute = new Attribute("alternative-definitions", $wgAlternativeDefinitionsAttributeName, new RecordSetType(new Structure($definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute)));
	
	global
		$synonymsAndTranslationsAttribute, $syntransIdAttribute;
	
	if ($filterOnLanguage)
		$synonymsAndTranslationsCaption = "Synonyms";
	else
		$synonymsAndTranslationsCaption = "Synonyms and translations";	
	
	$syntransIdAttribute = new Attribute("syntrans-id", "$synonymsAndTranslationsCaption identifier", "integer");
	$synonymsAndTranslationsAttribute = new Attribute("synonyms-translations", "$synonymsAndTranslationsCaption", new RecordSetType(new Structure($syntransIdAttribute, $expressionAttribute, $identicalMeaningAttribute, $objectAttributesAttribute)));
	
	global
		$translatedTextAttributeIdAttribute, $translatedTextValueIdAttribute, $translatedTextAttributeAttribute, $translatedTextValueAttribute, $translatedTextAttributeValuesAttribute, 
		$translatedTextAttributeValuesStructure, $wgTranslatedTextAttributeValuesAttributeName, $wgTranslatedTextAttributeAttributeName, $wgTranslatedTextAttributeValueAttributeName;
	
	$translatedTextAttributeIdAttribute = new Attribute("translated-text-attribute-id", "Attribute identifier", "object-id");
	$translatedTextAttributeAttribute = new Attribute("translated-text-attribute", $wgTranslatedTextAttributeAttributeName, $definedMeaningReferenceType);
	$translatedTextValueIdAttribute = new Attribute("translated-text-value-id", "Translated text value identifier", "translated-text-value-id");
	
	if ($filterOnLanguage && !$hasMetaDataAttributes)
		$translatedTextValueAttribute = new Attribute("translated-text-value", $wgTranslatedTextAttributeValueAttributeName, "text");
	else
		$translatedTextValueAttribute = new Attribute("translated-text-value", $wgTranslatedTextAttributeValueAttributeName, new RecordSetType($translatedTextStructure));
	
	$translatedTextAttributeValuesStructure = new Structure($translatedTextAttributeIdAttribute, $translatedTextAttributeAttribute, $translatedTextValueIdAttribute, $translatedTextValueAttribute, $objectAttributesAttribute);
	$translatedTextAttributeValuesAttribute = new Attribute("translated-text-attribute-values", $wgTranslatedTextAttributeValuesAttributeName, new RecordSetType($translatedTextAttributeValuesStructure));
	
	global
		$textAttributeIdAttribute, $textAttributeAttribute, $textAttributeValuesStructure, $textAttributeValuesAttribute, 
		$wgTextAttributeValuesAttributeName, $wgTextAttributeAttributeName;
	
	$textAttributeIdAttribute = new Attribute("text-attribute-id", "Attribute identifier", "object-id");
	$textAttributeObjectAttribute = new Attribute("text-attribute-object-id", "Attribute object", "object-id");
	$textAttributeAttribute = new Attribute("text-attribute", $wgTextAttributeAttributeName, new RecordSetType($definedMeaningReferenceStructure));
	$textAttributeValuesStructure = new Structure($textAttributeIdAttribute, $textAttributeObjectAttribute, $textAttributeAttribute, $textAttribute, $objectAttributesAttribute);	
	$textAttributeValuesAttribute = new Attribute("text-attribute-values", $wgTextAttributeValuesAttributeName, new RecordSetType($textAttributeValuesStructure));

	global
		$urlAttribute, $urlAttributeIdAttribute, $urlAttributeObjectAttribute, $urlAttributeAttribute, $urlAttributeValuesStructure, $urlAttributeValuesAttribute,
		$wgUrlAttributeValuesAttributeName, $wgUrlAttributeAttributeName;
		
	$urlAttribute = new Attribute("url", "URL", "url");
	$urlAttributeIdAttribute = new Attribute("url-attribute-id", "Attribute identifier", "object-id");
	$urlAttributeObjectAttribute = new Attribute("url-attribute-object-id", "Attribute object", "object-id");
	$urlAttributeAttribute = new Attribute("url-attribute", $wgUrlAttributeAttributeName, new RecordSetType($definedMeaningReferenceStructure));
	$urlAttributeValuesStructure = new Structure($urlAttributeIdAttribute, $urlAttributeObjectAttribute, $urlAttributeAttribute, $urlAttribute, $objectAttributesAttribute);	
	$urlAttributeValuesAttribute = new Attribute("url-attribute-values", $wgUrlAttributeValuesAttributeName, new RecordSetType($urlAttributeValuesStructure));
	
	global
		$optionAttributeIdAttribute, $optionAttributeAttribute, $optionAttributeObjectAttribute, $optionAttributeOptionAttribute, $optionAttributeValuesAttribute,
		$wgOptionAttributeAttributeName, $wgOptionAttributeOptionAttributeName, $wgOptionAttributeValuesAttributeName;
	
	$optionAttributeIdAttribute = new Attribute('option-attribute-id', 'Attribute identifier', 'object-id');
	$optionAttributeObjectAttribute = new Attribute('option-attribute-object-id', 'Attribute object', 'object-id');
	$optionAttributeAttribute = new Attribute('option-attribute', $wgOptionAttributeAttributeName, $definedMeaningReferenceType);
	$optionAttributeOptionAttribute = new Attribute('option-attribute-option', $wgOptionAttributeOptionAttributeName, $definedMeaningReferenceType);
	$optionAttributeValuesStructure = new Structure($optionAttributeIdAttribute, $optionAttributeAttribute, $optionAttributeObjectAttribute, $optionAttributeOptionAttribute, $objectAttributesAttribute);
	$optionAttributeValuesAttribute = new Attribute('option-attribute-values', $wgOptionAttributeValuesAttributeName, new RecordSetType($optionAttributeValuesStructure));
	
	global
		$optionAttributeOptionIdAttribute, $optionAttributeOptionsAttribute;
		
	$optionAttributeOptionIdAttribute = new Attribute('option-attribute-option-id', 'Option identifier', 'object-id');
	$optionAttributeOptionsStructure = new Structure($optionAttributeOptionIdAttribute, $optionAttributeAttribute, $optionAttributeOptionAttribute, $languageAttribute);
	$optionAttributeOptionsAttribute = new Attribute('option-attribute-options', 'Options', new RecordSetType($optionAttributeOptionsStructure));
	
	global
		$definitionAttribute, $definedMeaningAttribute, $translatedTextAttribute, $classAttributesAttribute,
		$wgDefinitionAttributeName;
	
	if ($filterOnLanguage && !$hasMetaDataAttributes)
		$translatedTextAttribute = new Attribute("translated-text", "Text", "text");	
	else
		$translatedTextAttribute = new Attribute("translated-text", "Translated text", new RecordSetType($translatedTextStructure));
		
	$definitionAttribute = new Attribute("definition", $wgDefinitionAttributeName, new RecordType(new Structure($translatedTextAttribute, $objectAttributesAttribute)));
	$definedMeaningAttribute = new Attribute("defined-meaning", "Defined meaning", new RecordType(new Structure($definitionAttribute, $classAttributesAttribute, $alternativeDefinitionsAttribute, $synonymsAndTranslationsAttribute, $relationsAttribute, $classMembershipAttribute, $collectionMembershipAttribute, $objectAttributesAttribute)));
	
	global
		$expressionsAttribute, $expressionMeaningStructure, $expressionExactMeaningsAttribute, $expressionApproximateMeaningsAttribute,
		$wgExactMeaningsAttributeName, $wgApproximateMeaningsAttributeName;
		
	$expressionMeaningStructure = new Structure($definedMeaningIdAttribute, $textAttribute, $definedMeaningAttribute); 	
	$expressionExactMeaningsAttribute = new Attribute("expression-exact-meanings", $wgExactMeaningsAttributeName, new RecordSetType($expressionMeaningStructure));
	$expressionApproximateMeaningsAttribute = new Attribute("expression-approximate-meanings", $wgApproximateMeaningsAttributeName, new RecordSetType($expressionMeaningStructure));
	
	global
		$expressionMeaningsAttribute, $expressionMeaningsStructure, $expressionApproximateMeaningAttribute;
	
	$expressionMeaningsStructure = new Structure($expressionExactMeaningsAttribute, $expressionApproximateMeaningAttribute);
	$expressionMeaningsAttribute = new Attribute("expression-meanings", "Expression meanings", new RecordType($expressionMeaningsStructure));
	
	$expressionsAttribute = new Attribute("expressions", "Expressions", new RecordSetType(new Structure($expressionIdAttribute, $expressionAttribute, $expressionMeaningsAttribute)));
	
	global
		$objectIdAttribute, $objectAttributesStructure, $wgAnnotationAttributeName;
	
	$objectIdAttribute = new Attribute("object-id", "Object identifier", "object-id");
	$objectAttributesStructure = new Structure($objectIdAttribute, $textAttributeValuesAttribute, $translatedTextAttributeValuesAttribute, $optionAttributeValuesAttribute);
	$objectAttributesAttribute = new Attribute("object-attributes", $wgAnnotationAttributeName, new RecordType($objectAttributesStructure));
	
	global
		$classAttributesStructure,
	//	$classAttributeClassAttribute, 
		$classAttributeIdAttribute, $classAttributeAttributeAttribute, $classAttributeLevelAttribute, $classAttributeTypeAttribute;
	
	$classAttributeIdAttribute = new Attribute("class-attribute-id", "Class attribute identifier", "object-id");
	//$classAttributeClassAttribute = new Attribute("class-attribute-class", "Class", "defined-meaning-id");
	$classAttributeAttributeAttribute = new Attribute("class-attribute-attribute", "Attribute", new RecordType($definedMeaningReferenceStructure));
	$classAttributeLevelAttribute = new Attribute("class-attribute-level", "Level", new RecordType($definedMeaningReferenceStructure));
	$classAttributeTypeAttribute = new Attribute("class-attribute-type", "Type", "short-text");
	$classAttributesStructure = new Structure($classAttributeIdAttribute, $classAttributeAttributeAttribute, $classAttributeLevelAttribute, $classAttributeTypeAttribute, $optionAttributeOptionsAttribute);
	$classAttributesAttribute = new Attribute("class-attributes", "Class attributes", new RecordSetType($classAttributesStructure));
}

?>
