<?php

require_once("Attribute.php");
require_once("WikiDataGlobals.php");
require_once("ViewInformation.php");

/**
 * Replacement OmegaWikiAttributes.
 *
 * This file models the structure of the OmegaWiki database in a
 * database-independent fashion. To do so, it follows a simplified
 * relational model, consisting of Attribute objects which are hierarchically
 * grouped together using Structure objects. See Attribute.php for details.
 *
 * The actual data is stored in Records, grouped together as RecordSets.
 * See Record.php and RecordSet.php for details.
 *
 * TODO:
 * - The current model of a ton of hardcoded globals is highly inadequate
 * and should be replaced with a more abstract schema description. 
 *	- Replacing with a single associative array.
 *
 * - Attribute names are in WikidataGlobals.php, but should really be 
 * localizable through MediaWiki's wfMsg() function.
 *	-This is step 2
 * - Records and RecordSets are currently capable of storing most (not all)
 * data, but can't actually commit them to the database again. To achieve
 * proper separation of architectural layers, the Records should learn
 * to talk directly with the DB layer.
 *	-This is potentially what RecordHelpers are for.
 *
 */
function initializeOmegaWikiAttributes(ViewInformation $viewInformation) {
	global 
		$omegaWikiAttributes;
	$omegaWikiAttributes= new OmegaWikiAttributes($viewInformation);
}

class OmegaWikiAttributes {
	protected $attributes = null;
	function __construct(ViewInformation $viewInformation) {
		$this->hardValues();
	}

	/** Hardcoded schema for now. Later refactor to load from file or DB 
	 * 
	 * Naming: keys are previous name minus -"Attribute"
	 * 	(-"Structure" is retained)
	*/
	private function hardValues() {
		
		$a=$this->attributes; # <- wrist/RSI protection 

		# TODO these will be replaced with i18n 
		global
			$wgLanguageAttributeName, $wgSpellingAttributeName, $wgTextAttributeName;
		
		$a["language"] = new Attribute("language", $wgLanguageAttributeName, "language");
		$a["spelling"] = new Attribute("spelling", $wgSpellingAttributeName, "spelling");
		$a["text"] = new Attribute("text", $wgTextAttributeName, "text");
		
		#TODO replace with i18n
		global
			$wgDefinedMeaningAttributesAttributeName, 
			$wgDefinedMeaningAttributesAttributeName, 
			$wgAnnotationAttributeName;
			
		$a["definedMeaningAttributes"] = new Attribute("defined-meaning-attributes", $wgDefinedMeaningAttributesAttributeName, "will-be-specified-below");
		$a["objectAttributes"] = new Attribute("object-attributes", $wgAnnotationAttributeName, "will-be-specified-below");

		# TODO replace with i18n
		global
			$expressionIdAttribute, $identicalMeaningAttribute;
			
		$a["expressionId"] = new Attribute("expression-id", "Expression Id", "expression-id");
		$a["identicalMeaning"] = new Attribute("indentical-meaning", $wgIdenticalMeaningAttributeName, "boolean");
		
		#TODO replace with i18n
		global
			 $wgExpressionAttributeName;
		
		if ($viewInformation->filterOnLanguage()) 
			$a["expression"] = new Attribute("expression", $wgSpellingAttributeName, "spelling");
		else {
			$a["expressionStructure"] = new Structure("expression", $languageAttribute, $spellingAttribute);
			$a["expression"] = new Attribute(null, $wgExpressionAttributeName, $expressionStructure);
		}
		
		global
			$definedMeaningIdAttribute, $definedMeaningDefiningExpressionAttribute,
			$definedMeaningCompleteDefiningExpressionStructure,
			$definedMeaningCompleteDefiningExpressionAttribute;
		
		$a["definedMeaningId"] = new Attribute("defined-meaning-id", "Defined meaning identifier", "defined-meaning-id");
		$a["definedMeaningDefiningExpression"] = new Attribute("defined-meaning-defining-expression", "Defined meaning defining expression", "short-text");

		$a["definedMeaningCompleteDefiningExpressionStructure"] = 
		new Structure("defined-meaning-full-defining-expression",
			  $definedMeaningDefiningExpressionAttribute,
			  $expressionIdAttribute,
			  $languageAttribute
		);
		$a["definedMeaningCompleteDefiningExpression"]=new Attribute(null, "Defining expression", $definedMeaningCompleteDefiningExpressionStructure);

		#==============================================
		# Done refactoring up to here (to maintain sanity, will do a little every day
		# if you want to do a good deed, shift this line down please)
		# ===============================================
		
		global
			$definedMeaningReferenceStructure, $definedMeaningLabelAttribute, $definedMeaningReferenceType,
			$definedMeaningReferenceAttribute, $wgDefinedMeaningReferenceAttributeName;
			
		$definedMeaningLabelAttribute = new Attribute("defined-meaning-label", "Defined meaning label", "short-text");
		$definedMeaningReferenceStructure = new Structure("defined-meaning", $definedMeaningIdAttribute, $definedMeaningLabelAttribute, $definedMeaningDefiningExpressionAttribute);

		$definedMeaningReferenceType = $definedMeaningReferenceStructure;
		$definedMeaningReferenceAttribute = new Attribute(null, $wgDefinedMeaningReferenceAttributeName, $definedMeaningReferenceType);
		
		global
			$collectionIdAttribute, $collectionMeaningAttribute, $sourceIdentifierAttribute,
			$gotoSourceStructure, $gotoSourceAttribute,
			$wgCollectionAttributeName, $wgSourceIdentifierAttributeName, $wgGotoSourceAttributeName;
		
		$collectionIdAttribute = new Attribute("collection", "Collection", "collection-id");
		$collectionMeaningAttribute = new Attribute("collection-meaning", $wgCollectionAttributeName, $definedMeaningReferenceStructure);
		$sourceIdentifierAttribute = new Attribute("source-identifier", $wgSourceIdentifierAttributeName, "short-text");
		$gotoSourceStructure = new Structure("goto-source",$collectionIdAttribute, $sourceIdentifierAttribute);
		$gotoSourceAttribute = new Attribute(null, $wgGotoSourceAttributeName, $gotoSourceStructure); 
		
		global
			$collectionMembershipAttribute, $wgCollectionMembershipAttributeName, $wgCollectionMembershipAttributeId,
			$collectionMembershipStructure;
		
		$collectionMembershipStructure = new Structure("collection-membership",$collectionIdAttribute, $collectionMeaningAttribute, $sourceIdentifierAttribute);
		$collectionMembershipAttribute = new Attribute(null, $wgCollectionMembershipAttributeName, $collectionMembershipStructure);
		
		global
			 $classMembershipIdAttribute, $classAttribute;
			 
		$classMembershipIdAttribute = new Attribute("class-membership-id", "Class membership id", "integer");	 
		$classAttribute = new Attribute("class", "Class", $definedMeaningReferenceStructure);
			
		global
			$classMembershipStructure, $classMembershipKeyStructure, $classMembershipAttribute, 
			$wgClassMembershipAttributeName, $wgClassMembershipAttributeId;
		
		$classMembershipStructure = new Structure("class-membership", $classMembershipIdAttribute, $classAttribute);
		$classMembershipAttribute = new Attribute(null, $wgClassMembershipAttributeName, $classMembershipStructure);
		
		global
			 $possiblySynonymousIdAttribute, 
			 $possibleSynonymAttribute, 
			 $wgPossibleSynonymAttributeName, $possiblySynonymousStructure, $possiblySynonymousAttribute, 
			 $wgPossiblySynonymousAttributeName, $wgPossiblySynonymousAttributeId;
			 
		$possiblySynonymousIdAttribute = new Attribute("possibly-synonymous-id", "Possibly synonymous id", "integer");	 
		$possibleSynonymAttribute = new Attribute("possible-synonym", $wgPossibleSynonymAttributeName, $definedMeaningReferenceStructure);
		$possiblySynonymousStructure = new Structure("possibly-synonymous", $possiblySynonymousIdAttribute, $possiblySynonymousAttribute);
		$possiblySynonymousAttribute = new Attribute(null, $wgPossiblySynonymousAttributeName, $possiblySynonymousStructure);

		global
			$relationIdAttribute, $relationTypeAttribute, $relationTypeType, $otherDefinedMeaningAttribute,
			$wgRelationTypeAttributeName, $wgOtherDefinedMeaningAttributeName;
		
		$relationIdAttribute = new Attribute("relation-id", "Relation identifier", "object-id");
		$relationTypeAttribute = new Attribute("relation-type", $wgRelationTypeAttributeName, $definedMeaningReferenceStructure); 
		$otherDefinedMeaningAttribute = new Attribute("other-defined-meaning", $wgOtherDefinedMeaningAttributeName, $definedMeaningReferenceType);
		
		global
			$relationsAttribute, $relationStructure, $reciprocalRelationsAttribute, $objectAttributesAttribute, $wgRelationsAttributeName, $wgIncomingRelationsAttributeName, $wgRelationsAttributeId, $wgIncomingRelationsAttributeId,
			$repRelStructure;
			
		$relationStructure = new Structure("relations", $relationIdAttribute, $relationTypeAttribute, $otherDefinedMeaningAttribute, $objectAttributesAttribute);
		$relationsAttribute = new Attribute(null, $wgRelationsAttributeName, $relationStructure);
		$reciprocalRelationsAttribute = new Attribute("reciprocal-relations", $wgIncomingRelationsAttributeName, $relationStructure);
		
		global
			$translatedTextIdAttribute, $translatedTextStructure;
			
		$translatedTextIdAttribute = new Attribute("translated-text-id", "Translated text ID", "integer");	
		$translatedTextStructure = new Structure("translated-text", $languageAttribute, $textAttribute);	
		
		global
			$definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute,
			$wgAlternativeDefinitionAttributeName, $wgSourceAttributeName;
		
		$definitionIdAttribute = new Attribute("definition-id", "Definition identifier", "integer");

		if ($viewInformation->filterOnLanguage() && !$viewInformation->hasMetaDataAttributes())
			$alternativeDefinitionAttribute = new Attribute("alternative-definition", $wgAlternativeDefinitionAttributeName, "text");
		else
			$alternativeDefinitionAttribute = new Attribute("alternative-definition", $wgAlternativeDefinitionAttributeName, $translatedTextStructure);
		
		$sourceAttribute = new Attribute("source-id", $wgSourceAttributeName, $definedMeaningReferenceType);
		
		global
			$alternativeDefinitionsAttribute, $wgAlternativeDefinitionsAttributeName, $wgAlternativeDefinitionsAttributeId,
			$alternativeDefinitionsStructure;
			
		$alternativeDefinitionsStructure =  new Structure("alternative-definitions", $definitionIdAttribute, $alternativeDefinitionAttribute, $sourceAttribute);
			
		$alternativeDefinitionsAttribute = new Attribute(null, $wgAlternativeDefinitionsAttributeName, $alternativeDefinitionsStructure);
		
		global
			$synonymsAndTranslationsAttribute, $syntransIdAttribute, 
			$wgSynonymsAttributeName, $wgSynonymsAndTranslationsAttributeName, $wgSynonymsAndTranslationsAttributeId,
			$synonymsTranslationsStructure;
		
		if ($viewInformation->filterOnLanguage())
			$synonymsAndTranslationsCaption = $wgSynonymsAttributeName;
		else
			$synonymsAndTranslationsCaption = $wgSynonymsAndTranslationsAttributeName;

		$syntransIdAttribute = new Attribute("syntrans-id", "$synonymsAndTranslationsCaption identifier", "integer");
		$synonymsTranslationsStructure = new Structure("synonyms-translations", $syntransIdAttribute, $expressionAttribute, $identicalMeaningAttribute, $objectAttributesAttribute);
		$synonymsAndTranslationsAttribute = new Attribute(null, "$synonymsAndTranslationsCaption", $synonymsTranslationsStructure);
		
		global
			$translatedTextAttributeIdAttribute, $translatedTextValueIdAttribute, 
			$translatedTextAttributeObjectAttribute, $translatedTextAttributeAttribute, $translatedTextValueAttribute, $translatedTextAttributeValuesAttribute, 
			$translatedTextAttributeValuesStructure, $wgTranslatedTextAttributeValuesAttributeName, $wgTranslatedTextAttributeAttributeName, $wgTranslatedTextAttributeValueAttributeName;
		
		$translatedTextAttributeIdAttribute = new Attribute("translated-text-attribute-id", "Attribute identifier", "object-id");
		$translatedTextAttributeObjectAttribute = new Attribute("translated-text-attribute-object-id", "Attribute object", "object-id");
		$translatedTextAttributeAttribute = new Attribute("translated-text-attribute", $wgTranslatedTextAttributeAttributeName, $definedMeaningReferenceType);
		$translatedTextValueIdAttribute = new Attribute("translated-text-value-id", "Translated text value identifier", "translated-text-value-id");
		
		if ($viewInformation->filterOnLanguage() && !$viewInformation->hasMetaDataAttributes())
			$translatedTextValueAttribute = new Attribute("translated-text-value", $wgTranslatedTextAttributeValueAttributeName, "text");
		else
			$translatedTextValueAttribute = new Attribute("translated-text", $wgTranslatedTextAttributeValueAttributeName, $translatedTextStructure);
		
		$translatedTextAttributeValuesStructure = new Structure("translated-text-attribute-values",$translatedTextAttributeIdAttribute, $translatedTextAttributeObjectAttribute, $translatedTextAttributeAttribute, $translatedTextValueIdAttribute, $translatedTextValueAttribute, $objectAttributesAttribute);
		$translatedTextAttributeValuesAttribute = new Attribute(null, $wgTranslatedTextAttributeValuesAttributeName, $translatedTextAttributeValuesStructure);
		
		global
			$textAttributeIdAttribute, $textAttributeObjectAttribute, $textAttributeAttribute, $textAttributeValuesStructure, 
			$textAttributeValuesAttribute, 
			$wgTextAttributeValuesAttributeName, $wgTextAttributeAttributeName;
		
		$textAttributeIdAttribute = new Attribute("text-attribute-id", "Attribute identifier", "object-id");
		$textAttributeObjectAttribute = new Attribute("text-attribute-object-id", "Attribute object", "object-id");
		$textAttributeAttribute = new Attribute("text-attribute", $wgTextAttributeAttributeName, $definedMeaningReferenceStructure);
		$textAttributeValuesStructure = new Structure("text-attribute-values", $textAttributeIdAttribute, $textAttributeObjectAttribute, $textAttributeAttribute, $textAttribute, $objectAttributesAttribute);	
		$textAttributeValuesAttribute = new Attribute(null, $wgTextAttributeValuesAttributeName, $textAttributeValuesStructure);

		global
			$urlAttribute, $urlAttributeIdAttribute, $urlAttributeObjectAttribute, $urlAttributeAttribute, $urlAttributeValuesStructure, $urlAttributeValuesAttribute,
			$wgUrlAttributeValuesAttributeName, $wgUrlAttributeAttributeName;
			
		$urlAttribute = new Attribute("url", "URL", "url");
		$urlAttributeIdAttribute = new Attribute("url-attribute-id", "Attribute identifier", "object-id");
		$urlAttributeObjectAttribute = new Attribute("url-attribute-object-id", "Attribute object", "object-id");
		$urlAttributeAttribute = new Attribute("url-attribute", $wgUrlAttributeAttributeName, $definedMeaningReferenceStructure);
		$urlAttributeValuesStructure = new Structure("url-attribute-values", $urlAttributeIdAttribute, $urlAttributeObjectAttribute, $urlAttributeAttribute, $urlAttribute, $objectAttributesAttribute);	
		$urlAttributeValuesAttribute = new Attribute(null, $wgUrlAttributeValuesAttributeName, $urlAttributeValuesStructure);
		
		global
			$optionAttributeIdAttribute, $optionAttributeAttribute, $optionAttributeObjectAttribute, $optionAttributeOptionAttribute, $optionAttributeValuesAttribute,
			$wgOptionAttributeAttributeName, $wgOptionAttributeOptionAttributeName, $wgOptionAttributeValuesAttributeName, $optionAttributeValuesStructure;
		
		$optionAttributeIdAttribute = new Attribute('option-attribute-id', 'Attribute identifier', 'object-id');
		$optionAttributeObjectAttribute = new Attribute('option-attribute-object-id', 'Attribute object', 'object-id');
		$optionAttributeAttribute = new Attribute('option-attribute', $wgOptionAttributeAttributeName, $definedMeaningReferenceType);
		$optionAttributeOptionAttribute = new Attribute('option-attribute-option', $wgOptionAttributeOptionAttributeName, $definedMeaningReferenceType);
		$optionAttributeValuesStructure = new Structure('option-attribute-values', $optionAttributeIdAttribute, $optionAttributeAttribute, $optionAttributeObjectAttribute, $optionAttributeOptionAttribute, $objectAttributesAttribute);
		$optionAttributeValuesAttribute = new Attribute(null, $wgOptionAttributeValuesAttributeName, $optionAttributeValuesStructure);
		
		global
			$optionAttributeOptionIdAttribute, $optionAttributeOptionsAttribute, $wgOptionAttributeOptionsAttributeName;
			
		$optionAttributeOptionIdAttribute = new Attribute('option-attribute-option-id', 'Option identifier', 'object-id');
		$optionAttributeOptionsStructure = new Structure('option-attribute-options', $optionAttributeOptionIdAttribute, $optionAttributeAttribute, $optionAttributeOptionAttribute, $languageAttribute);
		$optionAttributeOptionsAttribute = new Attribute(null, $wgOptionAttributeOptionsAttributeName, $optionAttributeOptionsStructure);
		
		global
			$definitionAttribute, $translatedTextAttribute, $classAttributesAttribute,
			$wgDefinitionAttributeName, $wgTranslatedTextAttributeName;
		
		if ($viewInformation->filterOnLanguage() && !$viewInformation->hasMetaDataAttributes())
			$translatedTextAttribute = new Attribute("translated-text", $wgTextAttributeName, "text");	
		else
			$translatedTextAttribute = new Attribute(null, $wgTranslatedTextAttributeName, $translatedTextStructure);
			
		$definitionAttribute = new Attribute(null, $wgDefinitionAttributeName, new Structure("definition", $translatedTextAttribute, $objectAttributesAttribute));

		global
			$classAttributesStructure,
		//	$classAttributeClassAttribute, 
			$classAttributeIdAttribute, $classAttributeAttributeAttribute, $classAttributeLevelAttribute, $classAttributeTypeAttribute,
			$wgClassAttributeAttributeAttributeName, $wgClassAttributeLevelAttributeName, 
			$wgClassAttributeTypeAttributeName, $wgClassAttributesAttributeName, $wgClassAttributesAttributeId;
		
		$classAttributeIdAttribute = new Attribute("class-attribute-id", "Class attribute identifier", "object-id");
		$classAttributeAttributeAttribute = new Attribute("class-attribute-attribute", $wgClassAttributeAttributeAttributeName, $definedMeaningReferenceStructure);
		$classAttributeLevelAttribute = new Attribute("class-attribute-level", $wgClassAttributeLevelAttributeName, $definedMeaningReferenceStructure);
		$classAttributeTypeAttribute = new Attribute("class-attribute-type", $wgClassAttributeTypeAttributeName, "short-text");
		$classAttributesStructure = new Structure("class-attributes", $classAttributeIdAttribute, $classAttributeAttributeAttribute, $classAttributeLevelAttribute, $classAttributeTypeAttribute, $optionAttributeOptionsAttribute);
		$classAttributesAttribute = new Attribute(null, $wgClassAttributesAttributeName, $classAttributesStructure);
		
		global
			$definedMeaningAttribute, $wgDefinedMeaningAttributeName;

		$definedMeaningAttribute = new Attribute(null, $wgDefinedMeaningAttributeName, 
			new Structure(
				"defined-meaning",
				$definitionAttribute, 
				$classAttributesAttribute, 
				$alternativeDefinitionsAttribute, 
				$synonymsAndTranslationsAttribute, 
				$relationsAttribute, 
				$reciprocalRelationsAttribute, 
				$classMembershipAttribute, 
				$collectionMembershipAttribute, 
				$definedMeaningAttributesAttribute)
		);

		global
			$expressionsAttribute, $expressionMeaningStructure, $expressionExactMeaningsAttribute, $expressionApproximateMeaningsAttribute,
			$wgExactMeaningsAttributeName, $wgApproximateMeaningsAttributeName;
			
		$expressionMeaningStructure = new Structure("expression-exact-meanings", $definedMeaningIdAttribute, $textAttribute, $definedMeaningAttribute); 	
		$expressionExactMeaningsAttribute = new Attribute(null, $wgExactMeaningsAttributeName, $expressionMeaningStructure);
		$expressionApproximateMeaningsAttribute = new Attribute("expression-approximate-meanings", $wgApproximateMeaningsAttributeName, $expressionMeaningStructure);
		
		global
			$expressionMeaningsAttribute, $expressionMeaningsStructure, $expressionApproximateMeaningAttribute,
			$wgExpressionMeaningsAttributeName, $wgExpressionsAttributeName,
			$expressionsStructure;
		
		$expressionMeaningsStructure = new Structure("expression-meanings", $expressionExactMeaningsAttribute, $expressionApproximateMeaningAttribute);
		$expressionMeaningsAttribute = new Attribute(null, $wgExpressionMeaningsAttributeName, $expressionMeaningsStructure);
		
		$expressionsStructure = new Structure("expressions", $expressionIdAttribute, $expressionAttribute, $expressionMeaningsAttribute);
		$expressionsAttribute = new Attribute(null, $wgExpressionsAttributeName, $expressionsStructure);
		
		global
			$objectIdAttribute, $objectAttributesStructure, $wgAnnotationAttributeName;
		
		$objectIdAttribute = new Attribute("object-id", "Object identifier", "object-id");
		$objectAttributesStructure = new Structure("object-attributes", $objectIdAttribute, $textAttributeValuesAttribute, $translatedTextAttributeValuesAttribute, $optionAttributeValuesAttribute);
		$objectAttributesAttribute->setAttributeType($objectAttributesStructure);
		$definedMeaningAttributesAttribute->setAttributeType($objectAttributesStructure);

		global $wdDefinedMeaningAttributesOrder;

		/** 
		 * This global determines the order of the different
		 * attributes in the user interface.
		 */
		$wdDefinedMeaningAttributesOrder=array(
			$definitionAttribute->id,
			$classAttributesAttribute->id,
			$alternativeDefinitionsAttribute->id,
			$synonymsAndTranslationsAttribute->id,
			$possiblySynonymousAttribute->id,
			$relationsAttribute->id,
			$reciprocalRelationsAttribute->id,
			$classMembershipAttribute->id,
			$collectionMembershipAttribute->id,
			$definedMeaningAttributesAttribute->id
		);
	}

	function getAttribute($key) {
		$attributes=$this->attributes;
		return $attributes[$key];
	}	
}


