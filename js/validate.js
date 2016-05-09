function validate() {
    var e1=e2=e3=false;
    if($("#client").val().length == 0 && e1==false) {
        $("div.form-group#name").addClass(" has-error");
        e1=true;
    }
    else{
        $("div.form-group#name").removeClass(" has-error");
        $("div.form-group#name").addClass(" has-success");
        e1=false;
    }
    if($("#Inv").val().length == 0 && e2==false) {
        $("div.form-group#InvoiceNo").addClass(" has-error");
        e2=true;
    }
    else{
        $("div.form-group#InvoiceNo").removeClass(" has-error");
        $("div.form-group#InvoiceNo").addClass(" has-success");
        e2=false;
    }  
    if($("#des").val().length == 0 && e3==false) {
        $("div.form-group#description").addClass(" has-error");
        e3=true;
    }
    else{
        $("div.form-group#description").removeClass(" has-error");
        $("div.form-group#description").addClass(" has-success");
        e3=false;
    } 
    if(e1==false && e2==false && e3==false) {
        //$("#NewContract").submit();
        alert("Success!!!");
        return true;
    }
    else{
        return false;
    }
}

