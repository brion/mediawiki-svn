/*
 * JavaScript functions for the CategoryTree extension, an AJAX based gadget 
 * to display the category structure of a wiki
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Daniel Kinzler <duesentrieb@brightbyte.de>
 * @copyright © 2006 Daniel Kinzler
 * @licence GNU General Public Licence 2.0 or later
*/
    
    function categoryTreeNextDiv(e) {
      n= e.nextSibling;
      while ( n && ( n.nodeType != 1 || n.nodeName != 'DIV') ) {
          //alert('nodeType: ' + n.nodeType + '; nodeName: ' + n.nodeName);
          n= n.nextSibling;
      }
      
      return n;
    }
    
    function categoryTreeExpandNode(cat, mode, lnk) {
      var div= categoryTreeNextDiv( lnk.parentNode.parentNode );
      
      div.style.display= 'block';
      lnk.innerHTML= '&ndash;';
      lnk.title= categoryTreeCollapseMsg;
      lnk.onclick= function() { categoryTreeCollapseNode(cat, mode, lnk) }
        
      if (lnk.className != "CategoryTreeLoaded") {
        categoryTreeLoadNode(cat, mode, lnk, div);
      }
    }
    
    function categoryTreeCollapseNode(cat, mode, lnk) {
      var div= categoryTreeNextDiv( lnk.parentNode.parentNode );
      
      div.style.display= 'none';
      lnk.innerHTML= '+';
      lnk.title= categoryTreeExpandMsg;
      lnk.onclick= function() { categoryTreeExpandNode(cat, mode, lnk) }
    }
    
    function categoryTreeLoadNode(cat, mode, lnk, div) {
      div.style.display= 'block';
      lnk.className= 'CategoryTreeLoaded';
      lnk.innerHTML= '&ndash;';
      lnk.title= categoryTreeCollapseMsg;
      lnk.onclick= function() { categoryTreeCollapseNode(cat, mode, lnk) }

      categoryTreeLoadChildren(cat, mode, div)
    }
    
    function categoryTreeLoadChildren(cat, mode, div) {
      div.innerHTML= '<i class="CategoryTreeNotice">' + categoryTreeLoadingMsg + '</i>';
      
      function f( request ) {
          result= request.responseText;
          if (request.status != 200) result= "<div class='error'> " + request.status + " " + request.statusText + ": " + result + "</div>";
          
          if ( result == '' ) result= '<i class="CategoryTreeNotice">' + categoryTreeNothingFoundMsg + '</i>';
          result = result.replace(/##LOAD##/g, categoryTreeLoadMsg);
          div.innerHTML= result;
      }
      
      sajax_do_call( "efCategoryTreeAjaxWrapper", [cat, mode] , f );
    }
    