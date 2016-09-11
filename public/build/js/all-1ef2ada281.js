/*
 * ConfirmDelete: Asks the user for confirmation when a record is being deleted
 */
function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete?");

    if (x) {
        return true;
    } else {
        return false;
    }
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//$(function () {
//    $('a[data-toggle="collapse"]').on('click',function(){
//        var objectID=$(this).attr('href');
//        $(objectID).collapse('toggle');
//        if($(objectID).hasClass('in')) {
//            $(objectID).collapse('hide');
//        } else {
//            $(objectID).collapse('show');
//        }
//    });
//
//    $('#expandAll').on('click',function(){
//        $('a[data-toggle="collapse"]').each(function(){
//            var objectID=$(this).attr('href');
//            if($(objectID).hasClass('in')===false) {
//                $(objectID).collapse('show');
//            }
//        });
//    });
//
//    $('#collapseAll').on('click',function(){
//        $('a[data-toggle="collapse"]').each(function() {
//            var objectID=$(this).attr('href');
//            $(objectID).collapse('hide');
//        });
//    });
//});

$(document).ready(function(){
    $('table.cds-datatable').DataTable({
        "columnDefs": [ {
            "targets"  : 'no-sort',
            "orderable": false
        }]
    });
});

//# sourceMappingURL=all.js.map
