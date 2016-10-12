document.addEventListener('DOMContentLoaded', function (event) {
//    $('#nfe-product-table').dataTable({});
//    $('#nfe-taxes-table').dataTable({});
    // $.fn.bootstrapSwitch.defaults.size = 'large';
    $("input[type=checkbox].bootstrap-switch").bootstrapSwitch();

    $('.datepicker').datepicker({
        language: 'es',
        format: 'yyyy-mm-dd'
    });

    $("#avatar").fileinput({
        overwriteInitial: true,
        maxFileSize: 2500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="'+ (typeof avatar !== 'undefined' && avatar !== '/img/avatar/' ? avatar :'/js/plugins/fileinput/img/default_avatar_male.jpg') + '" alt="Your Avatar" style="width:160px">',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

    //  $('select[readonly=readonly] option:not(:selected)').prop({'disabled': true});

    $("#has_occupation").change(function () {
        toggleWhileCheck("has_occupation", "occupation");
    });
    $("#has_occupation").change();
    $("#has_work").change(function () {
        toggleWhileCheck("has_work", "work");
    });
    $("#has_work").change();
    
    $("#person_cuil").change(function () {
        var classElement = $($('#person_cuil')[0].parentNode);
        if(classElement.hasClass("has-error"))
            classElement.removeClass("has-error");
        if(classElement.hasClass("has-success"))
            classElement.removeClass("has-success");
        if($('#person_cuil')[0].value=="")
            return;
        if (isValidCuitField("person_cuil")) {
            classElement.addClass("has-success");
        } else {
            classElement.addClass("has-error");
        }
    });
    $("#person_cuil").change();
});

function toggleWhileCheck(idcheckbox, idfield) {
    if ($('#' + idcheckbox)[0].checked) {
        $('#' + idfield)[0].readOnly = false;
    } else {
        $('#' + idfield)[0].readOnly = true;
    }
}

function isValidCuitField(fieldName){
    var valueCuit = $("#"+fieldName)[0].value;
    var numberCuit = valueCuit.replace("-","").replace("-","");
    return isValidNumberCuit(numberCuit);
}

function isValidNumberCuit(qCUIT)
{
    var aMult = '6789456789';
    var aMult = aMult.split('');
    var sCUIT = String(qCUIT);
    var iResult = 0;
    var aCUIT = sCUIT.split('');

    if (aCUIT.length === 11)
    {
        // La suma de los productos 
        for (var i = 0; i <= 9; i++)
        {
            iResult += aCUIT[i] * aMult[i];
        }
        // El módulo de 11 
        iResult = (iResult % 11);

        // Se compara el resultado con el dígito verificador 
        return (iResult == aCUIT[10]);
    }
    return false;
}