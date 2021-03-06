﻿/*
*
*   Copyright (c) Microsoft. All rights reserved.
*
*	This code is licensed under the Apache License, Version 2.0.
*   THIS CODE IS PROVIDED *AS IS* WITHOUT WARRANTY OF
*   ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING ANY
*   IMPLIED WARRANTIES OF FITNESS FOR A PARTICULAR
*   PURPOSE, MERCHANTABILITY, OR NON-INFRINGEMENT.
*
*   The apache license details from 
*   ‘http://www.apache.org/licenses/’ are reproduced 
*   in ‘Apache2_license.txt’ 
*
*/

/* 
* Available Class:
* 1) msLanguageServicesInterface - Includes all the properties and methods to make external calls to Microsoft Translator API.
*/

//make sure the namespace exists.
if (typeof (wikiBhasha.extern) === "undefined") {
    wikiBhasha.extern = {};
}

(function() {
    //includes all the properties and methods to make external call to translator API.
    wikiBhasha.extern.msLanguageServicesInterface = {
        //API for translation - Microsoft translator API        
        translationAPI: "http://www.microsofttranslator.com/ajax/v2/toolkit.ashx?siteData=Z6N2xQ1EGnakgC6d5-2bqyn8HanvRK5-lNxPYEMrEBgU1cuhJ1v6tOtshhuFOTekTtt6OcyEnzF14qob_7h35iX3x1h6x49fgbZ4gYuQvVzXufdqTVDIb_E2VYtdha3I",
        // Id of button in translation toolbar clicking on which will exit the toolbar.
        exitButtonElementId: "MSTTExitLink",
        
        //translates given text using Microsoft translator API
        translate: function($sourceText, sourceLanguage, targetLanguage, callback) {
            var translationApi = wikiBhasha.extern.msLanguageServicesInterface.translationAPI;
            //attach Microsoft translator API to DOM
            $.getScript(translationApi, function() {
                try {
                    Microsoft.Translator.translate($sourceText, sourceLanguage,
                        targetLanguage, function(translatedText) {
                            if (translatedText && translatedText.length) {
                                callback(translatedText);
                            }
                        });
                }
                catch (e) {
                    //return empty callback if there is any error
                    //MS translator could through an exception if a certain text cannot be translated.
                    callback($sourceText);
                }
            });
        },

        //translates the content for the given source element and enables parallel highlighting on both source and target elements
        translateParallelElements: function(sourceElement, targetElement, onTranslationCompleted) {
            var translationApi = wikiBhasha.extern.msLanguageServicesInterface.translationAPI;

            $.getScript(translationApi, function() {
                // get raw dom element references from jquery references
                var srcElm = sourceElement.get(0),
                    trgElm = targetElement.get(0),

                // construct BV control instance for Step #1
                // Bilinugal Viewer (BV) is a UI control that provides many useful features like side-by-side 
                // display of source and translated content with synchronized scrolling and highlighting features.
                // BE is used for Step#1 of WikiBhasha, to provide intuitive mechanism for presenting parallel material.
                // BV is a published external API from Microsoft.
                bv = new Microsoft.Translator.BilingualViewer(srcElm, trgElm, wbGlobalSettings.sourceLanguageCode, wbGlobalSettings.mtTargetLanguageCode);

                //set whether to show tooltips (CTF) for left & right (source/target) content respectively
                // The Collaborative Translation Framework (CTF) is a collaborative feature that is available as a 
                // tooltip in BV UI Control.  Enable this feature, to provide sharing of translation knowledge.
                bv.setTooltips(false, true);

                //initiate the translation
                bv.translate(function() {
                    if (onTranslationCompleted) {
                        onTranslationCompleted();
                        }
                });
            });
        }
    }

})();