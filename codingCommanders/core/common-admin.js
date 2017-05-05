/* 
License:
  Code in this file (or any part of it) can be used only as part of Quick.Cms v6.0 or later. All rights reserved by OpenSolution.
*/
var sLastSearchPhrase = '',
    aSelectCache = {},
    aSelectCacheMap = {},
    aSelectCacheAttr = {},
    bHideShortDescription = getCookie( 'bHideShortDescription' ),
    oParent = null,
    bDisplayAll = null;

function customCheckbox(){
  $('.custom input[type=checkbox] ~ label').each( function(){
    $( this ).siblings( '.label' ).text( $( this ).text() );
    $( this ).siblings( '.label' ).click( {oObj:this}, function(e){ $( e.data.oObj ).trigger( 'click' ); } );
  });
}

function displayTab( oObj, bInit ){
  var sBlock = getCookie( 'sSelectedTab' );
  if( bInit && window.location.hash.replace( '#', '' ) != '' ){
    sBlock = window.location.hash.replace( '#', '' );
    if( sBlock.indexOf( 'link-' ) == 0 )
      sBlock = sBlock.replace( 'link-', '' );
  }
  else if( bInit && sBlock && $( '#body > h2.msg:not(.error)' ).length > 0 ){
    if( sBlock == 'add-files' )
      sBlock = 'files';
    delCookie( 'sSelectedTab' );
  }
  else
    sBlock = $( oObj ).attr( 'id' );
  if( $('#'+sBlock).length > 0 ){
    $( '.tabs li' ).removeClass( 'selected' );
    $( '.tabs li#'+sBlock ).addClass( 'selected' );
    $( '.forms' ).hide();
    $( '#tab-'+sBlock ).show();
    createCookie( 'sSelectedTab', sBlock, 2 );
    if( typeof bInit === 'undefined' )
      window.location.hash = 'link-'+sBlock;
    return sBlock;
  }
}

function displayTabInit( sCallback ){
  $( '.tabs li' ).click( { 'sCallback': sCallback }, function( e ){ e.preventDefault(); displayTab( this ); if( typeof e.data.sCallback === 'function' ) e.data.sCallback( this ); } );
  return displayTab( $( '#'+$( '.tabs li' ).first().attr( 'id' ) ), true );
}

function focusCursor( aFields ){
  var bFound = false;
  $.each( aFields, function( iIndex, sValue ){
    if( $( "[name='"+sValue+"']" ).val() == "" ){
      $( "[name='"+sValue+"']" ).focus( );
      bFound = true;
      return false;
    }
  });
  if( bFound === false )
    $( "[name='"+aFields[aFields.length-1]+"']" ).focus( );
}

function filesFromServerEvents( ){
  $( '#files-dir-table td.select input[type=checkbox]' ).click( function(){displayFilesOptions( this );} );
  $( '#files-dir-table' ).fixedfiles();
}

function refreshFiles(){
  $( '#files-dir .files-dir-container' ).html( '<div class="loading rwd-inner-container"><img src="templates/admin/img/loading.gif" alt="Loading..." /></div>' );
  $( '#files-dir .files-dir-container' ).load( aQuick['sPhpSelf']+'?p=ajax-files-in-dir', function(){
    $( '#files-dir-table input:checked' ).each( function(){
      displayFilesOptions( this );
    } );
    filesFromServerEvents( );
  });
	$( '#attachingFilesInfo' ).show();
}

function displayFilesOptions( oObj ){
  var iFile = $( oObj ).attr( 'data-i' ),
      iSize = $( oObj ).attr( 'data-img' );
  if( oObj.checked === true ){
    $( '#fileTr'+iFile+' .position' ).html( '<input type="text" name="aDirFilesPositions['+iFile+']" value="0" maxlength="4" class="numeric" />' );
    $( '#fileTr'+iFile+' .description' ).html( '<input type="text" name="aDirFilesDescriptions['+iFile+']" class="input description" />' );
  }
  else{
    $( '#fileTr'+iFile+' td:not( .select, .name )' ).empty( );
  }
  if( iSize > 0 && oObj.checked === true ){
    $( '#fileTr'+iFile+' .default' ).html( '<input type="radio" name="iDirDefaultImage" value="'+iFile+'"/>' );
    $( '#fileTr'+iFile+' .location' ).html( '<select name="aDirFilesTypes['+iFile+']">'+sTypesSelect+'</select>' );
    $( '#fileTr'+iFile+' .thumb' ).html( '<select name="aDirFilesSizes['+iFile+']">'+sSizeSelect+'</select>' );
  }
  $( '#files-dir-table' ).fixedfiles();
}

function clearThumbDefault( oObj ){
  var sWhichTab = $( oObj ).closest( 'table' ).attr( 'id' );
  $( '#'+sWhichTab+' .default input:checked' ).prop( 'checked', false );
  $( '#iChangedFiles' ).val( 1 );
  $( '#iSetDefaultImage' ).val( 0 );
}



(function($){
  $.fn.fixedfiles = function(){ return this.each(function(){
    var oTable = $( this ),
      oHeader = $( '.fixed-files' );
    function init() {
      if( oHeader.length == 0 ){
        oHeader = $( oTable ).find( 'thead' ).clone();
        oHeader.insertBefore( oTable ).wrap( '<table class="rwd-inner-container fixed-files" />' );
        oHeader = $( '.files-dir-container .rwd-inner-container.fixed-files' );
      }
      fixColumnsSize();
    }
    function fixColumnsSize(){
      oHeader.find( 'th' ).each(function(index){
        var iColumnWidth = Math.floor( oTable.find( 'th' ).eq( index ).outerWidth() );
         oTable.find( 'th' ).eq( index ).outerWidth( iColumnWidth );
         $( this ).css( 'width', iColumnWidth+'px' );
      });
    }
    function scrollHeader(){
      var iOffsetTop = $( this ).scrollTop(),
      iTableOffsetTop = oTable.offset().top,
      iTableOffsetBottom = iTableOffsetTop + oTable.height() - oTable.find( 'thead' ).height();
      if( iOffsetTop < iTableOffsetTop || iOffsetTop > iTableOffsetBottom ){
         oHeader.hide();
      }
      else if( iOffsetTop >= iTableOffsetTop && iOffsetTop <= iTableOffsetBottom && oHeader.is(':hidden') ){
         oHeader.show();
      }
    }
    $(window).scroll(scrollHeader);
    $(window).resize(fixColumnsSize);
    $( '.tabs li#add-files' ).click(scrollHeader);
    init();
  }); };
})(jQuery);

function checkPagesTab( oObj ){
  if( $( oObj ).attr( 'id' ) == 'add-files' ){
    $( '#files-dir-table' ).fixedfiles();
  }
  else{
    $( '.fixed-files' ).remove();
  }
}

function checkType( ){
  if( $( '#iMenu' ).length > 0 ){
    if( $.isNumeric( $( '#iPageParent' ).val() ) ){
      $( '#iMenu' ).closest( 'li' ).hide();
    }
    else{
      $( '#iMenu' ).closest( 'li' ).show();
    }
  }
}

function listSearch( oPhrase, sId, bInputs ){
  if( sLastSearchPhrase != $( oPhrase ).val() ){
    sLastSearchPhrase = $( oPhrase ).val();
    var aPhrases = $( oPhrase ).val().toLowerCase().split(" "),
        iPhrases = aPhrases.length,
        oContainer = ( $( '#'+sId +" tbody").length ) ? $( '#'+sId+' tbody' ) : $( '#'+sId ),
        oRows = $( oContainer ).children(':not(.no-search)'),
        iRows = oRows.length,
        oRow = null,
        sDisplay = null;
    if( typeof bInputs === 'undefined' )
      bInputs = false;
    for( var i = 0; i < iRows; i++ ){
      sDisplay = '';
      oRow = oRows.eq(i);
      var sText = oRow.children().not(":has(select), .no-search, .options").text().toLowerCase();
      for( var j = 0; j < iPhrases; j++ ){
        if( sText.indexOf( aPhrases[j] ) < 0 && ( !bInputs || oRow.children( 'input' ).val().toLowerCase().indexOf( aPhrases[j] ) < 0 ) ){
          sDisplay = 'none';
        }
      }
      oRows.eq(i).css( 'display', sDisplay );
    }
  }
}

function changeSearchAttr( oObj ){
  $( '.search input' ).attr( 'onkeyup', " listSearch( this, 'tab-"+ $( oObj ).attr( 'id' ) +"', true )" );
  $( '#tab-'+$( oObj ).attr( 'id' ) ).children().show();
  $( '.search input' ).val( '' );
}

function gEBI( objId ){
  return document.getElementById( objId );
}

function throwMessages( sMessages ){
  $( '#messages > li > section' ).hide();
  if( $( '#messages .'+sMessages+' .loading' ).length > 0 ){
    $( '#messages .'+sMessages+' .loading' ).append( '<img src="templates/admin/img/loading-horizontal.gif" alt="Loading..." />' );
    $( '#messages .'+sMessages+' header' ).append( '<a href="#" class="close">x</a>' );
    $( '#messages .'+sMessages+' section > div' ).load( aQuick['sPhpSelf']+'?p=ajax-messages-'+sMessages );
  }
  $( '#messages .'+sMessages+' section').show();
  $( 'body' ).append( '<div id="closeLayer"></div>' );
  $( '#closeLayer').show();
  $( '#closeLayer').css( 'height', $( document ).height() );
  $( '#messages .close, #closeLayer' ).click(function(){
    $( '#messages > li > section' ).hide();
    $( '#closeLayer').hide();
  });
}

function clearMessages( sMessages ){
  if( sMessages == 'news' ){
    createCookie( 'iMessagesNewsTime', parseInt( $.now()/1000 ), 365 );
    createCookie( 'bMessagesNewsClear', 1 );
    $( '#messages .'+sMessages+' li' ).removeClass('unread');
  }
  else if( sMessages == 'notices' )
    $.get( aQuick['sPhpSelf']+'?p=ajax-messages-notices-clear' );
  $( '#messages .'+sMessages+' > a strong' ).html('0');
  $( '#messages .'+sMessages+' footer' ).remove();
}

function checkChangedFile( ){
  if( $( '#iChangedFiles' ).length > 0 ){
    $( '#iChangedFiles' ).val( 0 );
    $(function(){ $( '#tab-files input:not([name*="aFilesDelete"]), #tab-files select' ).change( function(){ $( '#iChangedFiles' ).val( 1 ); } ) } );
  }
}

function displayFullPluginDescription( iPlugin ){
  $( '#d'+iPlugin ).hide();
  $( '#df'+iPlugin ).show();
}

function changeLoginData( sField ){
  var sEl = '#tab-loging li.old';
  if( $( '#tab-loging li.new #sLoginEmailNew' ).val() != '' || $( '#tab-loging li.new #sLoginPassNew' ).val() != '' ){
    $( sEl ).slideDown();
    $( '#tab-loging li.old input' ).attr( 'data-form-check', 'required' );
  }
  else{
    $( sEl ).slideUp();
    $( sEl+' input' ).val('');
    $( sEl+' input' ).removeAttr( 'data-form-check' );
  }
}

function checkLoginChange( oForm ){
  var sEl = '#tab-loging li.old';
  $( sEl+' span.check' ).remove();
  if( typeof aLoginAjax['login'] !== 'undefined' )
    aLoginAjax['login'].abort();
  var bFormCorrect = false;

  if( $( sEl+' #sLoginPassOld' ).val() != '' && $( sEl+' #sLoginEmailOld' ).val() != '' ){
    $( sEl ).append( '<span class="check"><span class="loading"><img src="templates/admin/img/loading-horizontal.gif" alt="Loading..." /></span></span>' );
    $( '.buttons li.save input' ).css({ 'background-image': 'url("./templates/admin/img/loading-horizontal.gif")', 'background-position': '10px center' });

    aLoginAjax['login'] = $.ajax({
      url: aQuick['sPhpSelf']+'?sVerifypass='+$( sEl+' #sLoginPassOld' ).val()+'&sVerifyemail='+$( sEl+' #sLoginEmailOld' ).val()+'&p=ajax-verify-login',
      async: false
    }).done(function( sResult ){
      $( sEl+' span.check' ).html( ( sResult == 'true' ? '<img src="templates/admin/img/ok.png" alt="Ok" />' : aQuick['sIncorrectData'] ) );
      $( '.buttons li.save input' ).css({ 'background-image': 'url("./templates/admin/img/save.png")', 'background-position': 'none' });
      bFormCorrect = ( sResult == 'true' ) ? true : false;
      if( bFormCorrect === false && $( '.main-form ul.tabs' ).length > 0 ){
        displayTab( '#loging' );
      }
    });
    return bFormCorrect;
  }
  else
    return true;
}

function displayShortDescriptionField( bClick ){
  var sShort = '#tab-content li.short-description';
  if( $( sShort+' div.toggle:visible' ).length > 0 ){
    $( sShort+' div.toggle' ).hide();
    $( sShort+' .expand .hide' ).hide();
    $( sShort+' .expand .display' ).show();
    if( bClick )
      createCookie( 'bHideShortDescription', 1 );
  }
  else if( bClick || bHideShortDescription != 1 ){
    $( sShort+' div.toggle' ).show();
    $( sShort+' .expand .hide' ).show();
    $( sShort+' .expand .display' ).hide();
    if( bClick )
      delCookie( 'bHideShortDescription' );
  }
}

function checkParentForm( ){
  if( $( '#iPageParent' ).val() != '' && $( '#iPageParent' ).val() == $( '#iPage' ).val() ){
    displayTab( '#options' );
    alert( $( '#tab-options .parent label' ).text()+' - '+aCF['sInt'] );
    $( '#iPageParent' ).focus( );
    return false;
  }
}

/* PLUGINS */
