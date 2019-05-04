$(document).ready(function() {

    render();
    document.getElementById('ch_capt').click();

    function render() {



        $('.input').html($('#advformid input,#advformid img'));
        $('.input').html('<form id="advformid" name="advformid" method="post"  onsubmit="return aformsubmitb()">' +
            '<p style="TEXT-ALIGN: center">شماره 8 رقمی درج شده در پشت کارت خودرو را  وارد نمائید :</p>' + '<span id="help" data-toggle="modal" data-target="#helpModal"><i class="far fa-question-circle"></i>راهنما</span>' + $('.input').html() + "</form>");
        $('#barcode').remove();
        $('#btn').remove();
        //$('.img-responsive').remove();
        $('.img-responsive').each(function(elm) {
            //   console.log($(elm).attr("src"));
            $(this).attr("src", "http://estelam.rahvar120.ir/" + $(this).attr("src"));
        });
        $("#hashtraghami").attr("placeholder", "کد هشت‌رقمی");
        $("#capcha").attr("placeholder", "کد تصویر بالا را وارد کنید");


        $("#capimg").attr("src", "http://estelam.rahvar120.ir/" + $("#capimg").attr("src"));
        $("#ch_capt").attr("src", "http://estelam.rahvar120.ir/" + $("#ch_capt").attr("src"));
        $("#ch_capt").attr("onclick", $("#ch_capt").attr("onclick").substring(0, 10) +
            "http://estelam.rahvar120.ir" +
            $("#ch_capt").attr("onclick").substring(10, $("#ch_capt").attr("onclick").length));
        $("#ch_capt").click(function() {
            $("#capimg").attr("src", "http://estelam.rahvar120.ir/" + $("#capimg").attr("src"));
            $("#ch_capt").attr("src", "http://estelam.rahvar120.ir/" + $("#ch_capt").attr("src"));
            $("#ch_capt").attr("onclick", $("#ch_capt").attr("onclick").substring(0, 10) +
                "http://estelam.rahvar120.ir" +
                $("#ch_capt").attr("onclick").substring(10, $("#ch_capt").attr("onclick").length));

        });
        $('.submit').show();
        $(".hi").remove();

    }




    function aformcounter() {
        if (document.getElementById('duration')) {
            document.getElementById('duration').value = parseInt(document.getElementById('duration').value) + 1;
        }
        setTimeout("aformcounter()", 1000)
    }
    setTimeout("aformcounter()", 1000)

    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    function dofilter(a) {
        return a.replace(/'/gi, "&#39;").replace(/%/gi, "&#37;").replace(/-/gi, "&#45;").replace(/</gi, "&#60;").replace(/\(/gi, "&#40;").replace(/\)/gi, "&#41;").replace(/\*/gi, "&#42;").replace(/drop/gi, "dr_op").replace(/insert/gi, "ins_ert").replace(/alter/gi, "alt_er").replace(/database/gi, "data_base").replace(/table/gi, "tab_le").replace(/convert/gi, "conv_ert").replace(/delete/gi, "del_ete").replace(/select/gi, "sel_ect").replace(/update/gi, "up_date").replace(/distinct/gi, "dis_tinct").replace(/having/gi, "hav_ing").replace(/truncate/gi, "trun_cate").replace(/replace/gi, "repl_ace").replace(/handler/gi, "hand_ler").replace(/like/gi, "lik_e").replace(/ as /gi, " a_s ").replace(/ or /gi, " o_r ").replace(/ and /gi, " an_d ").replace(/procedure/gi, "proc_edure").replace(/limit/gi, "lim_it").replace(/exec/gi, "exe_c").replace(/sp_/gi, "s_p_").replace(/declare/gi, "decl_are").replace(/=cast/gi, "=ca_st").replace(/cmdshell/gi, "cmd_shell").replace(/makewebtask/gi, "makewe_btask").replace(/waitfor/gi, "wait_for").replace(/union/gi, "uni_on")
    }

    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    function onlyNumbers(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
        return true;
    }

    function checkMelliCode(meli_code) {
        if (meli_code.length == 10) {
            if (meli_code == '1111111111' || meli_code == '0000000000' || meli_code == '2222222222' || meli_code == '3333333333' || meli_code == '4444444444' || meli_code == '5555555555' || meli_code == '6666666666' || meli_code == '7777777777' || meli_code == '8888888888' || meli_code == '9999999999') {
                return false;
            }
            c = parseInt(meli_code.charAt(9));
            n = parseInt(meli_code.charAt(0)) * 10 + parseInt(meli_code.charAt(1)) * 9 + parseInt(meli_code.charAt(2)) * 8 + parseInt(meli_code.charAt(3)) * 7 + parseInt(meli_code.charAt(4)) * 6 + parseInt(meli_code.charAt(5)) * 5 + parseInt(meli_code.charAt(6)) * 4 + parseInt(meli_code.charAt(7)) * 3 + parseInt(meli_code.charAt(8)) * 2;
            r = n - parseInt(n / 11) * 11;
            if ((r == 0 && r == c) || (r == 1 && c == 1) || (r > 1 && c == 11 - r)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function isIE() {
        return /msie/i.test(navigator.userAgent) && !/opera/i.test(navigator.userAgent);
    }

    function combochils(obj) {
        document.getElementById(obj).innerHTML = "";
        setTimeout("if(document.getElementById('" + obj + "').getAttribute('childcombo')!=null){combochils(document.getElementById('" + obj + "').getAttribute('childcombo'))}", 10)
    }

    function setops(obj, vals) {
        if (obj != '' && obj != null) {
            document.getElementById(obj).outerHTML = document.getElementById(obj).outerHTML.replace("</SELECT>", vals + "</SELECT>").replace("</select>", vals + "</SELECT>");
        }
    }
    var lastc = '';
    var cxmv;
    var chp_mypv;
    var cname = '';
    try {
        cxmv = new XMLHttpRequest();
    } catch (e) {
        try {
            cxmv = new ActiveXObject("MSXML2.XMLHTTP.4.0");
        } catch (oc) {
            try {
                cxmv = new ActiveXObject("MSXML2.XMLHTTP.3.0");
            } catch (occ) {
                try {
                    cxmv = new ActiveXObject("MSXML2.XMLHTTP");
                } catch (oc4) {
                    try {
                        cxmv = new ActiveXObject("MICROSOFT.XMLHTTP.1.0");
                    } catch (oc5) {
                        try {
                            cxmv = new ActiveXObject("MICROSOFT.XMLHTTP.1");
                        } catch (oc6) {
                            try {
                                cxmv = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (oc) {
                                cxmv = null;
                            }
                        }
                    }
                }
            }
        }
    }
    if (!cxmv && typeof XMLHttpRequest != "undefined") {
        cxmv = new XMLHttpRequest();
    }

    function loadcombobox(sn, fname, relationto, txtval, thisvalue, fid) {
        cname = fname;
        combochils(cname);
        document.getElementById('cloading' + cname).style.display = '';
        document.getElementById(cname).disabled = true;
        cxmv.onreadystatechange = chp_mypv;
        cxmv.open('POST', '/includes/loadcombobox.jsp?sitelan=f&thisvalue=' + thisvalue + '&fname=' + fname + '&txtval=' + txtval + '&fid=' + fid + '&rand=' + Math.random(), true);
        cxmv.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        cxmv.send('sn=' + urlEncode(sn));
    }
    chp_mypv = function() {
        if (cxmv.readyState == 4) {
            if (cxmv.status == 200) {
                document.getElementById('cloading' + cname).style.display = 'none';
                if (isIE() != true) {
                    document.getElementById(cname).innerHTML = cxmv.responseText;
                } else {
                    setops(cname, cxmv.responseText)
                };
                document.getElementById(cname).disabled = false;
            } else {
                alert('بروز خطا در خواندن آيتم ها')
            }
        }
    };

    function urlEncode(str) {
        str = escape(str);
        str = str.replace(/%3D/g, '=');
        str = str.replace(/%7C/g, '|');
        str = str.replace(/%u/g, 'DARSADU');
        return str;
    }
    var xbvalue = '';
    var xbname = '';

    function loadbybutton(fname, sn, bname, fid) {
        xbname = bname;
        xbvalue = document.getElementById(bname).value;
        document.getElementById(bname).disabled = true;
        document.getElementById(bname).value = 'لطفا صبر کنيد ...';
        cxmv.onreadystatechange = chp_mybut;
        cxmv.open('POST', '/includes/loadbybutton.jsp?sitelan=f&fname=' + fname + '&fid=' + fid + '&siteid=1&rand=' + Math.random(), true);
        cxmv.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        cxmv.send('sn=' + urlEncode(sn));
    }
    chp_mybut = function() {
        if (cxmv.readyState == 4) {
            if (cxmv.status == 200) {
                document.getElementById(xbname).disabled = false;
                document.getElementById(xbname).value = xbvalue;
                byb(cxmv.responseText)
            } else {
                document.getElementById(xbname).disabled = false;
                document.getElementById(xbname).value = xbvalue;
                alert('بروز خطا در دريافت اطلاعات' + cxmv.status)
            }
        }
    };

    function byb(z) {

        var a = z.split('^')[0];
        for (var i = 0; i < a.split('|').length; i++) {
            if (a.split('|')[i] != '') {
                if (document.getElementById(a.split('|')[i].split('=')[0])) {
                    document.getElementById(a.split('|')[i].split('=')[0]).value = a.split('|')[i].split('=')[1]
                }
            }
        }
        if (z.split('^')[1] != '') {
            eval(z.split('^')[1])
        }
    }
    var v11_0 = 0;

    var myformid = 101;
});
$('#capcha').keypress(function(e) {
    if (e.which == 13) {
        aformsubmitb();
        return false; //<---- Add this line
    }
});

$('.downloadapp').click(function() {
    gtag('event', 'download', {
        'event_category': 'download_app',
        'event_label': 'download_app'
    });
});


function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function aformsubmitb() {

    var postd = 0;
    if (postd != 1) {
        if (document.getElementById('capcha') == '') {
            alert('لطفا متن درون تصویر را در جعبه متن زیر آن وارد نمائید');
            document.getElementById('capcha').focus();
            postd = 1;
        }
    }
    if (postd != 1) {
        if (isNumeric(document.getElementById('hashtraghami').value) == false && document.getElementById('hashtraghami').value != '') {
            alert('در فیلد  کد هشت رقمی باید فقط از اعداد 0 تا 9 استفاده نمایید');
            document.getElementById('hashtraghami').focus();
            postd = 1;
        }
    }
    if (postd != 1) {
        if (document.getElementById('hashtraghami').value == '') {

            alert('لطفا فيلد کد هشت رقمی را پر نمائید');
            document.getElementById('hashtraghami').focus();
            postd = 1;
        }
    }
    if (postd != 0) {
        return false
    } else {

        gtag('event', 'clickOn_estelam', {
            'event_category': 'pardakht_khalafi',
            'event_label': 'pardakht_khalafi'
        });
        $(".contain").html("درحال دریافت . . . ");
        $.ajax({
            type: 'POST',
            url: "./proxy.php",
            data: $("#advformid").serialize(),
            /*dataType: "text",*/
            success: function(Data) {



                if (Data == "1") {

                    $(".contain").html("<h4>کد امنیتی وارد شده صحیح نمی باشد</h4>");
                    document.getElementById('ch_capt').click()
                    document.getElementById('#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_BatchPaySubmit').display = none;


                }

              

                var tempDom = $('.contain').append($.parseHTML(Data));
                var tbl = $("table", tempDom);

                if (Data.search("اطلاعات مربوط به تخلف خوروی شما تا  این تاریخ در سایت راهور 120 یافت نگردیده است") > -1) {
                    alert("اطلاعات مربوط به تخلف خوروی شما تا  این تاریخ در راهور یافت نگردیده است");
                    $(".contain").html("");
                    return;
                }




                $(".contain").html(tbl);

                gtag('event', 'show_khalafi', {
                    'event_category': 'pardakht_khalafi',
                    'event_label': 'pardakht_khalafi'
                });
                $(".odd").remove();
                $("tr>th:first-child").remove();




                $("#t1 thead>tr").prepend("<th>انتخاب</th>");

                $("#t1 tbody>tr").prepend("<td><input type='checkbox' name='paycheck' class='paycheck' /></td>");

                $('.paycheck').change(function(e) {
                    var jsonArray = $.parseJSON($('#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult').val());

                    var newjson = $.parseJSON('{"BillId":"' + $(event.target).parent().parent().children(":nth-child(13)").text() + '","PayId":"' + $(event.target).parent().parent().children(":nth-child(12)").text() + '","RowId":"Item' + jsonArray.length + '"}');
                    if (!$(e.target).prop('checked')) {
                        $.each(jsonArray, function(key) {
                            console.log(key);
                            if (jsonArray[key].BillId == newjson.BillId) {
                                jsonArray.splice(key, 1);
                                $("#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult").val(JSON.stringify(jsonArray));
                                return;
                            }
                        });
                        $("#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult").val(JSON.stringify(jsonArray));
                    } else {
                        jsonArray.push(newjson);
                        $("#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult").val(JSON.stringify(jsonArray));
                    }
                    console.log($(event.target).parent().parent().children(":nth-child(9)").text());

                });

                $('.contain').append('<form name="aspnetForm" method="post" action="https://bill.samanepay.com/Public/BillPay.aspx?rand=1" ' +
                    'onsubmit="javascript:return WebForm_OnSubmit();" ' +
                    'id="aspnetForm2"><div style="display: none">' +
                    '</div>' +
                    '</form>')
                $('#aspnetForm2>div').html($('#aspnetForm input '));
                $('#aspnetForm2').append($('#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_BatchPaySubmit'));
                $('#aspnetForm2>div>#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_BatchPaySubmit').remove();
                $('#ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult').val('[]');
                $('.contain').append('<div class="brn-group col-md-4"><a href="https://farmooon.com/?p=386" target="_blank" id="btn-Protest" class="btn btn-primary">اعتراض</a></div>');


                // $('#aspnetForm2').append('<input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolder1$Txt_BillResult" id="ctl00_ctl00_ContentPlaceHolder1_ContentPlaceHolder1_Txt_BillResult" value=\'[{BillId:"8863069000298",PayId:"50006963",RowId:"Item2"},{BillId:"4745619900294",PayId:"100006029",RowId:"Item3"}]\' type="hidden">');
                $('#vvbb').remove();


                //check for the responsive table
                if (document.getElementById("t1") || Data == "1") {
                    document.getElementById('ch_capt').click();


                } else {
                    document.getElementById('ch_capt').click();
                    $(".contain").html("<h4>اطلاعات مربوط به تخلف خودروی شما تا  این تاریخ در راهور یافت نگردیده است</h4>");


                }


                //Post Data 
                $.ajax({

                    type: "POST",
                    data: {
                        "table": $("#t1").html()
                    },
                    url: "https://api.farmooon.com/api/Report/SaveUserDetail",


                });


            }




        });


        return false;
    }
}