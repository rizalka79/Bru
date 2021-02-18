            function otomatis(){
                var kon_peg_nik = $("#kon_peg_nik").val();
                $.ajax({
                    url: 'otomatis.php',
                    data:"kon_peg_nik="+kon_peg_nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#peg_jk').val(obj.peg_jk);
                    $('#peg_tgllahir').val(obj.peg_tgllahir);
                    $('#peg_nip').val(obj.peg_nip);
                    $('#peg_nik').val(obj.peg_nik);
                    $('#peg_stapeg').val(obj.peg_stapeg);
                    $('#peg_org').val(obj.peg_org);
                    $('#peg_orgunit').val(obj.peg_orgunit);
               });
            }
     