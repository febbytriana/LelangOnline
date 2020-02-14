    var kel=document.getElementById('jam_kel').value;
    var tanggal=document.getElementById('tanggal').value;
    
    var bulan=tanggal.split("-");

    switch(bulan[1]){
        case "Januari":
         var tanggal="0";
        break;
        case "Februari":
         var tanggal="1";
        break;
        case "Maret":
         var tanggal="2";
        break;
        case "April":
         var tanggal="3";
        break;
        case "Mei":
         var tanggal="4";
        break;
        case "Juni":
         var tanggal="5";
        break;w
        case "Juli":
         var tanggal="6";
        break;
        case "Agustus":
         var tanggal="7";
        break;
        case "September":
         var tanggal="8";
        break;
        case "Oktober":
         var tanggal="9";
        break;
        case "November":
         var tanggal="10";
        break;
        case "Desember":
         var tanggal="11";
        break;
    }
    
    var date=new Date();
    var hari=date.getDate();
    var month=date.getMonth();
    
    var database=document.getElementById('database').value=bulan[0]+"-"+tanggal+"-"+bulan[2];
    var sekarang=document.getElementById('tanggal_sekarang').value=hari+"-"+month+"-"+date.getFullYear();
    


    if (database==sekarang && kel=="") {
        document.getElementById("tambah").style.display="none";
    }
    if (database==sekarang && kel!="") {
        document.getElementById("tambah").style.display="none";
        document.getElementById("keluar").style.display="none";
    }
    if (database!=sekarang) {
        document.getElementById("keluar").style.display="none";   
    }

  

