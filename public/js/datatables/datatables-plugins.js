jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "date-euro-pre": function ( a ) {
        var x;
 
        if ( a.trim() !== '' ) {
            var frDatea = a.trim().split(' ');
            var frTimea = (undefined != frDatea[1]) ? frDatea[1].split(':') : [00,00,00];
            var frDatea2 = frDatea[0].split('/');
            x = (frDatea2[2] + frDatea2[1] + frDatea2[0] + frTimea[0] + frTimea[1] + ((undefined != frTimea[2]) ? frTimea[2] : 0)) * 1;
        }
        else {
            x = Infinity;
        }
 
        return x;
    },
 
    "date-euro-asc": function ( a, b ) {
        return a - b;
    },
 
    "date-euro-desc": function ( a, b ) {
        return b - a;
    }
});

jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "chinese-string-asc" : function (s1, s2) {
        return s1.localeCompare(s2);
    },
 
    "chinese-string-desc" : function (s1, s2) {
        return s2.localeCompare(s1);
    }
} );

(function(){
 
    function removeAccents ( data ) {
        if ( data.normalize ) {
            // Use I18n API if avaiable to split characters and accents, then remove
            // the accents wholesale. Note that we use the original data as well as
            // the new to allow for searching of either form.
            return data +' '+ data
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');
        }
     
        return data;
    }
     
    var searchType = jQuery.fn.DataTable.ext.type.search;
     
    searchType.string = function ( data ) {
        return ! data ?
            '' :
            typeof data === 'string' ?
                removeAccents( data ) :
                data;
    };
     
    searchType.html = function ( data ) {
        return ! data ?
            '' :
            typeof data === 'string' ?
                removeAccents( data.replace( /<.*?>/g, '' ) ) :
                data;
    };
     
}());