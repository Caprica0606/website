<?php
class Sliders
{

  public $aSliders;
  private static $oInstance = null;

  public static function getInstance( ){  
    if( !isset( self::$oInstance ) ){  
      self::$oInstance = new Sliders( );  
    }  
    return self::$oInstance;  
  } // end function getInstance

  /**
  * Constructor
  * @return void
  * @param mixed $mValue
  */
  private function __construct( ){
    $this->generateCache( );
  } // end function __construct

  /**
  * Generates cache variables
  * @return void
  */
  public function generateCache( ){
    global $config;

    $this->aSliders = null;
    $oSql = Sql::getInstance( );
    $oQuery = $oSql->getQuery( 'SELECT iSlider, sFileName, sDescription FROM sliders WHERE sLang = "'.$config['language'].'" ORDER BY iPosition ASC' );
    while( $aValue = $oQuery->fetch( PDO::FETCH_ASSOC ) ){
      $this->aSliders[$aValue['iSlider']] = $aValue;
    } // end while
  } // end function generateCache

  /**
  * Displays slider
  * @return string
  * @param array $aParametersExt
  * Default options: sClassName, bNoLinks, iType, sConfig
  */
  public function listSliders( $aParametersExt = null ){
    global $lang, $config;

    if( isset( $this->aSliders ) ){
      $content = null;
      $i = 1;
      foreach( $this->aSliders as $iKey => $aValue ){
        $aParametersExt['iElement'] = $i;
        $content .= listSlidersView( $aValue, $aParametersExt );
        $i++;
      } // end foreach

      if( isset( $content ) )
        return '<div class="'.( isset( $aParametersExt['sClassName'] ) ? $aParametersExt['sClassName'] : 'slider' ).'" id="slider"><ul>'.$content.'</ul></div><script>$("'.( isset( $aParametersExt['sClassName'] ) ? '.'.$aParametersExt['sClassName'] : '#slider' ).'").quickslider({'.( isset( $aParametersExt['sConfig'] ) ? $aParametersExt['sConfig'] : $config['default_slider_config'] ).'});</script>';
    }
  } // end function listSliders

};
?>