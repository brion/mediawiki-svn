#include "TLanguage.h"

#include <fstream>

using namespace std ;

TLanguage* TLanguage::current = NULL ;

void TLanguage::loadPHP ( string file )
    {
    uint a , b ;
    VTUCS v ;
    TUCS s ;
    ifstream in ( file.c_str() , ios::in ) ;
    char t[10000] ;
    while ( !in.eof() )
        {
        in.getline ( t , sizeof ( t ) ) ;
        s += t ;
        s += "\n" ;
        }
    in.close() ;

    s.explode ( "class Language" , v ) ;
    s = v[0] ;

    TUCS x = " " , y = " " ;
    x[0] = 1 ;
    y[0] = 2 ;
    s.replace ( "\\\"" , x ) ;
    s.replace ( "\"" , y ) ;
    s.replace ( x , "\\\"" ) ;
    
    VTUCS varr , vname ;
    s.replace ( "{$wg" , x ) ;
    s.explode ( "$wg" , v ) ;
    for ( a = 0 ; a < v.size() ; a++ ) v[a].replace ( x , "{$wg" ) ;
    tg.clear() ;
    for ( a = 1 ; a < v.size() ; a++ )
        {
        b = v[a].find ( "=" ) ;
        varr.push_back ( v[a].substr ( b ) ) ;
        
        TUCS z = v[a].substr ( 0 , b ) ;
        while ( !z.empty() && ( z[z.length()-1] < 'A' || z[z.length()-1] > 'Z' ) )
           z.pop_back () ;
        z.pop_back () ;
        vname.push_back ( z ) ;
        }
    
//    ofstream out ( "lang.txt" , ios::out ) ;
    for ( b = 0 ; b < varr.size() ; b++ )
        {
        VTUCS w ;
        TUCS group = vname[b] ;
        if ( group == "AllMessages" ) group = "" ;
        s = varr[b] ;

        tg.push_back ( TLangGroup() ) ;
        tg[b].name = group ;

        v.clear() ;
        uint l = 0 ;
        bool quote = false ;
        for ( a = 0 ; a < s.length() ; a++ )
           {
           if ( s[a] == 2 ) quote = !quote ;
           else if ( s[a] == ',' && !quote )
              {
              v.push_back ( s.substr ( l , a - l + 1 ) ) ;
              l = a+1 ;
              }
           }
        v.push_back ( s.substr ( l ) ) ;
        
        for ( a = 0 ; a < v.size() ; a++ )
           {
           v[a].explode ( "=>" , w ) ;
           TUCS key , value ;
           if ( w.size() == 1 )
              {
              key = TUCS::fromint ( a ) ;
              value = w[0] ;
              }
           else
              {
              key = w[0] ;
              w.erase ( w.begin() ) ;
              value.implode ( "=>" , w ) ;
              }
           fromPHP ( key , y ) ;
           fromPHP ( value , y ) ;
//           key = group + key ;
           tg[b].setTrans ( key , value ) ;
//           out << key.getstring() << " = " << tg[b].getTrans(key).getstring() << endl ;
           }
//        cout << vname[b].getstring() << endl ;        
        }
        
    }
    
void TLanguage::fromPHP ( TUCS &s , TUCS y )
    {
    if ( s.find ( y ) < s.length() )
        {
        s = s.substr ( s.find ( y ) + 1 ) ;
        s = s.substr ( 0 , s.find ( y ) ) ;
        }
    else
        {
        s.trim() ;
        int a , b = -1 ;
        for ( a = s.length()-1 ; a >= 0 ; a-- )
           {
           if ( s[a] == '_' || s[a] == ' ' || s[a] == '-' ||
                ( s[a] >= '0' && s[a] <= '9' ) ||
                ( s[a] >= 'a' && s[a] <= 'z' ) ||
                ( s[a] >= 'A' && s[a] <= 'Z' ) )
                { }
           else if ( b == -1 ) b = a + 1 ;
           }
        if ( b != -1 ) s = s.substr ( b ) ;
        }
    s.trim() ;
    }
    
void TLanguage::dumpCfile ()
    {
    string fn = "Language" + lid + ".cpp" ;
    ofstream out ( fn.c_str() , ios::out ) ;
    uint a , b ;
    out << "// THIS FILE WAS AUTOMATICALLY GENERATED FROM A Language.php FILE." << endl ;
    out << "// YOU CAN CONVERT A Language.php FILE BY RUNNING THE PROGRAM " ;
    out << "// WITH THE 'PHP2C' PARAMETER" << endl ;
    out << "#include \"TLanguage.h\"" << endl << endl ;
    out << "void TLanguage::init" << lid << " ()" << endl ;
    out << "  {" << endl ;
//    out << "  tg.clear() ;" << endl ;
    out << "  int cnt = 0 ;" << endl ;
    for ( a = 0 ; a < tg.size() ; a++ )
        {
//        out << "  tg.push_back ( TLangGroup () ) ;" << endl ;
//        out << "  tg[cnt].name = \"" ;
//        out << tg[a].name.getstring() << "\" ;" << endl ;
        out << "  cnt = getGroup ( \"" ;
        out << tg[a].name.getstring() << "\" ) ;" << endl ;
        VTUCS k = tg[a].getKeys() ;
        for ( b = 0 ; b < k.size() ; b++ )
           {
           TUCS v = tg[a].getTrans ( k[b] ) ;
           out << "  tg[cnt].setTrans ( \"" ;
           out << k[b].getstring() << "\" , \"" ;
           out << v.getstring() << "\" ) ;" << endl ;
           }
//        out << "  cnt++ ;" << endl ;
        }
    out << "  }" << endl ;
    }

TLanguage::TLanguage ( string l )
    {
    lid = l ;
    initEN () ; // Default
    if ( lid == "EN" ) {}
    else if ( lid == "DE" ) initDE () ;
    else loadPHP ( "Language.php" ) ; // Fallback
    }
    
uint TLanguage::getGroup ( TUCS s )
    {
    uint i ;
    for ( i = 0 ; i < tg.size() && tg[i].name != s ; i++ ) ;
    if ( i == tg.size() )
        {
        tg.push_back ( TLangGroup() ) ;
        tg[i].name = s ;
        }
    return i ;
    }
    
TUCS TLanguage::getTranslation ( char *t )
    {
    return getTranslation ( TUCS ( t ) ) ;
//    cout << t << " : " << translations[t].getstring() << endl ;
//    return translations[t] ;
    }

void TLanguage::setData ( TUCS s , TUCS t )
    {
    s.toupper() ;
    uint i = getGroup ( "internal" ) ;
    tg[i].setTrans ( s , t ) ;
    }
    
TUCS TLanguage::getData ( TUCS t )
    {
    t.toupper() ;
    uint i = getGroup ( "internal" ) ;
    return tg[i].getTrans ( t ) ;
    }    
    
TUCS TLanguage::getTranslation ( TUCS t )
    {
    uint i ;
    VTUCS x ;
    t.explode ( ":" , x ) ;
    if ( x.size() == 1 ) x.insert ( x.begin() , TUCS("") ) ;
    for ( i = 0 ; i < tg.size() && tg[i].name != x[0] ; i++ ) ;
    if ( i == tg.size() ) return "" ;
    return tg[i].getTrans ( x[1] ) ;
    }

TUCS TLanguage::getUCfirst ( TUCS t )
    {
    if ( t.empty() ) return t ;
    if ( t[0] >= 'a' && t[0] <= 'z' ) t[0] = t[0] - 'a' + 'A' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    return t ;
    }

TUCS TLanguage::getLCfirst ( TUCS t )
    {
    if ( t.empty() ) return t ;
    if ( t[0] >= 'A' && t[0] <= 'Z' ) t[0] = t[0] - 'A' + 'a' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    if ( t[0] == '�' ) t[0] = '�' ;
    return t ;
    }

bool TLanguage::isLanguageNamespace ( TUCS s )
    {
    s = "LanguageNames:" + getLCfirst ( s ) ;
//    cout << s.getstring() << " : " << getTranslation ( s ).getstring() << endl ;
    if ( getTranslation ( s ) == "" ) return false ;
//    if ( getLanguageNumber ( s ) == -1 ) return false ;
    return true ;
    }
    
TUCS TLanguage::getLanguageName ( TUCS s )
    {
    s = "LanguageNames:" + getLCfirst ( s )  ;
    return getTranslation ( s ) ;
    }

//************************************

void TLangGroup::addTrans ( TUCS k , TUCS v )
    {
    key.push_back ( k ) ;
    value.push_back ( v ) ;

//    trans[(char*)k.getstring().c_str()] = v ;
    }
    
void TLangGroup::setTrans ( TUCS k , TUCS v )
    {
    uint a ;
    for ( a = 0 ; a < key.size() && k != key[a] ; a++ ) ;
    if ( a == key.size() )
        {
        key.push_back ( k ) ;
        value.push_back ( v ) ;
        }
    else value[a] = v ;

//    trans[(char*)k.getstring().c_str()] = v ;
    }
    
TUCS TLangGroup::getTrans ( TUCS k )
    {
    uint a ;
    for ( a = 0 ; a < key.size() && k != key[a] ; a++ ) ;
    if ( a == key.size() ) return "" ;
    return value[a] ;
//    return trans[(char*)k.getstring().c_str()] ;
    }

VTUCS TLangGroup::getKeys ()
    {
    return key ;
    }
    
