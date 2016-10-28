var myApp = {};

myApp.months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
myApp.getMonth = function (intMonth) {
    return myApp.months[intMonth];
};

//Para enviar una fecha de un objeto al servidor. Formato: dd/MM/yyyy hh:mm:ss tt
var dateParseJSON = function (format) {
    if (format == 'Invalid Date') return null;
    if (typeof format === 'string') {
        var datetime = format.split(" ");
        var date = datetime[0].split("/");
        
        var hh = 0, mm = 0, ss = 0;
        
        if (datetime.length > 1) {
            var time = datetime[1].split(":");
            var tt = datetime[2];

            hh = parseInt(time[0]);
            mm = parseInt(time[1]);
            ss = parseInt(time[2]);

            hh = (tt == "PM") ? hh + 12 : hh;
        }

        format = new Date(date[2], date[1] - 1, date[0], hh, mm, ss, 0);        
        return "\/Date(" + format.getTime() + "-0500)\/";
    }
    else if (Object.prototype.toString.call(format) == "[object Date]") {
        return "\/Date(" + format.getTime() + "-0500)\/";
    }        
    else return null;
};

//Para convertir un date (\Date(100011221221-0500)\) a Date Javascript
var dateJsonToObject = function (value) {
    var a;    

    if (typeof value === 'string' && String(value).indexOf('/Date(') == 0) {
        value = value.replace("-0500", "");
        a = /\/Date\((\d*)\)\//.exec(value);
        if (a) {
            return new Date(+a[1]);
        }
    }
    return value;
}

var convertDateToFormat = function (value, format) {    
    try {
        if (value != null) {
            if (String(value).indexOf('/Date(') == 0) {
                value = dateJsonToObject(value);
            }
            
            if (Object.prototype.toString.call(value) === "[object Date]") {
                return value.format(format);
            }
        }

        return value;
    } catch (ex) {
        console.error("convertDateToFormat en global.js");
    }
}

Date.prototype.format = function (format) {
    if (typeof format === 'string') {
        var hours = this.getHours();
        var ttime = "AM";
        if (format.indexOf("t") > -1 && hours > 12) {
            hours = hours - 12;
            ttime = "PM";
        }

        var o = {
            "M+": this.getMonth() + 1, //month
            "d+": this.getDate(),    //day
            "h+": hours,   //hour
            "m+": this.getMinutes(), //minute
            "s+": this.getSeconds(), //second
            "q+": Math.floor((this.getMonth() + 3) / 3),  //quarter
            "S": this.getMilliseconds(), //millisecond,
            "t+": ttime
        }

        if (/(y+)/.test(format)) format = format.replace(RegExp.$1,
          (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o) if (new RegExp("(" + k + ")").test(format))
            format = format.replace(RegExp.$1,
              RegExp.$1.length == 1 ? o[k] :
                ("00" + o[k]).substr(("" + o[k]).length));
        return format;
    } else return null;    
}

myApp.Modulo = {
    Recepcion: 1,
    Almacenaje: 2,
    Produccion: 3,
    Picking: 5,
    Despacho: 6,
    Inventario: 7,
    LAC: 8,
    Courier: 9,
    Transporte: 10
}