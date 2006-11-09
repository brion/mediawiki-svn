<?php

require_once("Attribute.php");

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
	
$expressionStructure = new Structure($languageAttribute, $spellingAttribute);
$expressionAttribute = new Attribute("expression", "Expression", new RecordType($expressionStructure));

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
	$classMembershipStructure, $classMembershipKeyStructure, $classMembershipAttribute;

$classMembershipStructure = new Structure($classMembershipIdAttribute, $classAttribute);
$classMembershipKeyStructure = new Structure($classMembershipIdAttribute);
$classMembershipAttribute = new Attribute("class-membership", "Class membership", new RecordSetType($classMembershipStructure));

global
	$relationIdAttribute, $relationTypeAttribute, $relationTypeType, $otherDefinedMeaningAttribute;

$relationIdAttribute = new Attribute("relation-id", "Relation identifier", "object-id");
$relationTypeType = new RecordType($definedMeaningReferenceStructure);	
$relationTypeAttribute = new Attribute("relation-type", "Relation type", $relationTypeType); 
$otherDefinedMeaningAttribute = new Attribute("other-defined-meaning", "Other defined meaning", $definedMeaningReferenceType);
//$otherDefinedMeaningAttribute = new Attribute("other-defined-meaning", "Other defined meaning", "defined-meaning");

global
	$relationsAttribute, $relationStructure, $relationKeyStructure, $reciprocalRelationsAttribute;
	
$relationStructure = new Structure($relationIdAttribute, $relationTypeAttribute, $otherDefinedMeaningAttribute, $objectAttributesAttribute);
$relationKeyStructure = new Structure($relationIdAttribute);	
$relationsAttribute = new Attribute("relations", "Relations", new RecordSetType($relationStructure));
$reciprocalRelationsAttribute = new Attribute("reciprocal-relations", "Incoming relations", new RecordSetType($relationStructure));

global
	$translatedTextIdAttribute, $translatedTextStructure;
	
$translatedTextIdAttribute = new Attribute("translated-text-id", "Translated text ID", "integer");	
$translatedTextStructure = new Structure($languageAttribute, $textAttribute);	

global
	$definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute;

$definitionIdAttribute = new Attribute("definition-id", "Definition identifier", "integer");
$alternativeDefinitionAttribute = new Attribute("alternative-definition", "Alternative definition", new RecordSetType($translatedTextStructure));
$sourceAttribute = new Attribute("source-id", "Source", $definedMeaningReferenceType);

global
	$alternativeDefinitionsAttribute;
	
$alternativeDefinitionsAttribute = new Attribute("alternative-definitions", "Alternative definitions", new RecordSetType(new Structure($definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute)));

global
	$synonymsAndTranslationsAttribute, $syntransIdAttribute;

$syntransIdAttribute = new Attribute("syntrans-id", "Synonym and translation identifier", "integer");
$synonymsAndTranslationsAttribute = new Attribute("synonyms-translations", "Synonyms and translations", new RecordSetType(new Structure($syntransIdAttribute, $expressionAttribute, $identicalMeaningAttribute, $objectAttributesAttribute)));

global
	$translatedTextValueIdAttribute, $translatedTextAttributeAttribute, $translatedTextValueAttribute, $translatedTextAttributeValuesAttribute, $translatedTextAttributeValuesStructure;
	
$translatedTextAttributeAttribute = new Attribute("translated-text-attribute", "Attribute", $definedMeaningReferenceStructure);
$translatedTextValueIdAttribute = new Attribute("translated-text-value-id", "Translated text value identifier", "translated-text-value-id");
$translatedTextValueAttribute = new Attribute("translated-text-value", "Value", new RecordSetType($translatedTextStructure));

$translatedTextAttributeValuesStructure = new Structure($translatedTextAttributeAttribute, $translatedTextValueIdAttribute, $translatedTextValueAttribute);
$translatedTextAttributeValuesAttribute = new Attribute("translated-text-attribute-values", "Translated text attribute values", new RecordSetType($translatedTextAttributeValuesStructure));

global
	$textAttributeIdAttribute, $textAttributeAttribute, $textAttributeValuesStructure, $textAttributeValuesAttribute;

$textAttributeIdAttribute = new Attribute("text-attribute-id", "Attribute identifier", "object-id");
$textAttributeObjectAttribute = new Attribute("text-attribute-object-id", "Attribute object", "object-id");
$textAttributeAttribute = new Attribute("text-attribute", "Attribute", $definedMeaningReferenceStructure);
$textAttributeValuesStructure = new Structure($textAttributeIdAttribute, $textAttributeObjectAttribute, $textAttributeAttribute, $textAttribute, $objectAttributesAttribute);	
$textAttributeValuesAttribute = new Attribute("text-attribute-values", "Text attribute values", new RecordSetType($textAttributeValuesStructure));

global
	$definitionAttribute, $definedMeaningAttribute, $translatedTextAttribute;

$translatedTextAttribute = new Attribute("translated-text", "Translated text", new RecordSetType($translatedTextStructure));
$definitionAttribute = new Attribute("definition", "Definition", new RecordType(new Structure($translatedTextAttribute, $objectAttributesAttribute)));
$definedMeaningAttribute = new Attribute("defined-meaning", "Defined meaning", new RecordType(new Structure($definitionAttribute, $alternativeDefinitionsAttribute, $synonymsAndTranslationsAttribute, $relationsAttribute, $classMembershipAttribute, $collectionMembershipAttribute, $objectAttributesAttribute)));

global
	$expressionsAttribute, $expressionMeaningStructure, $expressionExactMeaningsAttribute, $expressionApproximateMeaningsAttribute;
	
$expressionMeaningStructure = new Structure($definedMeaningIdAttribute, $textAttribute, $definedMeaningAttribute); 	
$expressionExactMeaningsAttribute = new Attribute("expression-exact-meanings", "Exact meanings", new RecordSetType($expressionMeaningStructure));
$expressionApproximateMeaningsAttribute = new Attribute("expression-approximate-meanings", "Approximate meanings", new RecordSetType($expressionMeaningStructure));

global
	$expressionMeaningsAttribute, $expressionMeaningsStructure;

$expressionMeaningsStructure = new Structure($expressionExactMeaningsAttribute, $expressionApproximateMeaningAttribute);
$expressionMeaningsAttribute = new Attribute("expression-meanings", "Expression meanings", new RecordType($expressionMeaningsStructure));

$expressionsAttribute = new Attribute("expressions", "Expressions", new RecordSetType(new Structure($expressionIdAttribute, $expressionAttribute, $expressionMeaningsAttribute)));

global
	$objectIdAttribute, $objectAttributesStructure, $objectAttributesAttribute;

$objectIdAttribute = new Attribute("object-id", "Object identifier", "object-id");
$objectAttributesStructure = new Structure($objectIdAttribute, $textAttributeValuesAttribute, $translatedTextAttributeValuesAttribute);
$objectAttributesAttribute = new Attribute("object-attributes", "Annotation", new RecordType($objectAttributesStructure));

?>
